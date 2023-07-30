<?php

namespace App\Repositories\Interfaces;

interface RoleRepositoryInterface
{
    public function pluck();

    public function pluckPermission();

    public function store($request);

    public function find($id);

    public function update($request,$id);

    public function destroy($id);
}
