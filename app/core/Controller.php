<?php

trait Controller
{
    public function view($name, $data = [])
    {
        $filename = "../app/views/" . $name . ".view.php";
        if (!file_exists($filename)) {
            $filename = "../app/views/404.view.php";
        }
        require $filename;
    }

    public function redirect($controller, $method = 'index')
    {
        header("Location: " . ROOT . "/$controller/$method");
    }
}
