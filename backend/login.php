<?php
require_once '../db/migration.php';
require_once '../db/DB.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$email = $_POST['email'];
$password = $_POST['password'];
$db = new DB("users");
$user = $db->ReadData([] , "`email`='$email' AND `password`='$password'");

if(count($user) == 0){
    $_SESSION['not_found'] = 1;
    header("Location:../frontend/login.php");
    die;
}
$_SESSION['user'] = $user;

echo "<pre>";
// print_r($user[0]);die;
if ($user[0]['role'] == "admin") {
    header("Location:../frontend/AdminLTE-3.1.0/index.php");
}else{

    header("Location:../frontend/home.php");
}
}else{
    header("Location:../frontend/login.php");
}
?>