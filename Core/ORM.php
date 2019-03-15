<?php
namespace Core; 

class ORM extends Database {
    public function create ($table, $fields) {
        // retourne un id
    }
    public function read ($table, $id) {
        // retourne un tableau associatif de l'enregistrement
    }
    public function update ($table, $id, $fields) {
        // retourne un booléen
    }
    public function delete ($table, $id) {
        // retourne un booléen
    }
    public function find ($table, $params = array(
        'WHERE' => '1',
        'ORDER BY' => 'id ASC',
        'LIMIT' => ''
        )) { // retourne un tableau d'enregistrements
    }
}




















/*
public function create_orm($table, $fields)
	{
		$this->query("INSERT INTO $table(" . implode(',', array_flip($fields)) . ") VALUES(\"" . implode("\",\"", $fields) . "\")");
		$this->execute();
		return $this->last_id();
    }
*/