<?php

namespace App\Enums\Courses;

enum Classroom: string
{
    case A = 'A';
    case B = 'B';

    public static function options(): array
    {
        return [
            self::A->value => self::A->value,
            self::B->value => self::B->value,
        ];
    }
}
