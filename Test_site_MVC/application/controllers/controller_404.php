<?php

class Controller_404 extends Controller
{
	
	function action_index()
	{
		$this->view->generate('main_view.php', 'template_view.php');
	}

}
