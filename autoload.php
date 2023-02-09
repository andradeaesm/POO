<?php
spl_autoload_register(function($class){
    $file = $class.'.php';
    $file = str_replace('\\',DIRECTORY_SEPARATOR,$file);
    if (!file_exists($file)) {
        return false;
    }
    include ($file);

});