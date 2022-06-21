<?php
    spl_autoload_register('autoLoader');

    function autoLoader($className) {
        $path = "php_oop_study";
        $extension = ".php";
        $fullPath = $path.$className.$extenstion;

        if(!file_exists($fullPath)) {
            return false;
        }

        include_once $fullPath;
    }
?>
