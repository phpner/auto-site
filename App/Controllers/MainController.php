<?php
namespace App\Controllers;

use App;

class MainController{

    /**
     * @param $name
     * @return mixed
     */

    public function getView($name)
    {
        if (file_exists(__DIR__.'/../View/'.$name.'.php'))
        {
            return require_once __DIR__ . '/../View/' . $name . '.php';
        }else{
            return (new \App\HanderErrors())->errors("Такого шаблона нет!!!");
        }
    }
}