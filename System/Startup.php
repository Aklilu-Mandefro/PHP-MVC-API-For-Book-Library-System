<?php

// autoload class
function autoload($class) {
    // setting file class
    $file = SYSTEM . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)){
        require_once $file;
    }
    else{
        throw new Exception(sprintf('Class { %s } Not Found!', $class));
    }
}

// setting autoload function
spl_autoload_register('autoload');

// loading helper
require_once SYSTEM . 'Helper/public.php';
