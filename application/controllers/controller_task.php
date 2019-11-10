<?php

class Controller_Task extends Controller {

    function __construct() {
        $this->model = new Model_Task();
        $this->view = new View();

//print_r($this->model);
    }

    public function action_create() {

        // $data = "display: none";

        $data["alert_mail"] = "display: none";

        if(!empty($_POST)) {
            
            $data['field'] = "no";
        }
        
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['task'])) {

                $name = $this->model->clear_input($_POST['name']);

                $email = $_POST['email'];
                
                $data['field'] = "ok";

                $task = $this->model->clear_input($_POST['task']);

                // echo $task;

                $is_valid_mail = $this->model->validate_mail($email);

                // var_dump($is_valid_mail);

                if (!$is_valid_mail) {

                    //$data = "display: block";

                    $data["alert_mail"] = "display: block";
                } else {

                    $res = $this->model->save_task($name, $email, $task);

                    if ($res) {

                        $data["create_task"] = "ok";
                        
                        unset($_POST);
                    }
                }
            } 
        
        $this->view->generate('task_form_view.php', 'template_view.php', $data, $alert);
    }

}
