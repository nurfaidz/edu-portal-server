<?php

namespace App\Enums\Roles;

enum Role: string
{
    case Superadmin = 'superadmin';
    case Lecturer = 'lecturer';
    case Student = 'student';
    case Admin = 'admin';
}
