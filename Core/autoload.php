<?php
function my_autoloader($class) {
    //inclure toutes les classes
    $includeAutoload = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    if(file_exists($includeAutoload . '.php')) {
        // inclure dans Core
        include  $includeAutoload . '.php';     
    }elseif(file_exists('src/' . $includeAutoload . '.php')){
        //inclure dans src
        include  'src' . DIRECTORY_SEPARATOR . $includeAutoload . '.php';
    }
}
spl_autoload_register('my_autoloader');
?>