<?php
/**
 * Created by PhpStorm.
 * User: NUC2
 * Date: 02.09.2017
 * Time: 19:32
 */

namespace app\classes;


class Mcontent extends Db
{
    function return_content($id = NULL)
    {
        // если выбран id
        if($id)
        {
            settype($id, 'integer');
        }

        $sql = "SELECT content, description, title, created  FROM pages WHERE id = {$id} && visible = '1' LIMIT 1";

        // если попали в корень домена
        if(!$id)
        {
            // проверяем язык по умолчанию
            if($_SESSION['language']=='ru')
            {
                $id=1;
            }
            elseif($_SESSION['language']=='en')
            {
                $id=2;
            }
            else
            {
                $id=1;
            }

            $sql = "SELECT content, description, keywords, title, created  FROM pages WHERE id = {$id} && visible = '1' LIMIT 1";
        }
        $res = $this->sql($sql);
        return $res;
    }
}