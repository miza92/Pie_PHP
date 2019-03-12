<?php
namespace Core;

class Router {
    private static $routes;
    //ajouter une route à mon framework
	public static function connect ($url, $route) {
		self::$routes[$url] = $route;		
	}
	//renvoie un tableau contenant le controller et l’action à appeler
	public static function get ($url) {
		//var_dump(self::$routes[$url]);
		//return self::$routes[$url];
		if (isset(self::$routes[$url])) {
			return self::$routes[$url];
		} else {
			return ['controller' => 'error', 'action' => 'error'];
		}
	}
}