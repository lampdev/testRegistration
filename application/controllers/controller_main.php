<?php
$_SESSION['check']=false;
class Controller_Main extends Controller
{

	function action_index()
	{	
		$data = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));;
		//$date = $this->model->gettime();
		$this->view->generate('main_view.php', 'template_view.php',$data);
	}
}