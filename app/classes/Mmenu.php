<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.10.2017
 * Time: 16:39
 */

namespace app\classes;


class Mmenu extends Db
{
    function return_menus()
    {

        $sql = "SELECT id, menu_name FROM pages WHERE  visible_in_main_menu= '1'";
        $res = \app\classes\Db::connect_to_db();
        $res2 = $res->sql($sql);
        return $res2;
    }
}