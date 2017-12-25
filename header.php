<?php

function __autoload($name){
    require_once ($name.'.php');
}

// Если зашли на сайт впервые
if(!$_GET)
{
    $id = 1;
}
else
{
    $id = $_GET['id'];
}

// создаём объекты
$vcontent = new app\classes\Ccontent();
$page = array();
$page = $vcontent->print_content($id);

?>
<!DOCTYPE html>
<html lang="ru">

<head>

    <!--Meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="Description" content="<?php echo $page['description'];?>" />
    <meta name="Keywords" content="<?php echo $page['keywords'];?>" />
    <meta name="Robots" content="all" />
    <meta name="Rating" content="General" />
    <meta name="Author" content="Клуб интеллектуалов" />
    <!--End Meta-->

    <title><?php echo $page['title'];?></title>

    <!--CSS-->
    <link href="style/style.css" rel="stylesheet" />
    <!--End CSS-->

    <!--Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Marck+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!--End Fonts-->

    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" />
    <!--End Favicon-->

    <!--Java scripts-->

    <!--End Java scripts-->


</head>
