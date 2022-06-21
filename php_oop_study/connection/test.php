<?php
include "autoLoader.php";

class Crud extends Connect {

    public function getUsers() {
        $sql = "SELECT * FROM users";
        $result = $this->connect()->query($sql);

        while($row = $result->fetch()){
            echo $row['firstName'];
        }
    }
}
?>