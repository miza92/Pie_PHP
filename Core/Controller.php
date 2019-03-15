<?php
namespace Core;

class Controller {

    protected static $_render;

    public function __construct() {
        $req = new Request();
        $req->input($_REQUEST);

    }
    //afficher la view passée en paramètre dans le layout index
    protected function render($view, $scope = []) {
        //Importe les variables dans la table des symboles
        extract($scope);
        //implode — Rassemble les éléments d'un tableau en une chaîne
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', str_replace('Controller', '', basename(get_class($this))), $view]) . '.php';
        //var_dump($f);
        //var_dump(stripslashes($f));
        if (file_exists(stripslashes($f))) {
            //Enclenche la temporisation de sortie
            ob_start();
            include(stripslashes($f));
            //Lit le contenu courant du tampon de sortie puis l'efface
            $view = ob_get_clean();
            ob_start();
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', 'index']) . '.php');
            self::$_render = ob_get_clean();
        }
    }
    public function __destruct() {
        //afficher la page html
        echo self::$_render;
    } 
}