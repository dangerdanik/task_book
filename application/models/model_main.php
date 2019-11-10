<?php

class Model_Main extends Model {

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
            
            print_r ("Проблема с выборкой данных - " . $this->db->error);
        }

        /* Закрываем соединение */
       // $this->db->close();
        
       return $data;
    }

}
