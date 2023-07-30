<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function store($request);

    public function findUser($id);
    
    public function edit($id);
    
    public function update($request,$id);

    public function destroy($id);

    public function profileUpdate($request);

}
