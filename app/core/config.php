<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    /** Database configuration */
    define('DBNAME', 'gym');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'password');
    define('DBDRIVER', '');

    define('ROOT', 'http://localhost/gyn/public');
} else {
    /** Database configuration */
    define('DBNAME', 'test');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'password');
    define('DBDRIVER', '');

    define('ROOT', 'http://localhost/MVC/public');
}

define('ASSETS', ROOT . '/assets');

define('CSS', ROOT . '/assets/css');
define('IMG', ROOT . '/assets/images');

define('APP_NAME', "Gym Master");
define('APP_DESCRIPTION', "Best Gym Administration App");

// true means show errors
define('DEBUG', true);
