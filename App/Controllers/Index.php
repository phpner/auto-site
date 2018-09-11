<?php
namespace App\Controllers;


class Index extends MainController
{
    function home(){

        echo $this->getView('home1');
    }

}