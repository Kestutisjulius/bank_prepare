<?php
namespace Bank;
use Bank\Controllers\HomeController;
class App
{
    public static function start(){
        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);
        self::route($url);
        print_r($url);
    }
    private static function route(array $url){
        if (count($url) == 1 && $url[0] === ''){
            return (new HomeController())->index();
        } else {
            echo 'kitkas';
        }
    }
    public static function view($name){
      return require __DIR__.'./../views/'.$name.'.php';
    }
}