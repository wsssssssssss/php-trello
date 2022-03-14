<?php

session_start();

define("__ROOT__", dirname(__DIR__));


require_once( __ROOT__ . "/autoloader.php" );
require_once( __ROOT__ . "/user.php" );
require_once( __ROOT__ . "/web.php" );



src\App\Route::init();
