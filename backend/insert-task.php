<?php

session_start();
require_once "../db/DB.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $obj = new DB("tasks");
   $res =  $obj->InsertData([
        "title" => $title,
        "description" => $description,
        "user_id" => $_SESSION['user'][0]['id']
    ])->excute();
    header("Location:../frontend/home.php");
    // echo "<pre>";
    // print_r($res);
}else{
    header("Location:../frontend/home.php");
}






?>