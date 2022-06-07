<?php
//settings
define('INSTALL', '/bit/2-homework/014/in/');
define('DIR', __DIR__ . '/app/');
define('URL', 'https://localhost/bit/2-homework/014/in/');

$uri = str_replace(INSTALL, '', $_SERVER['REQUEST_URI']);
$uri = explode('/', $uri);

if(count($uri) == 2){
    if($uri[0] == 'kambarys'){
        if ($uri[1] == '1'){
            require __DIR__. '/app/k1.php';
        }
        elseif ($uri[1] == '2'){
            require __DIR__. '/app/k2.php';
        } 
        else {
            require __DIR__. '/app/404.php';
        }
    } 
    elseif ($uri[0] == 'add-fund'){
        $userID = (int) $uri[1];
        require __DIR__. '/app/addMoney.php';
    } 
    else {
        require __DIR__. '/app/404.php';
    }
}
else {
    require __DIR__. '/app/404.php';
}

// per ? kaip?
//per / kam? - kintama url dalis
//per post body ką?Data