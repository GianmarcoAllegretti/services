<?php 

/**
 * Se encarga de comunicar las vistas y los controllers
 */
class Views
{
	
	function getView($controller, $view, $data="")
	{
		$controller = get_class($controller);
		if($controller == "Home")
		{
			$view = "Views/".$view.".php";
		}else{
			$view = "Views/".$controller."/".$view.".php";
		}

		require_once($view);
	}
}
