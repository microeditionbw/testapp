<?php
/**
 * 
 */
class CartModel extends Model
{

	function changeCount($id, $newval)
	{
		if(isset($_SESSION['cart']))
		{
			foreach($_SESSION['cart'] as $key => $v)
			{
				if($v['id']==$id)
				{
					$_SESSION['cart'][$key]['count'] = $newval ;
					return 1;
				}
			}
			return 0;
		}
	}

	function productGetPriceById($id)
	{
		if(isset($_SESSION['cart']))
		{
			foreach($_SESSION['cart'] as $key => $v)
			{
				if($v['id']==$id)
				{
					return $v['price'];
				}
			}
			return 0;
		}
	}

	function productDeleteById($id)
	{
		if(isset($_SESSION['cart']))
		{
			foreach($_SESSION['cart'] as $key => $v)
			{
				if($v['id']==$id)
				{
					unset($_SESSION['cart'][$key]);
					return 1;
				}
			}
			return 0;
		}
	}

	function productExistById($id)
	{
		if(isset($_SESSION['cart']))
		{
			foreach($_SESSION['cart'] as $key => $v)
			{
				if($v['id']==$id)
				{
					return 1;
				}
			}
			return 0;
		}
	}
    
}