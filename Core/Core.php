<?php
namespace Core;

use Controller\UserController;
use Controller\AppController;
use Controller\FilmController;
use Controller\GenreController;
use Core\Router;

require_once ("routes.php");

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
		$tab = Router::get($url);
		$tab['controller'] = ucfirst(strtolower($tab['controller']));
		$classname = $tab['controller'] . "Controller";
		//var_dump($classname);
		$method = $tab['action'] . "Action";
		//var_dump($method);
		$classe = "Controller\\" . $classname;
		// var_dump($classname);
		if(class_exists($classe)) {	
			$var = new $classe();
			$var->$method();
		}
		else{
			include("./src/View/Error/404.php");
		}
	}
}