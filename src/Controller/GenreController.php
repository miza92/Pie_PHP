<?php
namespace Controller;

use \Core\Controller;

class GenreController extends Controller {
	
	public $table = 'genre';

	public function indexAction() {
		if (!isset($_SESSION['log']) || $_SESSION['log'] === false) {
			header('Location: /semestre_2/w2php502p1/user/login');
		}
		$this->render('show');
	}
}