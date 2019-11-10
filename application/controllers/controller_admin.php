<?php

class Controller_Admin extends Controller {

    function __construct() {

        $this->model = new Model_Admin();
        $this->view = new View();

        //print_r($this->model);
    }

    function action_index() {
        session_start();

        if (isset($_POST['val'])) {

            $val = $_POST['val'];

            $res = $this->model->change_task_status($val);

            // var_dump($res);
        }

        if ($_SESSION['admin'] == "123") {

            $data = $this->model->get_data();

            $this->view->generate('admin_view.php', 'template_view.php', $data);
        } else {

            session_destroy();

            Route::ErrorPage404();
        }
    }

    function action_change() {

        session_start();

        if ($_SESSION['admin'] == "123") {

            if (isset($_POST['task'])) {

                $id = $_POST['id'];

                $text = $_POST['task'];

                $res = $this->model->change_task($text, $id);

                if ($res) {

                    $alert['change_task'] = "ok";
                    
                    //echo 'Данные изменены';
                }
            }

            if (isset($_GET['id'])) {

                $id = $_GET['id'];

                $data = $this->model->get_task_for_change($id);

                //  var_dump($data);

                $this->view->generate('admin_task_view.php', 'template_view.php', $data, $alert);
            }
        } else {

            session_destroy();

            Route::ErrorPage404();
        }
    }

    // Действие для разлогинивания администратора
    function action_logout() {
        session_start();
        session_destroy();
        header('Location:/');
    }

}
