<?php

namespace App\Repositories;

use App\Models\Department;
use App\Repositories\Interfaces\DepartmentRepositoryInterface;

class DepartmentRepository implements DepartmentRepositoryInterface
{
    public $department;

    public function __construct(Department $department)
    {
         $this->department = $department;
    }

    public function pluck()
    {           
        return $this->department->pluck('name','id');
    }

    public function store($request)
    {           
        abort_unless(auth()->user()->can('create-department'),401);

        $this->department->create($request->validated());
    }

    public function find($id)
    {
        return $this->department->findOrFail($id);         
    }

    public function update($request,$id)
    {
        abort_unless(auth()->user()->can('edit-department'),401);

        $this->department->findOrFail($id)->update($request->validated());           
    }

    public function destroy($id)
    {           
        abort_unless(auth()->user()->can('delete-department'),401);

        $this->department->findOrFail($id)->delete();
    }

}
