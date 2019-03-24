<?php
namespace Core; 

class Request {
    /*public function input ($input) {
        foreach($input as $key => $value) {
            $value = str_replace(' ', '', $value);
            $this->{$key}= trim(stripslashes(htmlentities($value, ENT_QUOTES)));   
        }
    }*/
    //une autre methode de faire le request avec ça je protege pas le script je serai obligé de rajouter un preg_replace
    public $request = [];
    public function __construct () {
        //var_dump($input);
        foreach($_REQUEST as $key => $value) {
            $value = str_replace('  ', ' ', $value);
            //$value = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $value);
            // $input[$key]  = trim(stripslashes(htmlentities($value, ENT_QUOTES)));
            $this->request[$key] = trim(stripslashes(htmlentities($value, ENT_QUOTES)));
            print($this->request[$key]);   
        }
        //var_dump($this->request);
    }
    public function getQueryParams() {
        //sans retour ne marche pas , var_dump($this->request);
        return $this->request;
        echo "NULL NULL";
    }    
}