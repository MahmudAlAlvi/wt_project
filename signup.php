<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 30%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="radio"],
        input[type="checkbox"],
        input[type="reset"],
        input[type="submit"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        input[type="reset"] {
            background-color: #f44336;
            color: white;
            cursor: pointer;
        }
        input[type="reset"]:hover {
            background-color: #da190b;
        }
        p {
            text-align: center;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>SIGNUP</h2>
    <form method="post" action="../controller/signupCheck.php" enctype="">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required /><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required /><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required /><br><br>
        
        <label>User Type:</label>

        <table>

    <tr>
        
        <td>
            <label for="customer">Customer</label>
            <br>
            <input type="radio" id="customer" name="usertype" value="customer" required>
        </td>
    </tr>
</table>

        <input type="reset" name="reset" value="Reset" />
        <input type="submit" name="submit" value="Submit" /><br>
    
        <p>Already have an account? <a href="login.php">Sign In</a> Or, back to <a href="home.php">Home</a></p>
    </form>
</div>


</body>
</html
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 30%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="radio"],
        input[type="checkbox"],
        input[type="reset"],
        input[type="submit"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        input[type="reset"] {
            background-color: #f44336;
            color: white;
            cursor: pointer;
        }
        input[type="reset"]:hover {
            background-color: #da190b;
        }
        p {
            text-align: center;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
    <script>
        // JavaScript Validation Functions
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var email = document.getElementById("email").value;
            var usertype = document.querySelector('input[name="usertype"]:checked');

            // Check if all fields are filled
            if (username == "" || password == "" || email == "" || !usertype) {
                alert("All fields are required.");
                return false;
            }

            // Check if username starts with a letter
            if (!/^[a-zA-Z]/.test(username)) {
                alert("Username must start with a letter.");
                return false;
            }

            // Check if username contains at least two words
            var words = username.trim().split(/\s+/);
            if (words.length < 2) {
                alert("Username must contain at least two words.");
                return false;
}

            // Check if email is valid
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email.");
                return false;
            }

            // Check password length
            if (password.length < 8) {
                alert("Password must contain at least 8 characters.");
                return false;
            }

            // Check if password contains at least one digit
            if (!/\d/.test(password)) {
                alert("Password must contain at least one digit.");
                return false;
            }

            // Check if password contains at least one special character
            if (!/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
                alert("Password must contain at least one special character.");
                return false;
            }

            return true; // If all checks pass
        }
    </script>
</head>
<body>
<div class="container">
    <h2>SIGNUP</h2>
    <form method="post" action="../controller/signupCheck.php" enctype="" onsubmit="return validateForm()">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required /><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required /><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required /><br><br>
        
        <label>User Type:</label>
        <table>
            <tr>
                <td>
                    <label for="customer">Customer</label>
                    <br>
                    <input type="radio" id="customer" name="usertype" value="customer" required>
                </td>
            </tr>
        </table>

        <input type="reset" name="reset" value="Reset" />
        <input type="submit" name="submit" value="Submit" /><br>
    
        <p>Already have an account? <a href="login.php">Sign In</a> Or, back to <a href="home.php">Home</a></p>
    </form>
</div>
</body>
</html>
 