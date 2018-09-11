<?php
namespace App\Controllers;

use App;
use PDO;
use PDOException;
use PDOStatement;


class MainController{

    protected $nameDB = '';

    /**
     * @param $name
     * @param $param
     * @return false|mixed|string
     * render view
     */
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

    public function db()
    {
        try {
            $this->nameDB = new \PDO('sqlite:'.__DIR__.'/../database/site.db');
            $this->nameDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            exit($e-> getMessage());
        }

        return $this->nameDB;


    }
    public function get404()
    {
        return (new App\HanderErrors())->errors404();
    }
    public function getError($param)
    {
        return (new App\HanderErrors())->errors($param);
    }
}