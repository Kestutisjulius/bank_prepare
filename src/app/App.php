<?php
namespace Bank;
use Bank\Controllers\HomeController;
use Bank\Messages;
class App
{
    const DOMAIN = 'kbankas.lt';
    private static $html;

    public static function start(){
        session_start();
        Messages::init();
        ob_start(); //kibiras
        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);
        self::route($url);
        self::$html = ob_get_contents();
        ob_end_clean();
    }

    public static function sent(){
        echo self::$html;
    }

    private static function route(array $url){

        $method = $_SERVER['REQUEST_METHOD']; //get or post

        if (count($url) == 1 && $url[0] === ''){
            return (new HomeController())->index();
        }
        if ('GET' == $method && count($url) == 1 && $url[0] === 'forma'){
            return (new HomeController())->form();
        }
        if ('GET' == $method && count($url) == 1 && $url[0] === 'json'){
            return (new HomeController())->indexJSON();
        }
        if ('GET' == $method && count($url) == 2 && $url[0] === 'get-it'){
            return (new HomeController())->getIt($url[1]);
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
    public static function json(array $data = []){
        header('Content-Type: application/json');
        echo json_encode($data);
    }
    public static function redirect($url = ''){
        header('Location: http://'.self::DOMAIN.'/'.$url);
    }
}