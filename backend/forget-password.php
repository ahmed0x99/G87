<?php
session_start();
require_once "../db/DB.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
   $obj = new DB("users");
   $res = $obj->ReadData([] , "`email`='$email'");
   if(count($res) > 0){
    $_SESSION['user'] = $res[0];
    header("Location:../frontend/reset.php");
    
   }else{
    echo $_SESSION['not_found'] = 1;
   }
}else{
    header("Location:../frontend/login.php");
}


?>