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
        $sql = "SELECT * FROM pages WHERE slug =   $q ";


        $stmt = $this->db()->query( $sql) or die('Ошибка в запросе!');


        $res = $stmt->fetch(\PDO::FETCH_ASSOC);

         if (!$res  )
        {
            echo $this->getError("В базе нет данных для этого урла");
            exit();
        }

        if (!empty($res['id_model']))
        {
            $list = $res['id_model'];
            $sql = "SELECT * FROM auto_model WHERE id_model =  '$list' ";
            $list_model = $this->db()->query( $sql) or die('Ошибка в запросе!');
            $list_model = $list_model ->fetch(\PDO::FETCH_ASSOC);

           $models = explode(",",unserialize($list_model['name']));

            return $this->getView('home-auto',$res, $models);
        }

        return $this->getView('home-auto',$res);
    }
}