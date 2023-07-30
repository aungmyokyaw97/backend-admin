<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\CreateRequest;
use App\Http\Requests\Backend\User\ProfileUpdateRequest;
use App\Http\Requests\Backend\User\UpdateRequest;
use App\Repositories\Interfaces\DepartmentRepositoryInterface;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public $user;

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function index(UsersDataTable $user)
    {   
        abort_unless(auth()->user()->can('view-user'),401);
        return $user->render('backend.users.index');
    }

    public function create(DepartmentRepositoryInterface $dep,RoleRepositoryInterface $rol)
    {    
        abort_unless(auth()->user()->can('create-user'),401);
        
        $departments = $dep->pluck();
        $roles = $rol->pluck();
        return view('backend.users.create',compact('departments','roles'));
    }
    
    public function store(CreateRequest $request)
    { 
        $this->user->store($request);
        \Flash::success('User created successfully.');
        return redirect()->route('users.index');    
    }

    public function show($id)
    {
        $user = $this->user->findUser($id);
        return view('backend.users.show',compact('user'));  
    }

    public function edit($id,DepartmentRepositoryInterface $dep,RoleRepositoryInterface $rol)
    {
        $user = $this->user->edit($id);
        $departments = $dep->pluck();
        $roles = $rol->pluck();
        return view('backend.users.edit',compact('departments','roles','user'));  
    }

    public function profile()
    {
        $user = $this->user->edit(auth()->user()->id);
        return view('backend.users.profile',compact('user'));  
    }

    public function profileUpdate(ProfileUpdateRequest $request)
    {       
        $this->user->profileUpdate($request);
        \Flash::success('Profile updated successfully.');
        return redirect()->back();
    } 

    public function update(UpdateRequest $request,$id)
    {
        $this->user->update($request,$id);
        \Flash::success('User updated successfully.');
        return redirect()->route('users.index'); 
    }


    public function destroy($id)
    {
        $this->user->destroy($id);
        \Flash::error('User deleted successfully.');
        return redirect()->route('users.index');
    }



}
