
<?php
/*
    require_once('../model/userModel.php');
    require_once('validations.php');

    $username = $_REQUEST['username'];
    
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
   
    $usertype = $_REQUEST['usertype'];

    if($username == "" || $password == "" || $email == ""|| $usertype == ""){
        echo "null username/password/email";
    }elseif(!ctype_alpha(substr($username, 0, 1))) {
        echo "First character must be a letter";
    }elseif(str_word_count($username) < 2){
        echo "Name must contains at least two words";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    }elseif(strlen($password) < 8) {
        echo "Password must contains at least 8 characters";
    }elseif(!hasDigit($password)) {
        echo "Password must contains at least one digit";
    }elseif(!hasSpecialChar($password)) {
        echo "Password must contains at least one special character";
    }else {

        $user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'usertype'=>$usertype];
        $status = createUser($user);
        if($status){
            header('location: ../view/login.php');
        }else{
            echo "DB error! Please try again";
        }
    
    }*/

    require_once('../model/userModel.php');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$usertype = $_POST['usertype'];

$user = ['username'=> $username, 'password'=>$password, 'email'=>$email, 'usertype'=>$usertype];
$status = createUser($user);

if($status){
    header('location: ../view/login.php');
}else{
    echo "DB error! Please try again";
}

?>  