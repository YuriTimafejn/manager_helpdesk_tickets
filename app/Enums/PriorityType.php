<?php

namespace App\Enums;

enum PriorityType
{
    const EMERGENCY = 1;
    const MOST_URGENT = 2;
    const  URGENT = 3;
    const LESS_URGENT = 4;
    const NOT_URGENT = 5;

    public static function getValues()
    {
        return [self::EMERGENCY, self::MOST_URGENT, self::URGENT, self::LESS_URGENT, self::NOT_URGENT];
    }
}
