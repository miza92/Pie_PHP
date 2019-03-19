<?php
namespace Core; 
use PDO;

class ORM extends Database {
    public function create ($table, $fields) {
        // retourne un id
        $values = implode("','", $fields);
        $key = array_flip($fields);
        $keys = implode(", ", $key);
        $obj = new Database();
        $sql = $obj->database->prepare("INSERT INTO $table ($keys) VALUES ('$values')");	
        $sql->execute();
        return($this->database->lastInsertId());
    }
    public function read ($table, $id) {
        // retourne un tableau associatif de l'enregistrement
        $obj = new Database();
		$sql = $obj->database->prepare("SELECT * FROM $table WHERE id=:id");
        $sql->bindValue(':id', $id, PDO::PARAM_STR);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
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
        $sql->execute();
        return($sql->execute());
    }
    public function delete ($table, $id) {
        // retourne un booléen
        $obj = new Database();
        $sql = $obj->database->prepare("DELETE FROM $table WHERE id = $id");
        var_dump($sql);
        $sql->execute();
        var_dump($sql->execute());
        return($sql->execute());
    }
    public function find ($table, $params = array(
        'WHERE' => '1',
        'ORDER BY' => 'id ASC',
        //'LIMIT' => ''
        )) { 
        // retourne un tableau d'enregistrements
        $tab = [];
        foreach($params as $key => $valeu) {
            $combine = $key . " " .$valeu;
        }
        $resulta = implode(" ", $tab);
        $obj = new Database();
        $sql = $obj->database->prepare("SELECT * FROM $table $resulta");
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }
}