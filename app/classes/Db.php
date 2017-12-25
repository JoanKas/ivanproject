<?php
namespace app\classes;

/**
 * @filename DB.php
 * набор компонентов для работы с БД
 * @author Любомир Пона
 * @copyright 24.09.2013
 * @updated 25.12.2017
 */

class Db extends Config
{
    private static $instance = null; // объект для работы с БД
    private static $handler; // идентефикатор соединения

    private function  __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance()
    {
        if (self::$instance === null)
        {
           self::$instance = new self;
           self::$instance->open_connection();
        }

        return self::$instance;

    }

    private function open_connection()
    {
        self::$handler = mysqli_connect(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);

        // если соединение не открыто, выдаем сообщение об ошибке
        if (!self::$handler)
        {
            die("Ошибка соединения с базой данных: ". mysqli_error());
        }
        else
        {
            echo "Соединение с БД установлено";
        }
        // установка принудительной кодировки UTF-8
        mysqli_query(self::$handler, "set names utf8") or die ("set names utf8 failed");
    }

    // реализация запроса к БД
    public function sql($query)
    {
        $result = mysqli_query(self::$handler, $query);

        // если запрос не удался, выдаем сообщение об ошибке
        if (!$result)
        {
            die ("Ошибка запроса к базе данных: ". mysqli_error());
        }

        return $result;
    }

}
?>

