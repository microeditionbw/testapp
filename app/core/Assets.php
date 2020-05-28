<?php
/*
* загрузка ассетов
*/
class Assets {

	public function load($param) {
		$assets_dir = 'app/config/Assets.php'; //файл подключения
		if(file_exists($assets_dir))
		{
			$assets = include $assets_dir;
			foreach ($assets as $key => $value):
				if($key == 'css' and strpos($param, 'css') !== false)
				{
					foreach ($value as $item_value) {
						echo '<link href="'.URLROOT.'assets/css/'.$item_value.'.css" rel="stylesheet" type="text/css" />' . "\n";
					}
				}elseif($key == 'js' and strpos($param, 'js') !== false)
				{
					foreach ($value as $item_value) {
						echo '<script src="'.URLROOT.'assets/js/'.$item_value.'.js"></script>' . "\n";
					}
				}elseif($key == 'cdn' and strpos($param, 'cdn') !== false)
				{
					foreach ($value as $item_value) {
						echo $item_value . "\n";
					}
				}
			endforeach;
		}
	}

}	