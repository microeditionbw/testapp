<?php

/**
 * Developer class
 */
class Dev
{
	function showErrors($flag)
	{
		if($flag)
		{
			ini_set('display_errors', 1);
			error_reporting(E_ALL);
		}else{
			ini_set('display_errors', 0);
			error_reporting(0);
		}

	}
	

	function debug($str) {
		echo '<pre>';
		var_dump($str);
		echo '</pre>';
	}
}