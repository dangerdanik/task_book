<?php

class Controller_Main extends Controller
{

    function __construct()
	{
		$this->model = new Model_Main();
		$this->view = new View();
                
                //print_r($this->model);
	}
    
	function action_index()
	{	
                $data = $this->model->get_data();
                
               // print_r($data);  //die();
                
		$this->view->generate('main_view.php', 'template_view.php', $data);
		//$this->view->generate('main_view.php', 'template_view.php');
	}
}