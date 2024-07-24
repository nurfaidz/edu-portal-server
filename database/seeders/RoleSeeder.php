<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Spatie\Permission\Models\Role::firstOrCreate([
            'name' => \App\Enums\Roles\Role::Superadmin->value,
            'guard_name' => 'superadmin',
        ]);

        // Admin

        // Lecturer
        \Spatie\Permission\Models\Role::firstOrCreate([
            'name' => \App\Enums\Roles\Role::Lecturer->value,
            'guard_name' => 'lecturer',
        ]);

        // Student
    }
}
