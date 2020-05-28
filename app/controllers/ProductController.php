<?php
/**
 * Product class
 */

class ProductController extends Controller
{
	public $model;
    public function __construct($router) {
    	$model = $router['controller'].'Model';
		$this->view = new View($router);
		$this->model = new $model($this->view->route['data']);
    }

	function actionIndex()
	{
		//Dev::debug($this);
		$this->view->layout = 'single';
		$this->view->render("Товар", ['id'=>$this->model->id]);
	}


}