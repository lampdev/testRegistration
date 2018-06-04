<?php
//session_start();
class Controller_Template extends Controller
{

	function __construct()
	{
		$this->model = new Model_Template(HOST, LOGIN, PASSWORD, DB);
		$this->view = new View();
	}
	
	function action_index()
	{
	
		$data = $this->model->get_users();	
		$this->view->generate('template_view.php', 'teplate_view.php', $_SESSION);
	}
}

}
