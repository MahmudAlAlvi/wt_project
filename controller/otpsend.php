<?php
    session_start();
    $sendOTP = rand(100000, 999999);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit;
        }

        $_SESSION['Otp'] = $sendOTP;
        $_SESSION['email'] = $email;

        $to = $email;
        $subject = "OTP Verification";
        $message = "Your OTP for verification is: " . $sendOTP;
        $headers = "From: seriouscrazysam.masum99@gmail.com "; 
    
        if (mail($to, $subject, $message, $headers)) {
            header("Location: ../view/otpVarification.php");
        } else {
            echo "Failed to send OTP. Please try again later.";
        }
    }
?>
