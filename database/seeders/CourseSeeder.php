<?php

namespace Database\Seeders;

use App\Enums\Courses\Type;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            ['name' => 'Bahasa Indonesia', 'code' => '000001', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Olah Raga dan Seni', 'code' => '000002', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Logika Informatika', 'code' => '000003', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Algoritma Pemrograman', 'code' => '000004', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Praktikum Algoritma Pemrograman', 'code' => '000005', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Bahasa Inggris', 'code' => '000006', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Dasar Pemrograman', 'code' => '000007', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Praktikum Dasar Pemrograman', 'code' => '000008', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Pengantar Teknologi Informasi', 'code' => '000009', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Praktikum Pengantar Teknologi Informasi', 'code' => '000010', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Kalkulus Diferensial', 'code' => '000011', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 1],
            ['name' => 'Pendidikan Kebangsaan', 'code' => '000012', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Desain dan Analisis Algoritma', 'code' => '000013', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Praktikum Desain dan Analisis Algoritma', 'code' => '000014', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Desain Basis Data', 'code' => '000015', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Praktikum Desain Basis Data', 'code' => '000016', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Arsitektur & Organisasi Komputer', 'code' => '000017', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Kalkulus Integral', 'code' => '000018', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Sistem Informasi', 'code' => '000019', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Pemrograman Web', 'code' => '000020', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Praktikum Pemrograman Web', 'code' => '000021', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Komunikasi Data', 'code' => '000022', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 2],
            ['name' => 'Pendidikan Pancasila', 'code' => '000023', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Struktur Data', 'code' => '000024', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Praktikum Struktur Data', 'code' => '000025', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Pemrograman Basis Data', 'code' => '000026', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Praktikum Pemrograman Basis Data', 'code' => '000027', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Sistem Digital', 'code' => '000028', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Praktikum Sistem Digital', 'code' => '000029', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Pengembangan Aplikasi Web', 'code' => '000030', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Praktikum Pengembangan Aplikasi Web', 'code' => '000031', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Matematika Diskret', 'code' => '000032', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Embedded System', 'code' => '000033', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 3],
            ['name' => 'Pendidikan Kewarganegaraan', 'code' => '000034', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Sistem Operasi', 'code' => '000035', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Praktikum Sistem Operasi', 'code' => '000036', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Pemrograman Berorientasi Obyek', 'code' => '000037', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Praktikum Pemrograman Berorientasi Obyek', 'code' => '000038', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Jaringan Komputer', 'code' => '000039', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Praktikum Jaringan Komputer', 'code' => '000040', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Statistik & Probabilitas', 'code' => '000041', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Praktikum Statistik & Probabilitas', 'code' => '000042', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Sosio Informatika dan Profesionalisme', 'code' => '000043', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Teori Bahasa dan Otomata', 'code' => '000044', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Sistem Komputer Interaktif', 'code' => '000045', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 4],
            ['name' => 'Pendidikan Agama', 'code' => '000046', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 5],
            ['name' => 'Aljabar Linier', 'code' => '000047', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 5],
            ['name' => 'Metode Numerik', 'code' => '000048', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 5],
            ['name' => 'Praktikum Metode Numerik', 'code' => '000049', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 5],
            ['name' => 'Pemrograman Perangkat Bergerak', 'code' => '000050', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 5],
            ['name' => 'Praktikum Pemrograman Perangkat Bergerak', 'code' => '000051', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 5],
            ['name' => 'Teknopreneur', 'code' => '000052', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 5],
            ['name' => 'Teknik Penulisan dan Presentasi', 'code' => '000053', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 5],
            ['name' => 'Pemrograman Visual', 'code' => '000054', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 5],
            ['name' => 'Praktikum Pemrograman Visual', 'code' => '000055', 'credits' => 1, 'type' => Type::Mandatory->value, 'semester' => 5],
            ['name' => 'Grafika Komputer', 'code' => '000056', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 6],
            ['name' => 'Kecerdasan Buatan', 'code' => '000057', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 6],
            ['name' => 'Kerja Praktek', 'code' => '000058', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 6],
            ['name' => 'Rekayasa Perangkat Lunak', 'code' => '000059', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 6],
            ['name' => 'Riset Operasi', 'code' => '000060', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 6],
            ['name' => 'Mata Kuliah Pilihan 1', 'code' => '000061', 'credits' => 2, 'type' => Type::Elective->value, 'semester' => 6],
            ['name' => 'Mata Kuliah Pilihan 2', 'code' => '000062', 'credits' => 2, 'type' => Type::Elective->value, 'semester' => 6],
            ['name' => 'Manajemen Proyek Perangkat Lunak', 'code' => '000063', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 7],
            ['name' => 'Proyek Perangkat Lunak', 'code' => '000064', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 7],
            ['name' => 'Riset Teknologi dan Informasi', 'code' => '000065', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 7],
            ['name' => 'Sistem Pakar', 'code' => '000066', 'credits' => 2, 'type' => Type::Mandatory->value, 'semester' => 7],
            ['name' => 'Kuliah Kerja Nyata', 'code' => '000067', 'credits' => 3, 'type' => Type::Mandatory->value, 'semester' => 7],
            ['name' => 'Mata Kuliah Pilihan 3', 'code' => '000068', 'credits' => 2, 'type' => Type::Elective->value, 'semester' => 7],
            ['name' => 'Mata Kuliah Pilihan 4', 'code' => '000069', 'credits' => 2, 'type' => Type::Elective->value, 'semester' => 7],
            ['name' => 'Skripsi', 'code' => '000070', 'credits' => 6, 'type' => Type::Mandatory->value, 'semester' => 8],
        ];

        foreach ($courses as $course) {
            \App\Models\Course::create($course);
        }
    }
}
