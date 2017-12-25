<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.10.2017
 * Time: 16:39
 */

namespace app\classes;


class Mmenu
{
    function return_menus()
    {

        $sql = "SELECT id, menu_name FROM pages WHERE  visible_in_main_menu= '1'";
        $res = \app\classes\Db::getInstance()->sql($sql);
        return $res;
    }
}