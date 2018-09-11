<?php
namespace App;

class HanderErrors
{
    /**
     * @param $errror
     */
    public function errors($errror)
    {
        return $errror;
    }
    public function errors404()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        require_once "/View/404.php";
    }

}