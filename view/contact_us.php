<?php
if (!isset($_COOKIE['flag'])) {
    header('location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}
.header {
  background-color: red;
  color: white;
  text-align: center;
  padding: 10px 0;
}
.content {
  padding: 20px;
  text-align: center;
}
.contact-info {
  margin: 20px auto;
  padding: 15px;
  max-width: 800px;
  border: 1px solid gray;
  border-radius: 5px;
  background-color: #f9f9f9;
}
.contact-info p {
  font-size: 16px;
  color: gray;
  margin: 5px 0;
}
.bot-container {
  margin: 20px auto;
  padding: 15px;
  max-width: 800px;
  border: 1px solid gray;
  border-radius: 5px;
  background-color: #f9f9f9;
}
.bot-container form {
  display: flex;
  justify-content: space-between;
  gap: 10px;
}
.bot-container input {
  flex: 1;
  padding: 10px;
  border: 1px solid gray;
  border-radius: 5px;
}
.bot-container button {
  padding: 10px 20px;
  background-color: red;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
.bot-container button:hover {
  background-color: darkred;
}
.bot-messages {
  max-height: 300px;
  overflow-y: auto;
  margin-bottom: 10px;
}
.bot-messages p {
  margin: 5px 0;
  padding: 10px;
  border-radius: 5px;
}
.bot-messages .user-message {
  background-color: #e8f4ff;
  text-align: left;
}
.bot-messages .bot-message {
  background-color: #f1f1f1;
  text-align: right;
}
.back {
  display: inline-block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: red;
  color: white;
  text-decoration: none;
  border-radius: 5px;
}
.back:hover {
  background-color: darkred;
}
</style>
</head>
<body>
<div class="header">
  <h1>JJARS EVENT Management Company</h1>
</div>

<div class="content">
  <h2>Contact Us</h2>
  <div class="contact-info">
    <p>Have questions? Reach out to us!</p>
    <p>Email: info@jjarseventmanagement.com</p>
    <p>Phone: +880 18*********</p>
    <p>Address: Kuril, Dhaka-1229, Bangladesh</p>
  </div>

  <div class="bot-container">
    <h3>Chat with JJARS Bot</h3>
    <div class="bot-messages" id="botMessages">
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_input'])) {
          $user_input = htmlspecialchars($_POST['user_input']);
          echo "<p class='user-message'><strong>You:</strong> $user_input</p>";
          $response = "I'm here to assist you!";
          if (preg_match('/hello|hi|hey/i', $user_input)) {
              $response = "Hello! How can I help you today?";
          } elseif (preg_match('/contact|help/i', $user_input)) {
              $response = "You can reach us at info@kreventmanagement.com.";
          }
          echo "<p class='bot-message'><strong>JJARS Bot:</strong> $response</p>";
      }
      ?>
    </div>
    <form method="post" action="">
      <input type="text" name="user_input" placeholder="Type your message here..." required>
      <button type="submit">Send</button>
    </form>
  </div>
  
  <a href="dashboardcustomer.php" class="back">Back to Home</a>
</div>
</body>
</html>

