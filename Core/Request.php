<?php
namespace Core; 

class Request {
    public function input($input) {
        //var_dump($input);
        foreach($input as $key => $value) {
            $value = str_replace(' ', '', $value);
            $value = htmlspecialchars(trim(stripslashes($value)));
            //$value = trim(stripslashes(htmlspecialchars($value)));
            //var_dump($value);
        }     
    }
}
/*notes: netoyer le @ dans les methodes ne doivent pas
etre pareilles pour GET et POST */
/*Rq -> $_GET je l'utilise pas parce que ça renvoie erreur( ça
?c=user&a=add)*/