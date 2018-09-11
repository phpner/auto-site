<?php
namespace App\Controllers;


class Index extends MainController
{
    function home(){

        $q = $this->db()->quote('/');

        $sql = "SELECT * FROM pages WHERE slug =   $q ;";


        $stmt = $this->db()->query( $sql) or die('Ошибка в запросе!');




        $res = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (!$res  )
        {
            return $this->get404();
            exit();
        }

        return $this->getView('home',$res);
    }

}