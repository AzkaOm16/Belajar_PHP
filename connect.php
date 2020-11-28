<?php
    $connection = mysqli_connect("localhost", "root", "", "crudazka");
    if(!$connection) {
        echo "Connection error";
        exit();
    }
    