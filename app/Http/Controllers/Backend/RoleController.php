<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\RolesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Role\CreateRequest;
use App\Repositories\Interfaces\RoleRepositoryInterface;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public $role;

    public function __construct(RoleRepositoryInterface $role)
    {
        $this->role = $role;
    }

    public function index(RolesDataTable $rolesDataTable)
    {
        abort_unless(auth()->user()->can('view-role'),401);
        return $rolesDataTable->render('backend.roles.index');
    }

    public function create()
    {
        abort_unless(auth()->user()->can('create-role'),401);

        $permissions = $this->role->pluckPermission();       
        $selected = [];
        return view('backend.roles.create', compact('permissions','selected'));
    }

    public function store(CreateRequest $request)
    {
        $this->role->store($request);
        \Flash::success('Role saved successfully.');
        return redirect()->route('roles.index');
    }


    public function show($id)
    {
        $role = $this->role->find($id);
        return view('backend.roles.show',compact('role'));
    }

    public function edit($id)
    {
        abort_unless(auth()->user()->can('edit-role'),401);

        $role = $this->role->find($id);
        $permissions = $this->role->pluckPermission(); 
        $selected = $role->permissions->pluck('id')->toArray();

        return view('backend.roles.edit', compact('role', 'permissions', 'selected'));
    }


    public function update($id, CreateRequest $request)
    {
        $this->role->update($request,$id);
        \Flash::success('Role updated successfully.');
        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        $this->role->destroy($id);
        \Flash::error('Role deleted successfully.');
        return redirect()->route('roles.index');
    }
}
