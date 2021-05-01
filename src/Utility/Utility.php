<?php


namespace app\Utility;

class Utility
{
    public static function isPosted()
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
            return true; 
        }
        return false;
    }
}
