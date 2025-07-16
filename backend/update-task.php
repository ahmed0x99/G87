<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location:../frontend/home.php");
}
require_once "../db/DB.php";
$id = $_GET['id'];

$title = $_POST['title'];
$description = $_POST['description'];
$obj = new DB("tasks");

$res = $obj->UpdateData([
    "title" => $title,
    "description" => $description
    ] , "id=$id")->excute();
    // var_dump($res);
    
    if ($res) {
        $_SESSION['update'] = 1;
        header("Location:../frontend/home.php");
}
?>