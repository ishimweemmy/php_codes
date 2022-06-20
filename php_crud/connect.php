<?php

$connection = mysqli_connect('localhost', 'root', '', 'registry');

if(!$connection) {
    die(mysqlli_error($connection));
}

?>