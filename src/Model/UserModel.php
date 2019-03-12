<?php
namespace Model;

class UserModel {

	private $_email;
	private $_password;

	public function __construct() {
		try {
            $database = new PDO('mysql:host=localhost;dbname=piephp', 'root', 'root');
		} 
		catch (Exception $e) {
            die('ERROR :' . $e->getMessage());
        }
	}

	public function save() {
		echo __CLASS__ . " [OK]" . PHP_EOL;
		$sql = $database->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = password_hash($password, PASSWORD_BCRYPT);

		$sql->execute([':email' => $email, ':password' => $password]);
	}
}