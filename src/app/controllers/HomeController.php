<?php
namespace Bank\Controllers;
use Bank\App;
use Bank\Messages;

class HomeController{
        public function index(){
            $list = [];
            for ($i = 0; $i < 3; $i++){
                $list[] = rand(1000, 9999);
            }
           return App::view('home', ['title' => 'ALABAMA', 'list' => $list]);
        }
        public function indexJSON(){
            $list = [];
            for ($i = 0; $i < 13; $i++){
                $list[] = rand(1000, 9999);
            }
           return App::json( ['title' => 'ALABAMA', 'list' => $list]);
        }
        public function form(){
            return App::view('form', ['messages'=> Messages::get()]);
        }
        public function doForm(){
            Messages::add('Puiku', 'success');
            Messages::add($_POST['alabama'], 'alert');
            return App::redirect('forma');
        }
        public function getIt($param){
            echo 'AAA'.$param;
        }
    }
