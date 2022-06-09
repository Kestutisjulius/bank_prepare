<?php

namespace Bank\controllers;

use Bank\App;
use Bank\Messages;

class LoginController
{
    public function loginShow(){
        return App::view('login', ['messages' => Messages::get()]);
    }
    public function loginDo(){
        $users = json_decode(file_get_contents(App::APP.'data/users.json'));
        foreach ($users as $user){
            if ($_POST['name'] != $user->name){
                continue;
            }
            if (md5($_POST['psw']) != $user->psw){
                Messages::add('negerai', 'alert');
                return App::redirect('login');
            } else {
                App::authAdd($user);
                Messages::add('sveikas'.$user->full_name, 'success');
                return App::redirect('forma');
            }
        }
        Messages::add('blogai', 'alert');
        return App::redirect('login');
    }
    public static function logOut(){
        App::authRem();
        Messages::add('iki greito', 'success');
        return App::redirect('login');
    }
}