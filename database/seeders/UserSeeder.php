<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Staff;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $department = Department::create([
            'name' => 'IT Department',
            'label' => 'IT Departments',
        ]);

        $staff = Staff::create([
            'name' => 'rootadmin',
            'email' => 'rootadmin@gmail.com',
            'join_date' => Carbon::now(),
            'department_id' => $department->id,
            'gender' => 'Male',
            'mobile' => '09000',
            'position' => 'Senior',
            'age' => 18
        ]);

        User::create([
            'name' => 'rootadmin',
            'email' => 'rootadmin@gmail.com',            
            'is_super' => 1,
            'password' => Hash::make(123456),
            'staff_id' => $staff->id
        ]);
    }
}
