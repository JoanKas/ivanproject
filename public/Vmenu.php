<?php
$vmenu = new app\classes\Cmenu();
$menu = array();
$menu = $vmenu->print_menu();

foreach ($menu as $value)
{
    echo "<a href=\"?id=".$value["id"]."\">".$value["menu_name"]."</a> ";
}
?>