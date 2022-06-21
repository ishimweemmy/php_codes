<?php

spl_autoload_register('autoLoader');

function autoLoader($className) {
    $extension = ".php";
    $fullPath = $className.$extension;

    if(!file_exists($fullPath)) {
        var_dump($fullPath);
    }

    include_once($fullPath);
}

?>