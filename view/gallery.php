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
<title>Gallery</title>
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
  flex-wrap: wrap;
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
  <h2>Gallery</h2>
  <div class="gallery">
    <img src="https://images.pexels.com/photos/7648047/pexels-photo-7648047.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gallery Image 1">
    <img src="https://images.pexels.com/photos/7648055/pexels-photo-7648055.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gallery Image 2">
    <img src="https://images.pexels.com/photos/7648020/pexels-photo-7648020.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gallery Image 3">
    <img src="https://images.pexels.com/photos/7648306/pexels-photo-7648306.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Gallery Image 4">
  </div>
  <a href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home.php'; ?>" class="back">Back to Home</a>
</div>
</body>
</html>
