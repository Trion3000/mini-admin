<?php
spl_autoload_register(function($className) {
    $file = "classes/$className.php";
    
    if (!file_exists($file)) {
        throw new Exception("Class {$className} not found", 404);
    }
    
    require $file;
});

class mynamespace_DateTime {}



// admin@adminka.com, 'komarik333';
// manager@adminka.com 'qweqwe111';
// echo md5(md5('salt') . 'qweqwe111');


$pdo = new PDO('mysql: host=localhost; dbname=my_db', 'root', '');
// Registry::set('pdo', $pdo);

session_start();
require 'inc/functions.php';
// $_GET['page']. If not set, then = 'home'
$page = get('page', 'home');
$page .= '.php';
$pages_available = scandir('pages');
array_shift($pages_available);
array_shift($pages_available);
if (!in_array($page, $pages_available)) {
    $page = '404.php';
}
ob_start();
require 'pages/' . $page;
$content = ob_get_clean();
require 'layout.php';