<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST["otp"];
    $stored_otp = $_SESSION['Otp'];
    if ($otp == $stored_otp) {
        header("Location: ../view/changePassword.php");
        //session_destroy();
    } else {
        echo "Invalid OTP. Please try again.";
    }
}
?>

