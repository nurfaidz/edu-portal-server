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

        // Lecturers
        $lecturers = [
            ['name' => 'sofyan', 'lecturer_name' => 'Sofyan Lukmanfiandy, S.Kom., M.Kom.', 'email' => 'sofyan.lukmanfiandy@example.com'],
            ['name' => 'sri', 'lecturer_name' => 'Sri Rahayu, S.Kom. M.Eng.', 'email' => 'sri.rahayu@example.com'],
            ['name' => 'jemmy', 'lecturer_name' => 'Jemmy Edwin Bororing, S.Kom., M.Eng.', 'email' => 'jemmy.edwin@example.com'],
            ['name' => 'fatsyahrina', 'lecturer_name' => 'Fatsyahrina Fitriastuti, S.Si., M.T.', 'email' => 'fatsyahrina.fitriastuti@example.com'],
            ['name' => 'eri', 'lecturer_name' => 'Eri Haryanto, S.Kom., M.Kom.', 'email' => 'eri.haryanto@example.com'],
            ['name' => 'agustin', 'lecturer_name' => 'Agustin Setiyorini, S.Kom., M.Kom.', 'email' => 'agustin.setiyorini@example.com'],
            ['name' => 'jeffry', 'lecturer_name' => 'Jeffry Andhika Putra, S.T., M.M., M.Eng.', 'email' => 'jeffry.andhika@example.com'],
            ['name' => 'yumarlin', 'lecturer_name' => 'Yumarlin MZ, S.Kom., M.Pd., M.Kom.', 'email' => 'yumarlin.mz@example.com'],
            ['name' => 'ryan', 'lecturer_name' => 'Ryan Ari Setyawan S.Kom., M.Eng.', 'email' => 'ryan.ari@example.com'],
            ['name' => 'erry', 'lecturer_name' => 'Erry Maricha Oki NH, S.Kom., MTA', 'email' => 'erry.maricha@example.com'],
        ];

        $roleLecturer = Role::where('name', RolesRole::Lecturer->value)->first();

        foreach ($lecturers as $lecturerData) {
            $lecturer = User::factory()->create([
                'name' => $lecturerData['name'],
                'email' => $lecturerData['email'],
                'lecturer_name' => $lecturerData['lecturer_name'],
            ]);

            $lecturer->assignRole($roleLecturer);
        }

        // Student
        $student = User::factory()->create([
            'name' => 'Student',
            'email' => 'StudentExample@gmail.com',
        ]);

        $roleStudent = Role::where('name', RolesRole::Student->value)->first();
        $student->assignRole($roleStudent);
    }
}
