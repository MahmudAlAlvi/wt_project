<?php
session_start();
require_once('../model/userModel.php');

$newpass = $_REQUEST['new_password'];
$rnewpass = $_REQUEST['confirm_password'];
$email = $_SESSION['email'];
if($newpass != $rnewpass ){
    echo "Password not match!";
}else {
    $status = updateUserpass($newpass,$email);
    if($status){
        header('location: ../view/login.php');
    }else{
        echo "Failed change password! Please try again.";
    }
}
?>
