<?php
namespace Bankas;
use Bankas\Controllers\HomeController;
use Bankas\Controllers\LoginController;
use Bankas\Messages;
class App{

    const DOMAIN = 'bankas.lt';
    const APP = __DIR__ . '/../';

    private static $html;
    public static function start(){
        session_start();
        Messages::init();
        ob_start(); // renka info i kibira; stabdosi tada kai baigiasi skripto veikimas arba
        $uri = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($uri);
        self::route($uri);
        self::$html = ob_get_contents(); // paimam, ka surinko kibiras;
        ob_end_clean();
    }
    public static function sent(){
        echo self::$html;
    }

    public static function view(string $name, array $data = []){
        extract($data);
        require __DIR__.'/../views/'.$name.'.php';
    }
    //JSON, jei reacte
    public static function json( array $data = []){
        header('Content-type: application/json; charset-utf8');
        echo json_encode($data);
    }

    public static function redirect($url = ''){
        header('Location: http://'.self::DOMAIN.'/'.$url);
    }
    public static function url($url = ''){
        return ' http://'.self::DOMAIN.'/'.$url;
    }
    public static function authAdd(object $user){
        $_SESSION['auth'] = 1;
        $_SESSION['user'] = $user;
    }
    public static function authRem(object $user){
        unsert($_SESSION['auth'], $_SESSION['user']);
    }
    public static function auth() : bool {
        return isset($_SESSION['auth']) && $_SESSION['auth'] == 1;
    }
    public static function authName() : string {
        return $_SESSION['name'];
    }
    private static function route(array $uri){
        $m = $_SERVER['REQUEST_METHOD'];
        if('GET' == $m && count($uri) == 2 && $uri[0] == 'login'){ 
            return (new LoginController)->showLogin();
        }
        if('POST' == $m && count($uri) == 2 && $uri[0] == 'login'){ 
            return (new LoginController)->doLogin();
        }
        if('POST' == $m && count($uri) == 2 && $uri[0] == 'logout'){ //logout metodas yra post
            return (new LoginController)->doLogout();
        }


        if(count($uri) == 1 && $uri[0] == ''){
            return (new HomeController)->index();
        }
        if('GET' == $m && count($uri) == 1 && $uri[0] == 'forma'){
            return (new HomeController)->form();
        }
   
        if('POST' == $m && count($uri) == 1 && $uri[0] == 'forma'){
            return (new HomeController)->doForm();
        }
        if('GET' == $m && count($uri) == 1 && $uri[0] == 'json'){
            return (new HomeController)->indexJson();
        }
        if('GET' == $m && count($uri) == 2 && $uri[0] == 'get-it'){ // kaip perduoti parametra
            return (new HomeController)->getIt($uri[1]);
        }
        else {
            echo 'alio';
        }
    }

}