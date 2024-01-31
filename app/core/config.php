<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    /** Database configuration */
    define('DBNAME', 'gym');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'password');
    define('DBDRIVER', '');

    define('ROOT', 'https://localhost/gym/public');
} else {
    /** Database configuration */
    define('DBNAME', 'gymstudi62940');
    define('DBHOST', 'sql.gymstudio-manager.it');
    define('DBUSER', 'gymstudi62940');
    define('DBPASS', 'gyms78706');
    define('DBDRIVER', '');

    define('ROOT', 'https://www.gymstudio-manager.it/public');
}

define('ASSETS', ROOT . '/assets');

define('CSS', ROOT . '/assets/css');
define('IMG', ROOT . '/assets/images');

define('APP_NAME', "Gym Master");
define('APP_DESCRIPTION', "Best Gym Administration App");

// true means show errors
define('DEBUG', true);
