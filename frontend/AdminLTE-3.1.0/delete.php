<?php

require_once "../../db/DB.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_GET['id'];
    $obj = new DB('users');

    $obj->DeleteData("id=$id")->excute();
    $_SESSION['deleted'] = 1;
    header("Location:./users.php");
}else{
    header("Location:./users.php");
}



?>