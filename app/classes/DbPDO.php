<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.10.2017
 * Time: 16:02
 */

namespace app\classes;


class DbPDO extends Config
{
    public function __construct()
    {
        echo "ttt";
        $dsn = "mysql:host=$this->DB_HOST;dbname=$this->DB_NAME;charset=$this->SQLCHARSET";
        echo $dsn;
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $pdo = new PDO($dsn, $this->DB_USER, $this->DB_PASS, $opt);

        var_dump($pdo);
    }

}