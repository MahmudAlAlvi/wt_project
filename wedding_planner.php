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
<title>Wedding Planner & Management</title>
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
  <h2>Wedding Planner & Management</h2>
  <p>From intimate gatherings to grand celebrations, we plan and manage weddings that create cherished memories for a lifetime.</p>
  <div class="gallery">
    <img src="https://cdn.pixabay.com/photo/2019/03/26/02/51/woman-4081760_1280.jpg" alt="Wedding 1">
    <img src="https://cdn.pixabay.com/photo/2017/08/06/20/11/wedding-2595862_1280.jpg" alt="Wedding 2">
    <img src="https://cdn.pixabay.com/photo/2016/11/22/19/05/couple-1850073_1280.jpg" alt="Wedding 3">
  </div>
  <a href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home.php'; ?>" class="back">Back to Home</a>
</div>
</body>
</html>
