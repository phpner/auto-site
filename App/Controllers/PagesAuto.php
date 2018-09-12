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

        $sql = "SELECT * FROM pages WHERE slug =   '$param' ";


        $stmt = $this->db()->query( $sql) or die('Ошибка в запросе!');


        $res = $stmt->fetch(\PDO::FETCH_ASSOC);

         if (!$res  )
        {
            echo $this->getError("В базе нет данных для этого урла");
            exit();
        }

        if (!empty($res['id_model']))
        {

            return $this->getView('home-auto',$res, $models);
        }

        return $this->getView('home-auto',$res);
    }
}