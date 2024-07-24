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
        // Lecturer
        // Student
    }
}
