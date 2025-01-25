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
<title>Blog</title>
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
.article {
  text-align: left;
  margin: 20px auto;
  padding: 15px;
  max-width: 800px;
  border: 1px solid gray;
  border-radius: 5px;
  background-color: #f9f9f9;
}
.article h3 {
  color: red;
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
  <h2>Blog</h2>
  <div class="article">
    <h3>How to Plan a Successful Corporate Event</h3>
    <p>Planning a corporate event involves organizing every detail to ensure it aligns with the company's goals. Start by defining the objectives and setting a realistic budget...</p>
  </div>
  <div class="article">
    <h3>5 Tips for Booking Celebrity Guests</h3>
    <p>1. Define your event goals and budget to ensure clarity in planning.</br>  
2. Choose a celebrity who aligns with your audience and theme.</br>  
3. Use reputable booking agencies or agents for professional handling.</br>  
4. Plan logistics, including travel, accommodation, and schedules, well in advance.</br>  
5. Promote the event effectively and create engagement opportunities with the celebrity.  </p>
  </div>
  <a href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home.php'; ?>" class="back">Back to Home</a>
</div>
</body>
</html>
