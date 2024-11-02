<?php

namespace Kiner\PhilippinesHolidays;

class Holidays
{
    protected static $holidays;

    public static function setHolidays(array $holidays)
    {
        self::$holidays = $holidays;
    }

    public static function all()
    {
        return self::$holidays ?? [];
    }

    public static function month($month)
    {
        $holidays = self::all();

        if (is_numeric($month)) {
            $month = date('F', mktime(0, 0, 0, $month, 1));
        }

        $month = ucfirst(strtolower($month));

        return $holidays[$month] ?? [];
    }
}
