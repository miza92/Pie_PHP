<?php
namespace Core;

class Router {
    private static $routes;
    //ajouter une route à mon framework
	public static function connect ($url, $route) {
        self::$routes[$url] = $route;
	}
	//renvoie un tableau contenant le controller et l’action à appeler
	//accéder à une propriété inaccessible avec _get
	public static function get ($url) {
		echo $url;
		$params = array_slice(explode('/',$_SERVER["REQUEST_URI"]),3);
		//var_dump($params);
		//retourne un tableau associatif contenant
		// + le controller a instancier
		// + la méthode du controller a appeler
        // + un tableau contenant les paramètres à passer à la méthode du controller
		//$route = $this->route;
		foreach (self::$routes as $url => $route) {
			//var_dump($route);
			//var_dump($key) . PHP_EOL;
		//	var_dump(self::$routes) . PHP_EOL;
		}
	}
}





















/*
	public static function get($url, $param = null)
	{
		if (isset(self::$routes[$url])) {
			return self::$routes[$url];
		} else {
			return ['controller' => 'error', 'action' => 'error'];
		}
	}
*/