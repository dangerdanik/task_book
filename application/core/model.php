<?php

class Model {

    const HOST = "localhost";
    const DBUSER = "root";
    const DBPASS = "";
    const DB = "tasker_db";

    protected $db;

    public function __construct() {

        $this->db = new mysqli(self::HOST, self::DBUSER, self::DBPASS, self::DB);

        // print_r($mysqli);

        /* проверяем соединение */
        if (mysqli_connect_errno()) {

            printf("Ошибка соединения с базой данных: %s\n", mysqli_connect_error());

            exit();
        }
    }

    // метод выборки данных
    public function get_data() {
        // todo
    }

    public function __destruct() {
        if ($this->db) {

            $this->db->close();
        }
    }

}
