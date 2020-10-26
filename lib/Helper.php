<?php


namespace TestYa1;

/**
 * Class Helper
 * @package TestYa1
 */
class Helper
{
    const VERSION = '0.0.5';

    public static function show($text)
    {
        echo $text;
    }

    public static function version()
    {
        return self::VERSION;
    }
}