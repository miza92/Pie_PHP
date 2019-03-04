<?php
namespace Core;

use Controller\UserController;
use Controller\AppController;
//use Model\UserModel;

class Core {
	public function run() {
		echo __CLASS__ . " [OK]" . PHP_EOL;
		//Extraire une portion de tableau et Scinde une chaîne de caractères en segments(url)
		$params = array_slice(explode('/',$_SERVER["REQUEST_URI"]),3);
		//le 3 c'est ($_GET)
		if($params[0] === 'usr' && $params[1] === 'add') {
			$app = new \Controller\UserController();
			$app->addAction();
		}
		elseif($params[0] == '') {
			$app = new \Controller\AppController();
			$app->indexAction();
		}else{
			include("./src/View/Error/404.php");
		}	
	}
}