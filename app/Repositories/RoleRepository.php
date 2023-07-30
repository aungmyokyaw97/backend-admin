<?php

namespace App\Repositories;

use App\Models\Permission;
use App\Models\Role;
use App\Repositories\Interfaces\RoleRepositoryInterface;

class RoleRepository implements RoleRepositoryInterface
{

    public $role;

    public function __construct(Role $role)
    {
         $this->role = $role;
    }

    public function pluck()
    {           
        return $this->role->pluck('name','id');
    }

    public function pluckPermission()
    {         
        return Permission::pluck('name', 'id');
    }

    public function store($request)
    {           
        abort_unless(auth()->user()->can('create-role'),401);

        $data = $request->validated();
        $data['slug'] = \Str::slug($request->name);

        $role = $this->role->create($data);
        $role->permissions()->attach(array_keys($request->permission));
    }

    public function find($id)
    {           
        abort_unless(auth()->user()->can('view-role'),401);

        return $this->role->with('permissions')->findorFail($id);
    }

    public function update($request,$id)
    {
        
        abort_unless(auth()->user()->can('edit-role'),401);

        $data = $request->validated();
        $data['slug'] = \Str::slug($request->name);

        $role = $this->role->findOrFail($id);
        $role->permissions()->sync(array_keys($request->permission));
        $role->update($data);
    }


    public function destroy($id)
    {
        abort_unless(auth()->user()->can('delete-role'),401);

        $role = $this->role->findOrFail($id);
        $role->permissions()->detach();
        $role->delete();           
    }


}
