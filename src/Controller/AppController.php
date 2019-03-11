<?php
namespace Controller;
use Core\Controller;

class AppController extends Controller{
	public function indexAction() {
		echo __CLASS__ . " [OK]"  . "Dans indexAction AppContr" . PHP_EOL;
	}
}