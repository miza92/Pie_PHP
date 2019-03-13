<?php
namespace Controller;

use Core\Controller;
use Model\UserModel;

class AppController extends Controller{
	public function indexAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction AppContr" . PHP_EOL;
		// affiche la page index.php
		$this->render('index');	
	}
}