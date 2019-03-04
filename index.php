
<!Doctype html>
    <html lang="fr">
        <head>
        <meta charset="utf-8">
        <title>PiePHP</title>
    </head>
    <body>
        <pre>
            <?php
                var_dump($_GET) . PHP_EOL; 
                var_dump($_POST) . PHP_EOL; //pour affiche ce que il y a dans mon formilaire
                var_dump($_SERVER) . PHP_EOL;//Variables de serveur et d'exécution                

                define('BASE_URI', str_replace('\\', '/', substr(__DIR__,
                strlen($_SERVER['DOCUMENT_ROOT']))));
                require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
                $app = new Core\Core(); 
                //$mod = new Model\UserModel();
                $app->run();
                //$mod->run();           
            ?>
        </pre>
    </body>
</html>