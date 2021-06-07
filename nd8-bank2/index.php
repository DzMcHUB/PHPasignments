<?php

spl_autoload_register(function ($class) {

    $prefix = 'Bankas2';

    $base_dir = DIR;

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

use Bankas2\Controller\Account;

define('INSTALL_DIR', '/assignments/nd8-bank2/');
define('URL', 'http://localhost/assignments/nd8-bank2/');
define('DIR', __DIR__ . '/');

$url = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
$url = explode('/', $url);
$GLOBALS['url'] = $url;

if ($url[0] === '') {

    (new Account)->index();
}
elseif ($url[0] === 'openNew') {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        (new Account)->createExe();
    }
    else {
        (new Account)->create();
    }
    
}
elseif ($url[0] === 'delete' && count($url) == 2) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        (new Account)->deleteExe($url[1]);
    }    
}
elseif ($url[0] === 'add' && count($url) == 2){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        (new Account)->additionExe($url[1]);
    }
    else {
        (new Account)->addition($url[1]);
    }
    
}
elseif ($url[0] === 'sub' && count($url) == 2){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        (new Account)->subtractionExe($url[1]);
    }
    else {
        (new Account)->subtraction($url[1]);
    }
    
}
elseif($url[0] === 'login'){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        (new Account)->loginExe();
    }
    else {
        (new Account)->login();
    }
}


