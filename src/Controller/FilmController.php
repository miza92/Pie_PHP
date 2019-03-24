<?php
namespace Controller;

use \Core\Controller;

class FilmController extends Controller {

	public $table = 'film';

	public function indexAction() {
		if (!isset($_SESSION['log']) || $_SESSION['log'] === false) {
			header('Location: /user/login');
		}
		$this->render('show');
	}
	public function addAction(){
		if (!isset($_SESSION['log']) || $_SESSION['log'] === false) {
			header('Location: /user/login');
		}
	}
}