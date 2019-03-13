<?php
namespace Core;
use PDO;

class Database
{
    public $database;

    public function __construct() {
    
        try {
            $this->database = new PDO('mysql:host=localhost;dbname=piephp', 'root', 'root');
        } catch (Exception $e) {
            die('ERROR :' . $e->getMessage());
        }
    }
}