<?php
require_once '../db/migration.php';
require_once '../db/DB.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $email = $_POST['email'];
    $id = $_SESSION['user']['id'];
    echo $id;
    $password = $_POST['password'];


    $obj = new DB("users");
    $res = $obj->UpdateData([
        "password" => $password
    ] , "id=$id")->excute();
    if ($res) {
        
        $_SESSION['reset'] = 1;
        header("Location:../frontend/login.php");
    }

}else{
    header("Location:../frontend/login.php");
}
?>