<?php
require_once 'app/config/config.php';
session_start();
  // Autoload Core Classes
spl_autoload_register ( function ($class) {
$sources = array("app/controllers/$class.php", "app/models/$class.php","app/lib/$class.php",  "app/core/$class.php" );
    foreach ($sources as $source) {
        if (file_exists($source)) {
            require_once $source;
        }
    } 
});



$router = new Router;
$router->run();