<?php
/**
 * Created by PhpStorm.
 * User: phpner
 * Date: 11.09.2018
 * Time: 17:38
 */

namespace App\Controllers;




class PagesAuto extends MainController
{
    public function HomeAuto($param,$pr)
    {

        $q = $this->db()->quote($param);
        $sql = "SELECT * FROM pages WHERE slug =   $q ;";


        $stmt = $this->db()->query( $sql) or die('Ошибка в запросе!');;


        $res = $stmt->fetch(\PDO::FETCH_ASSOC);

         if (!$res  )
        {
            return $this->get404();
            exit();
        }

        return $this->getView('home-auto',$res);
    }
}