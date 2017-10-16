<?php
// Если зашли на сайт впервые
if(!$_GET)
{
    $id = 1;
}
else
{
    $id = $_GET['id'];
}


$vcontent = new app\classes\Ccontent();
$page = array();
$page = $vcontent->print_content($id);
echo $page['content'];
?>