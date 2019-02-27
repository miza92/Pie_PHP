<?php
function my_autoloader($class) {
    //inclure toutes les classes
    $includeAutoload = str_replace('\\', '/', $class);
    if(file_exists($includeAutoload . '.php')) {
        // inclure dans Core
        include  $includeAutoload . '.php';   
    }else{
        //inclure dans src
        include  'src/' . $includeAutoload . '.php';
    }
}
spl_autoload_register('my_autoloader');
?>