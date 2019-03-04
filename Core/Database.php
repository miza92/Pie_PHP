<?php
//faut revoir si je la laisse ou non
class Connexion
{
    public function basePdo()
    {
        try {
            $database = new PDO('mysql:host=localhost;dbname=piephp', 'root', 'root');
        } catch
        (Exception $e) {
            die('ERROR :' . $e->getMessage());
        }
        return $database;
    }
}