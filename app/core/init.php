<?php
    spl_autoload_register(static function($classname){
        require "../app/models/".ucfirst($classname).".php";
    });

    require 'config.php';
    require 'functions.php';
    require 'Database.php';
    require 'Model.php';
    require 'Controller.php';
    require 'App.php';
