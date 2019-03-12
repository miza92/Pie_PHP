<?php
namespace Controller;
use Core\Controller;
use Model\UserModel;

class UserController extends Controller {
	public function addAction() {
		echo __CLASS__ . " [OK]"  . "Dans addAction userController" . PHP_EOL;
		//$va= new Controller();
		//$va->render();
		$this->render('login');
	}
	public function indexAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction userController" . PHP_EOL;
	}
	public function registerAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction registerAction" . PHP_EOL;



		/*$var = new UserModel();
		$var->save();*/
	}
}