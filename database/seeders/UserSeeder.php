<?php

namespace Database\Seeders;

use App\Enums\Roles\Role as RolesRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = User::factory()->create([
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
        ]);

        $roleSuperadmin = Role::where('name', RolesRole::Superadmin->value)->first();
        $superadmin->assignRole($roleSuperadmin);

        // Admin
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'adminExample@gmail.com',
        ]);

        $roleAdmin = Role::where('name', RolesRole::Admin->value)->first();
        $admin->assignRole($roleAdmin);


        // Lecturer
        $lecturer = User::factory()->create([
            'name' => 'Lecturer',
            'email' => 'LecturerExample@gmail.com',
        ]);

        $roleLecturer = Role::where('name', RolesRole::Lecturer->value)->first();
        $lecturer->assignRole($roleLecturer);

        // Student
        $student = User::factory()->create([
            'name' => 'Student',
            'email' => 'StudentExample@gmail.com',
        ]);

        $roleStudent = Role::where('name', RolesRole::Student->value)->first();
        $student->assignRole($roleStudent);
    }
}
