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
<title>Singer & Celebrity Booking</title>
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
.gallery {
  display: flex;
  justify-content: center;
  gap: 10px;
}
.gallery img {
  width: 200px;
  height: auto;
  border: 2px solid gray;
  border-radius: 5px;
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
  <h2>Singer & Celebrity Booking</h2>
  <p>We bring the stars to your events! Book your favorite singers and celebrities to make your events unforgettable.</p>
  <div class="gallery">
    <img src="https://cdn.pixabay.com/photo/2013/02/15/12/05/trisha-yearwood-81885_1280.jpg" alt="Singer Booking 1">
    <img src="https://cdn.pixabay.com/photo/2018/06/17/10/38/artist-3480274_1280.jpg" alt="Singer Booking 2">
    <img src="https://cdn.pixabay.com/photo/2015/01/09/11/42/music-594275_1280.jpg" alt="Singer Booking 3">
  </div>
  <a href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home.php'; ?>" class="back">Back to Home</a>
</div>
</body>
</html>
