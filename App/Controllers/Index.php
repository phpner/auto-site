<?php
namespace App\Controllers;


class Index extends MainController
{
    function home(){

        return $this->getView('home');

    }

}