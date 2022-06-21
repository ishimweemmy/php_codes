<?php
    spl_autoload_register('autoLoader');

    function autoLoader($className) {
        $extension = ".php";
        $fullPath = $className.$extension;

        if(!file_exists($fullPath)) {
            return false;
        }

        include_once $fullPath;
    }
?>
