<?php
namespace Core;
use Core\ORM;

class Entity {

    public function __construct ($params = []) {
        var_dump($params);
        foreach($params as $key => $value) {
            echo $key . PHP_EOL;
            echo $value . PHP_EOL;
        }
        //$orm = new ORM();
        //$orm->read($table, $id);
    }
}