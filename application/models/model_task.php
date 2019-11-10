<?php

class Model_Task extends Model {

    public function validate_mail($email) {

        $res = NULL;

//валидация поля email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $res = TRUE;
        } else {
            $res = FALSE;
        }

        return $res;
    }

    public function clear_input($value) {

        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        return $value;
    }

    public function save_task($name, $email, $task) {

        $query = "INSERT INTO tasks(id, user_name, email, task, date) VALUES (NULL, '$name', '$email', '$task', NOW());";

        $result = $this->db->query($query);

        return $result;
    }

}
