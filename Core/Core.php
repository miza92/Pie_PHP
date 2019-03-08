<?php
namespace Core;

use Controller\UserController;
use Controller\AppController;
//use Core\Router;
//require_once ("routes.php");

//use Model\UserModel;

class Core {
	public function run() {
		echo __CLASS__ . " [OK]" . PHP_EOL;
		/*$url = str_replace(BASE_URI . '/' , '', $_SERVER["REQUEST_URI"]);
		$url = Router::get($url);*/

		/* le 3 c'est ($_GET)
		routage statique
		Extraire une portion de tableau et Scinde une chaîne de caractères en segments(url)*/
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
	}
}
/*if(isset $array[$url]) {
	$model = $array[$url];
	else{
		$model = null;
		if(methode_existe())
	}
}
connect 
netoyer le url
*/