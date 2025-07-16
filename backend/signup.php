<?php

require_once '../db/DB.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $obj = new DB("users");
    $result = $obj->InsertData([
        'name' => $name,
        "email" => $email,
        "password" => $password
    ])->excute();

    if ($result) {
        $_SESSION['user'] = $obj->ReadData([] , "`email`='$email' and `password`='$password'");
        header("Location:../frontend/home.php");
    }
}else{
    
    header("Location:../frontend/login.php");
}

?>