<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'View Department',
                'label' => 'Department',                
                'slug' => 'view-department',
            ],
            [
                'name' => 'Create Department',
                'label' => 'Department',                
                'slug' => 'create-department',
            ],
            [
                'name' => 'Edit Department',
                'label' => 'Department',                
                'slug' => 'edit-department',
            ],
            [
                'name' => 'Delete Department',
                'label' => 'Department',                
                'slug' => 'delete-department',
            ],
            [
                'name' => 'View Role',
                'label' => 'Role',                
                'slug' => 'view-role',
            ],
            [
                'name' => 'Create Role',
                'label' => 'Role',                
                'slug' => 'create-role',
            ],
            [
                'name' => 'Edit Role',
                'label' => 'Role',                
                'slug' => 'edit-role',
            ],
            [
                'name' => 'Delete Role',
                'label' => 'Role',                
                'slug' => 'delete-role',
            ],
            [
                'name' => 'View User',
                'label' => 'User',                
                'slug' => 'view-user',
            ],
            [
                'name' => 'Create User',
                'label' => 'User',                
                'slug' => 'create-user',
            ],
            [
                'name' => 'Edit User',
                'label' => 'User',                
                'slug' => 'edit-user',
            ],
            [
                'name' => 'Delete User',
                'label' => 'User',                
                'slug' => 'delete-user',
            ],
            
            
        ];


        Permission::insert($data);
    }
}
