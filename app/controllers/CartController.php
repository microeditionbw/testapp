<?php
/**
 * Cart controller class
 */

class CartController extends Controller
{
	public $model;
    public function __construct($router) {
		$model = $router['controller'].'Model';
        $this->model = new $model;
        $this->view = new View($router);
    }

	function actionIndex()
	{
		//Dev::debug($_SESSION);
		$this->view->layout = 'cart';
		$this->view->render("Корзина", ['products'=>isset($_SESSION['cart']) ? $_SESSION['cart'] : 0]);
	}

	function actionAdd()
	{
		if(!isset($_SESSION['cart']))
		{
			$_SESSION['cart'] = array();
			array_push( $_SESSION['cart'], $this->post());
		}else
		{
			if($this->model->productExistById($this->getProduct()->id) != 1)
			{
				array_push( $_SESSION['cart'], $this->post());
			}
		}
		echo "ok";
	}

	function actionDeleteProductById()
	{
		if($this->model->productDeleteById($this->getProduct()->id))
		{
			echo "removed";
		}
	}

	function actionClear()
	{
		unset($_SESSION['cart']);
		$this->view->layout = 'cart';
		$this->view->render("Корзина");
	}

	function actionChangeCount()
	{
		if(is_numeric($this->post()['count']))
		{
			if($this->model->changeCount($this->getProduct()->id, $this->post()['count']))
			{
				echo  intval($this->model->productGetPriceById($this->getProduct()->id)) * intval($this->getProduct()->getCount());
			}
		}
	}

	function post()
	{
		if($this->validation($_POST))
		{
			return $_POST;
		}else{
			die;
		}
		
	}

	function validation($post)
	{
		if(isset($post))
		{
			return 1;
		}
		
	}
	
	function getProduct($id = "null")
	{
		if($id != "null")
		{
			$ProductId = $id;
		}else{
			$ProductId = $this->post()['id'];
		}
		return new ProductModel($ProductId);
	}

}