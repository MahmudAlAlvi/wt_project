<!DOCTYPE html>
<html lang="en">
<head>
    <title>OTP Verification</title>
</head>
<body>
    
    <table style="width:30%;" border="0" align="center">
        <tr>
            <td>
                <form method="post" action="../controller/otpverify.php" enctype="">
                <fieldset>
                    <p> OTP sent successfully to your email. Please check your inbox or spam.</p>
                    <legend>VERIFY OTP</legend>
                    OTP:<input type="number" name="otp"value="" required><br>
                    <hr>
                    <input type="submit" name="submit" value="Verify OTP" />
                </fieldset>
            </td>
        </tr>
    </table>
</body>
</html>



<!-- <?php
                        // if (isset($_POST["submit"])){
                        //     $email = $_POST["email"];
                        //     if (empty($email)){
                        //         echo "Cannot be empty";
                        //     }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        //         echo "Invalid email address formate!";
                        //     }else{
                        //         $email;
                        //     }
                        // }
                    ?>                     -->