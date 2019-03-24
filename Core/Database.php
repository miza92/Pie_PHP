<?php
namespace Core;
use PDO;

class Database {
    public $database;
    private $dbname;
    
    public function __construct() {
        $contenu = file_get_contents ("./config.json");
        $json = json_decode($contenu, true);
        //var_dump($json);
        foreach($json as $v){
           //echo $v["DB_SERVER"] . PHP_EOL;
            //echo $v["DB_USERNAME"] . PHP_EOL;
            //echo $v["DB_PASSWORD"] . PHP_EOL;
            //echo $v["DB_DATABASE"] . PHP_EOL;     
            try {    
            $this->database = new PDO("mysql:host=" . $v["DB_SERVER"] .";dbname=" .$v["DB_DATABASE"], $v["DB_USERNAME"], $v["DB_PASSWORD"]);
            //return $this->database;
            } catch (Exception $e) {
                die('ERROR :' . $e->getMessage());
            }
        }
    }
}