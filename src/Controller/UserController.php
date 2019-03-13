<?php
namespace Controller;

use Core\Controller;
use Model\UserModel;

class UserController extends Controller {
	public function addAction() {
		echo __CLASS__ . " [OK]"  . "Dans addAction userController" . PHP_EOL;
		// affiche la page index.php
		$this->render('index');	
	}
	public function indexAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction userController" . PHP_EOL;
		$this->render('index');
	}
	public function registerAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction registerAction" . PHP_EOL;
		$this->render('register');

		$var = new UserModel();
		$var->save(); 
	}
	public function loginAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction loginAction" . PHP_EOL;
		$this->render('login');

		$var = new UserModel();
		$var->log(); 
	}
}