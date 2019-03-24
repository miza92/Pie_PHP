<?php
namespace Core;

use Controller\UserController;
use Controller\AppController;
use Core\Router;

require_once ("routes.php");

//use Model\UserModel;

class Core {
	public function run() {
		echo __CLASS__ . " [OK]" . PHP_EOL;
		// routage dynamique
		/*Extraire une portion de tableau et Scinde une chaîne de caractères en segments(url)
		$params = array_slice(explode('/',$_SERVER["REQUEST_URI"]),3);
		//var_dump($params);
		$params[0] = ucfirst(strtolower($params[0]));
		//$params[1] = strtolower($params[1]); (EST CE QUE C'EST NECESSAIRE??)
		
		if(isset($params[0]) && !empty($params[0])) {
			$classname = $params[0] . "Controller";
			//var_dump($classname);
			//var_dump($method);
			$classe = "Controller\\" . $classname;
			//var_dump($classe);
			if(class_exists($classe)) {
				if(isset($params[1])) {
					$method = $params[1] . "Action";
					$var = new $classe();
					$var->$method();
				}else{
					$method = "index" . "Action";
					$var = new $classe();
					$var->$method();
				}
			}else{
                include("./src/View/Error/404.php");
            } 	
		}else{
			$app = new \Controller\AppController();
			$app->indexAction();
		}
		*/
		//rotage static
		$url = str_replace(BASE_URI, '', $_SERVER["REQUEST_URI"]);
		/*var_dump($url);
		$var = explode('/', $url);
		var_dump($var[0]);
		var_dump($var[1]);
		$var[0] = trim($var[0]);
		$var[1] = trim($var[1]);
		$url = implode('/', $var);
		//$url = trim($url);*/
		$tab = Router::get($url);
		//var_dump($tab);
		//var_dump($tab['controller']);
		$tab['controller'] = ucfirst(strtolower($tab['controller']));
		$classname = $tab['controller'] . "Controller";
		//var_dump($classname);
		$method = $tab['action'] . "Action";
		//var_dump($method);
		$classe = "Controller\\" . $classname;
		//var_dump($classe);
		if(class_exists($classe)) {	
			$var = new $classe();
			$var->$method();
			//Je ne rajoute pas une autre condition j'ai mis tous dans les routes		
		}
		else{
			include("./src/View/Error/404.php");
		}
	}
}