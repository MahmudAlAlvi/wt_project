<?php
    require_once('../model/userModel.php');
    require_once('validations.php');

    $username = $_REQUEST['username'];
    
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
   
    $usertype = $_REQUEST['usertype'];

    if($username == "" || $password == "" || $email == ""|| $usertype == ""){
        

         $user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'usertype'=>$usertype];
        $status = deleteUser($id);
        if($status){
            header('location: ../view/login.php');
        }else{
            echo "DB error! Please try again";
        }
    
    }

?>