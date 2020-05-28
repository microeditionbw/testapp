<?php
/**
 * 
 */
class ProductModel extends Model
{
    public $id;

    function __construct($id)
    {
        $this->id = $id;
    }

    function getPrice()
    {
		if(isset($_SESSION['cart']))
		{
			foreach($_SESSION['cart'] as $key => $v)
			{
				if($v['id']==$this->id)
				{
                    return $_SESSION['cart'][$key]['price'];
				}
			}
		}
    }

    function getCount()
    {
		if(isset($_SESSION['cart']))
		{
			foreach($_SESSION['cart'] as $key => $v)
			{
				if($v['id']==$this->id)
				{
                    return $_SESSION['cart'][$key]['count'];
				}
			}
		}
    }
    
    function  setPrice($price)
    {
        $_SESSION['cart'][$this->id]['price'] = $price;
    }

    function setCount($count)
    {
        $_SESSION['cart'][$this->id]['price'] = $count;
    }
}