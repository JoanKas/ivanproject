<?php

class db extends config
{
    private $connection;

    public function __construct(){
        $this->open_connection();
    }

    private function open_connection(){
        $this->connection = mysqli_connect($this->DB_HOST, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);

        if(!$this->connection){
            die("Ошибка сосединения с базой данных: ".mysqli_error());
        }
    }
}