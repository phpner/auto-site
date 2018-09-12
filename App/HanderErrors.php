<?php
namespace App;

class HanderErrors
{
    /**
     * @param $errror
     */
    public function errors($errror)
    {
        require_once __DIR__."/View/errors.php";

    }
    public function errors404()
    {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        require_once __DIR__."/View/404.php";
    }

}