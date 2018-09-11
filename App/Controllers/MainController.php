<?php
namespace App\Controllers;

use App;

class MainController{

    public function getView($name, $param)
    {
        if (file_exists(__DIR__.'/../View/'.$name.'.php'))
        {
            ob_start();

            extract($param);

            return require_once __DIR__ . '/../View/' . $name . '.php';

            return ob_get_clean();

        }else{
            return (new \App\HanderErrors())->errors("Такого шаблона нет!!!");
        }
    }
}