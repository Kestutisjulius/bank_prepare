<?php

namespace Bank;

class Messages
{
    private static $bag;

    public static function init() : void {
        self::$bag = $_SESSION['msg'] ?? [];
        unset($_SESSION['msg']);
    }

    public static function add(string $txt, string $type) : void {
        $_SESSION['msg'][]=['msg' => $txt, 'type' => $type];
    }
    public static function get() : array {
        return self::$bag;
    }
}