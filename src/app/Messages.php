<?php

namespace Bank;

class Messages
{
    private static $bag;

    public static function init(){
        self::$bag = $_SESSION['msg'] ?? [];
        unset($_SESSION['msg']);
    }

    public static function add(string $txt){

    }
}