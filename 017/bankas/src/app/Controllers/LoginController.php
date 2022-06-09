<?php
namespace Bankas\Controllers;
use Bankas\App;
use Bankas\Messages;

class LoginController {
    public function showLogin(){
        return App::view('login', ['messages' => Messages::get()]); ///nesurasyta viskas su messages
    }
    public function doLogin(){
        $users = json_decode(file_get_contents(App::APP.'data/users.json'));
        foreach($users as $user){
            if($_POST['name'] != $user -> name){
                continue;
            }
            if(md5($_POST['psw']) != $user -> psw){
                Messages::add('Labai blogai', 'alert');
                return App::redirect('login');
            } else {
                App::authorAdd($user);
                Messages::add('Sveikas'.$user->full_name, 'success');
                return App::redirect('forma');
            }
        }
        Messages::add('Labai blogai', 'alert');
        return App::redirect('login');
    }
    public function doLogout(){
        App::authRem();
        Message::add('atia', 'success');
        return App::redirect('Login')
    }
}