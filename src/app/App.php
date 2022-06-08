<?php
namespace Bank;
use Bank\Controllers\HomeController;
use Bank\Messages;
class App
{
    const DOMAIN = 'kbankas.lt';

    public static function start(){
        session_start();
        Messages::init();
        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);
        self::route($url);
    }
    private static function route(array $url){

        $method = $_SERVER['REQUEST_METHOD']; //get or post

        if (count($url) == 1 && $url[0] === ''){
            return (new HomeController())->index();
        }
        if ('GET' == $method && count($url) == 1 && $url[0] === 'forma'){
            return (new HomeController())->form();
        }
        if ('POST' == $method && count($url) == 1 && $url[0] === 'forma'){
            return (new HomeController())->doForm();
        } else {
            echo 'kitkas';
        }
    }
    public static function view(string $name, array $data = []){
        extract($data);
      return require __DIR__.'./../views/'.$name.'.php';
    }
    public static function redirect($url = ''){
        header('Location: http://'.self::DOMAIN.'/'.$url);
    }
}