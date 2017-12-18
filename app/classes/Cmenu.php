<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.10.2017
 * Time: 16:38
 */

namespace app\classes;


class Cmenu extends Mmenu
{


    function print_menu()
    {
        $res = $this->return_menus();

        while ($row = mysqli_fetch_assoc($res))
        {
            $menu[$row['id']] = $row;
        }

        return $menu;


    }
}