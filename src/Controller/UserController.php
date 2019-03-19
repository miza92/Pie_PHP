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

		$orm = new ORM();
		$orm->update('users', 155, array(
		"email" => "upd",
		"password" => "arr",
		));
		
		//$orm->delete('articles', 1);


	}
	public function registerAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction registerAction" . PHP_EOL;
		$this->render('register');

		$var = new UserModel();
		$var->save();
		//echo "<script>alert('Vous êtes bien inscrit !')</script>";
	}
	public function loginAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction loginAction" . PHP_EOL;
		$this->render('login');

		//session_start();
		$var = new UserModel();
		$var->log(); 
	}
}
/*
include 'log_in.php';
include 'sign_out.php'; 
session_start();
$session = new log_in();
$tab = $session->session();
$_SESSION['id_user'] = $tab['id_user'];
$_SESSION['username'] = $tab['username'];
$_SESSION['display_name'] = $tab['display_name'];
$_SESSION['email'] = $tab['email'];
*/
