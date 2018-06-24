<?php

	Class Controller{
		function __construct(){
			//Session::init();
			$this->view = new View();
			$this->loadModel();	//forma de acceder a metodos propios de la clase
		}

		function loadModel(){
			$model = get_class($this).'Model';//significa que todos los modelos se llamaran ejm CarroModel
			$path = 'Models/'.$model.'.php';

			if(file_exists($path)){
				require $path;
				$this->model = new $model();
			}
		}
	} 

?>