<?php
include __DIR__ . '/../Views/View.php';
/**
 * 
 */
class BaseController
{

	public $view = '';

	public function view()
	{
		$view = new View($this->view);
		$view->render();
	}
}