<?php
/**
 * Created by PhpStorm.
 * User: NUC2
 * Date: 02.09.2017
 * Time: 19:25
 */

namespace app\classes;


class Ccontent extends Mcontent
{
    function print_content($id)
    {
        settype($id,'integer');
        $res = $this->return_content($id);
        $row = mysqli_fetch_assoc($res);

        $page = array();
        if($row)
        {
            foreach ($row as $key => $value)
            {
                $page[$key] = $value;
            }
        }

        return $page;
    }
}
?>