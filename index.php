<?php
require_once 'app/config/config.php';
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
  // Autoload Core Classes
spl_autoload_register ( function ($class) {
$sources = array("app/controllers/$class.php", "app/models/$class.php","app/lib/$class.php",  "app/core/$class.php" );
    foreach ($sources as $source) {
        if (file_exists($source)) {
            require_once $source;
        }
    } 
});

session_start();

$router = new Router;
$router->run();