<?php


namespace TestYa0;


class Helper
{
    const VERSION = '0.0.3';

    public static function show($text)
    {
        echo $text;
    }

    public static function version()
    {
        return self::VERSION;
    }
}