<?php

namespace App\Repositories\Interfaces;

interface DepartmentRepositoryInterface
{
    public function pluck();

    public function store($request);

    public function find($id);

    public function update($request,$id);

    public function destroy($id);

}
