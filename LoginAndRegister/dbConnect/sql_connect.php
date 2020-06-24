<?php
    require_once("../models/defineModel.php");

    $connect = new mysqli(host,username,password,database);

    if ($connect->connect_error) {
        # code...
        var_dump($connect->connect_error);

        die();
    }

?>