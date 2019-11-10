<?php

class Model_Admin extends Model {

    public function get_data() {

        $data = array();

        $result = $this->db->query('SELECT * FROM tasks');

        if ($result) {

            /* Выбираем результаты запроса: */
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            /* Освобождаем память */
            $result->close();
        } else {

            print_r("Проблема с выборкой данных - " . $this->db->error);
        }

        /* Закрываем соединение */
        // $this->db->close();

        return $data;
    }

    public function get_task_for_change($id) {

        $data = NULL;

        $result = $this->db->query("SELECT * FROM tasks WHERE id = $id;");

        if ($result) {

            /* Выбираем результаты запроса: */
            while ($row = $result->fetch_assoc()) {
                $data = $row;

                // var_dump($row);
            }

            /* Освобождаем память */
            $result->close();
        } else {

            print_r("Проблема с выборкой данных - " . $this->db->error);
        }

        /* Закрываем соединение */
        // $this->db->close();

        return $data;
    }

    public function change_task_status($val) {

        $query = "UPDATE `tasks` SET `status` = '1' WHERE `tasks`.`id` = $val ";

        $result = $this->db->query($query);

        return $result;
    }

    public function change_task($text, $val) {

        $query = "UPDATE `tasks` SET `task` = '$text', `admin_update` = '1' WHERE `tasks`.`id` = $val";

        $result = $this->db->query($query);

        return $result;
    }

}
