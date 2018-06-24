<?php

	Class View{

		function render($controller,$view){//vistas con controlador asociado
			$controller = get_class($controller);//obtiene la clase nombreController
			require './Views/'.$controller.'/'.$view.'.php';
			// views/User/index.php -> folder/Controller/View
		}

		function showView($view){//vistas sin controlador asociado
			require './Views/'.$view.'.php';
			// views/User/index.php -> folder/Controller/View
		}
	}

?>