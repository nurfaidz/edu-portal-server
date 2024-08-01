<?php

namespace App\Enums\Courses;

enum Semester: string
{
    case One = '1';
    case Two = '2';
    case Three = '3';
    case Four = '4';
    case Five = '5';
    case Six = '6';
    case Seven = '7';
    case Eight = '8';

    public static function options(): array
    {
        return [
            self::One->value => self::One->value,
            self::Two->value => self::Two->value,
            self::Three->value   => self::Three->value,
            self::Four->value    => self::Four->value,
            self::Five->value    => self::Five->value,
            self::Six->value     => self::Six->value,
            self::Seven->value   => self::Seven->value,
            self::Eight->value   => self::Eight->value,
        ];
    }
}
