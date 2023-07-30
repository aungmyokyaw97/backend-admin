<?php

namespace App\Repositories;

use App\Models\Staff;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    public $user;    
    public $staff;

    public function __construct(User $user,Staff $staff)
    {
         $this->user = $user;         
         $this->staff = $staff;

    }

    public function store($request)
    {   
        abort_unless(auth()->user()->can('create-user'),401);

        $data = $request->validated();
        $data['join_date'] = Carbon::now();        
        $data['created_by'] = auth()->user()->name;

        
        try {
            \DB::beginTransaction();
            
            $staff = $this->staff->create($data);
            $user = $staff->user()->save($this->handleUserRequest($request));          
            $user->roles()->attach($request->roles);
            
            \DB::commit();
        } catch (\Exception $e) {          
            \DB::rollback();
        }
    }

    public function handleUserRequest($request)
    {           
        return new $this->user([
            'name' => $request->login_name,
            'email' => $request->login_email,
            'password' => Hash::make($request->password),
            'created_by' => auth()->user()->name
        ]);
    }

    public function findUser($id)
    {
        abort_unless(auth()->user()->can('view-user'),401);

        return $this->user->with(['staff.department','roles'])->findOrFail($id);
    }

    public function edit($id)
    {           
        abort_unless(auth()->user()->can('edit-user'),401);

        return $this->user->with(['staff','roles'])->findOrFail($id);
    }


    public function update($request,$id)
    {           
        abort_unless(auth()->user()->can('edit-user'),401);
        
        $data = $request->validated();       
        $data['updated_by'] = auth()->user()->name;

        try {
            \DB::beginTransaction();

            $user = $this->handleUpdateUserRequest($request,$id);
            $this->staff->findOrFail($user->staff_id)->update($data);       
            $user->roles()->sync($request->roles);
            
            \DB::commit();
        } catch (\Exception $e) {          
            \DB::rollback();
        }
    }

    public function handleUpdateUserRequest($request,$id)
    {           
        $user = $this->user->findOrFail($id);
        
        if ($request->has('password')) {
            $user->password = bcrypt($request->input('password'));
        } 
        
        $user->name = $request->login_name;
        $user->email = $request->login_email;
        $user->updated_by = auth()->user()->name;
        $user->update();

        return $user;
    }

    public function profileUpdate($request)
    {    

        $data = $request->validated();       
        $data['updated_by'] = auth()->user()->name;

        try {
            \DB::beginTransaction();

            $user = $this->handleUpdateUserRequest($request,auth()->user()->id);
            $this->staff->findOrFail($user->staff_id)->update($data);       
            
            \DB::commit();
        } catch (\Exception $e) {          
            \DB::rollback();
        }
    }

    public function destroy($id)
    {
        abort_unless(auth()->user()->can('delete-user'),401);

        $user = $this->user->findOrFail($id);
        $user->roles()->detach();        
        $user->staff()->delete();
        $user->delete();           
    }

}
