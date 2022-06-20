<?php
include "connect.php";

if(isset($_GET['deleteId'])) {
    $id = $_GET['deleteId'];

    $sql = "DELETE FROM `users` WHERE id = $id";
    $result = mysqli_query($connection, $sql);

    if($result) {
        header("location:display.php");
    }
}
?>