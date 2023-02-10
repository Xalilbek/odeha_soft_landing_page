<?php


namespace App\Helper;


class Standard
{
    public static function locale()
    {
        return request()->cookie('my_locale',config('app.locale'));
    }

}
