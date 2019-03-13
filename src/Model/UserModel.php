<?php
namespace Model;
use Core\Database;

class UserModel {
	private $_email;
	private $_password;

	public function save() {
		if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
			$obj = new Database();
			$sql = $obj->database->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
			$_email = $_POST['email'];
			$_password = $_POST['password'];
			$_password = password_hash($_password, PASSWORD_BCRYPT);	
			$sql->execute([':email' => $_email, ':password' => $_password]);
		}		
	}
	public function log() {
		if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
			$obj = new Database();
			$sql = $obj->database->prepare('SELECT email, password FROM users WHERE email=:email');
			$_email = $_POST['email'];
			$_password = $_POST['password'];
			$sql->bindValue(':email', $email, PDO::PARAM_STR);
			$sql->execute();
			$pass = $sql->fetch();
			$is_password = $pass['password'];
			if (password_verify($_password, $is_password)) {
            		echo 'Le mot de passe est valide !';
            		//session_start();
				$sql->bindValue(':email', $_email, PDO::PARAM_STR);
            		$_SESSION['email'] = $_email;
				return true;
			} else {
				echo 'Le mot de passe est invalide.';
				return false;
			}
		}
	}
}