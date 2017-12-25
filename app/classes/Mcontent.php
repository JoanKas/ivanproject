<?php
/**
 * Created by PhpStorm.
 * User: NUC2
 * Date: 02.09.2017
 * Time: 19:32
 */

namespace app\classes;


class Mcontent
{
    function return_content($id = NULL)
    {

        $sql = "SELECT content, description, title FROM pages WHERE id = {$id} && visible = '1' LIMIT 1";
        $res = \app\classes\Db::getInstance()->sql($sql);
        return $res;
    }
}