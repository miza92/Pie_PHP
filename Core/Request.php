<?php
namespace Core; 

class Request {

    public $request = [];
    public function __construct () {
        //var_dump($input);
        foreach($_REQUEST as $key => $value) {
            $value = str_replace('  ', ' ', $value);
            $this->request[$key] = trim(stripslashes(htmlentities($value, ENT_QUOTES)));
            //print($this->request[$key]);   
        }
    }
    public function getQueryParams() {
        //sans retour ne marche pas , var_dump($this->request);
        return $this->request;
        echo "NULL NULL";
    }    
}