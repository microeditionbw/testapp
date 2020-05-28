<?php
/**
 * Main class
 */

class MainController extends Controller
{
    public $model;
    public function __construct($router) {
    	$model = $router['controller'].'Model';
        $this->model = new $model;
        $this->view = new View($router);
    }

	function actionIndex()
	{
		$this->view->layout = 'default';
		$this->view->render("Главная");
	}

	function actionCart()
	{
		$this->view->layout = 'single';
		$this->view->render("Главная");
	}


}