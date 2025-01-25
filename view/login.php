<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f7f7f7;">

<div style="max-width: 500px; margin: 100px auto; padding: 20px; background: linear-gradient(135deg,rgb(46, 7, 7),rgb(49, 16, 16)); border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);">
  <h1 style="text-align: center; margin-bottom: 30px; color: #fff;">JJARS Event Management</h1>
  <form id="loginForm" style="text-align: center;" action="../controller/loginCheck.php" method="post" enctype="">

    <div style="margin-bottom: 20px;">
      <label for="username" style="display: block; margin-bottom: 5px; color: #fff; font-weight: bold;">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; background-color: #ffe3ec;">
    </div>
    <div style="margin-bottom: 20px;">
      <label for="password" style="display: block; margin-bottom: 5px; color: #fff; font-weight: bold;">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required style="width: 100%; padding: 10px; border: none; border-radius: 5px; background-color: #ffe3ec;">
    </div>
    <div style="margin-bottom: 20px;">
      <label for="usertype" style="display: block; margin-bottom: 5px; color: #fff; font-weight: bold;">User Type</label>
      <div style="text-align: left; padding: 10px; background-color:rgb(238, 121, 141); border-radius: 5px;">
        <input type="radio" id="admin" name="usertype" value="admin" required>
        <label for="admin" style="color: #333;">Admin</label><br>
        <input type="radio" id="host" name="usertype" value="host" required>
        <label for="host" style="color: #333;">Host</label><br>
        <input type="radio" id="customer" name="usertype" value="customer" required>
        <label for="customer" style="color: #333;">Customer</label>
      </div>
    </div>
    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
      <a href="forgotPassword.php" style="padding: 10px 20px; background-color:rgb(214, 23, 23); color: #fff; text-decoration: none; border: none; border-radius: 5px;">Forget Password</a>
      <a href="home.php" style="padding: 10px 20px; background-color:rgb(90, 20, 20); color: #fff; text-decoration: none; border: none; border-radius: 5px;">Back to Homepage</a>
      <button type="submit" style="padding: 10px 20px; background-color:rgb(78, 3, 3); color: #fff; border: none; border-radius: 5px; cursor: pointer;">Login</button>
    </div>

  </form>
</div>