<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\DepartmentsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Department\CreateRequest;
use App\Repositories\Interfaces\DepartmentRepositoryInterface;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public $department;

    public function __construct(DepartmentRepositoryInterface $department)
    {
        $this->department = $department;
    }

    public function index(DepartmentsDataTable $departmentsDataTable)
    {
        abort_unless(auth()->user()->can('view-department'),401);
        return $departmentsDataTable->render('backend.departments.index');
    }


    public function create()
    {
        abort_unless(auth()->user()->can('create-department'),401);
        return view('backend.departments.create');
    }


    public function store(CreateRequest $request)
    {
        $this->department->store($request);
        \Flash::success('Department created successfully.');
        return redirect()->route('departments.index');
    }


    public function show($id)
    {
        abort_unless(auth()->user()->can('view-department'),401);
        $department = $this->department->find($id);
        return view('backend.departments.show',compact('department'));
    }


    public function edit($id)
    {
        abort_unless(auth()->user()->can('edit-department'),401);
        $department = $this->department->find($id);
        return view('backend.departments.edit',compact('department'));
    }


    public function update(CreateRequest $request, $id)
    {
        $this->department->update($request,$id);
        \Flash::success('Department updated successfully.');
        return redirect()->route('departments.index');
    }


    public function destroy($id)
    {
        $this->department->destroy($id);
        \Flash::success('Department deleted successfully.');
        return redirect()->route('departments.index');
    }
}
