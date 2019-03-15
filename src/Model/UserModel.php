<?php
namespace Model;
use Core\Database;
use PDO;

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
			echo "<script>alert('Vous êtes bien inscrit')</script>"; 
		}
	}
	public function log() {
		if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']) ) {
			$obj = new Database();
			$sql = $obj->database->prepare('SELECT email, password FROM users WHERE email=:email');
			$_email = $_POST['email'];
			$_password = $_POST['password'];
			$sql->bindValue(':email', $_email, PDO::PARAM_STR);
			$sql->execute();
			$pass = $sql->fetch();
			$is_password = $pass['password'];
			if (password_verify($_password, $is_password)) {
				echo "<script>alert('Le mot de passe est valide !')</script>";
            	session_start();
				$sql->bindValue(':email', $_email, PDO::PARAM_STR);
				$_SESSION['email'] = $_email;
			} else {
				echo "<script>alert('Le mot de passe est invalide !')</script>";
			}
		}
	}
	public function session() {
		$obj = new Database();
		$sql = $obj->database->prepare('SELECT * FROM users WHERE email=:email');
		$_email = $_SESSION['email'];
		$sql->bindValue(':email', $_email, PDO::PARAM_STR);
		$sql->execute();
		$session = $sql->fetch();
		//return $session;
	}
}