<?php
namespace Bankas\Controllers;
use Bankas\App;
use Bankas\Messages;

class HomeController{
    public function index(){
        $list = [];
        for($i = 0; $i< 10; $i++){
            $list[] = rand(1000, 9999);
        }
        return App::view('home', [
            'title' => 'Home', 
            'list' => $list]);
    }
    public function form(){
        if(!self::auth()){
            return self::redirect('Login');
        }
        return App::view('form', ['messages' => Messages::get()]);
    }
    public function doForm(){
        Messages::add('puiku','success');
        return App::redirect('forma');
    }

    public function indexJson(){
        $list = [];
        for($i = 0; $i< 10; $i++){
            $list[] = rand(1000, 9999);
        }
        return App::json([
            'title' => 'Home', 
            'list' => $list]);
    }
    public function getIt($param){ // kaip perduoti paramentrus
        echo 'AAA'. $param;
    }
}