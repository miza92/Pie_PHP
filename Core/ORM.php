<?php
namespace Core; 
use PDO;

class ORM extends Database {
    public function create ($table, $fields) {
        //var_dump($fields);
        $values = implode("','", $fields);
        //var_dump($values);
        $key = array_flip($fields);
        //print_r($key);
        $keys = implode(", ", $key);
        //var_dump($keys);
        $obj = new Database();
        $sql = $obj->database->prepare("INSERT INTO $table ($keys) VALUES ('$values')");	
        //var_dump($sql);
        //var_dump($sql->execute());
        $sql->execute();
        //var_dump($this->database->lastInsertId());
        return($this->database->lastInsertId());
    }
    public function read ($table, $id) {
        // retourne un tableau associatif de l'enregistrement
        $obj = new Database();
		$sql = $obj->database->prepare("SELECT * FROM $table WHERE id=:id");
        $sql->bindValue(':id', $id, PDO::PARAM_STR);
        $sql->execute();
        //var_dump($sql->execute());
        //var_dump($sql);
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        //var_dump($result);
        return $result;
    }
    public function update ($table, $id, $fields) {
        // retourne un booléen
        $tab = [];
        foreach($fields as $key => $valeu) {
            $combine = $key . " = " . "'". $valeu ."'";
            array_push($tab, $combine);
        }
        $result = implode(", ", $tab);
        $obj = new Database();
        $sql = $obj->database->prepare("UPDATE $table SET $result WHERE id = $id");
        //var_dump($sql);
        $sql->execute();
        //var_dump($sql->execute());
        return($sql->execute());
    }
    public function delete ($table, $id) {
        // retourne un booléen
        $data = new co();
        $database = $data->test();

        $sql = $database->prepare('UPDATE users SET e_mail=:null_del WHERE username=:username');


        $null = $_POST['delete'];
        $email = $_SESSION['email'];

        $sql->bindValue(':null_del', $null, PDO::PARAM_NULL);
        $sql->bindValue(':email', $email, PDO::PARAM_STR);

        $sql->execute();
    }
    public function find ($table, $params = array(
        'WHERE' => '1',
        'ORDER BY' => 'id ASC',
        'LIMIT' => ''
        )) { // retourne un tableau d'enregistrements
    }
}











































/*
<?php
namespace Core;
class ORM extends Database
{
	public function create_orm($table, $fields)
	{
		$this->query("INSERT INTO $table(" . implode(',', array_flip($fields)) . ") VALUES(\"" . implode("\",\"", $fields) . "\")");
		$this->execute();
		return $this->last_id();
	}
	
	public function read_orm($table, $id)
	{
		$this->query("SELECT * FROM $table WHERE id = $id");
		return $this->fetch();
	}
	public function update_orm($table, $id, $fields)
	{
		$str_fields = "";
		unset($fields['id']);
		foreach ($fields as $key => $value) {
			$str_fields .= $key . " = \"" . $value . "\",";
		}
		$str_fields = substr($str_fields, 0, -1);
		$this->query("UPDATE $table SET $str_fields WHERE id = $id");
		return $this->execute();
	}
	
	public function delete_orm($table, $id)
	{
		$this->query("DELETE FROM $table WHERE id = $id");
		return $this->execute();
	}
	public function find_orm($table, $params = array(
	 'WHERE' => '', 
	 'ORDER BY' => '', 
	 'LIMIT' => ''))
	{
		if (isset($params)) {
			$str_params = '';
			foreach ($params as $key => $value) {
				if (!empty($value)) {
					$str_params .= $key . ' ' . $value . ' ';
				}	
			}
		}
		$this->query("SELECT * FROM $table $str_params");
		return $this->fetch_all();
	}
}
*/