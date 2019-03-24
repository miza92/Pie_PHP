<?php
namespace Controller;

use Core\Controller;
use Model\UserModel;
use Core\ORM;

class UserController extends Controller {
	public function addAction() {
		echo __CLASS__ . " [OK]"  . "Dans addAction userController" . PHP_EOL;
		// affiche la view
		$this->render('index');	
	}
	public function indexAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction userController" . PHP_EOL;
		$this->render('index');
		// Instancier l 'ORM
		/*$orm = new ORM();
		$orm->create('users', array(
		"email" => "test_orm",
		"password" => "azer",
		));*/

		/*$orm = new ORM();
		$orm->read('users', "7");*/

		/*$orm = new ORM();
		$orm->update('users', 155, array(
		"email" => "upd",
		"password" => "arr",
		));*/
		
		/*$orm = new ORM();
		$orm->delete('users', 155);*/

		/*$orm = new ORM();
		$orm->find('users', array('WHERE'=> '1', 'ORDER BY' => 'id ASC', 'LIMIT' => '5'));*/
	}
	public function registerAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction registerAction" . PHP_EOL;
		$this->render('register');
		//Les entités
		$params = $this->request->getQueryParams();
		$user = new UserModel($params);
		if (!$user->_email) {
		$user->save();
		self::$_render = "Votre compte a été créé." . PHP_EOL;
		}
	}
	public function loginAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction loginAction" . PHP_EOL;
		$this->render('login');
		//session_start();
		//Les entités
		$params = $this->request->getQueryParams();
		$user = new UserModel($params);
		if (!$user->id) {
		$user->log();
		self::$_render = "Votre êtes bien connecté." . PHP_EOL;
		}
		/*$var = new UserModel();
		$var->log();*/ 
	}
}
