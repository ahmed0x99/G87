<?php

session_start();
require_once "../db/DB.php";
$id = $_GET['id'];

$obj = new DB("tasks");
$res = $obj->DeleteData("id=$id")->excute();

$_SESSION['delete'] = 1;
header("location:../frontend/home.php");

?>