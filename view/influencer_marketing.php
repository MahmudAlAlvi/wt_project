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
<title>Influencer Marketing Agency</title>
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
  <h2>Influencer Marketing Agency</h2>
  <p>Boost your brand's visibility with top influencers across platforms. Connect with your target audience effectively.</p>
  <div class="gallery">
    <img src="https://cdn.pixabay.com/photo/2020/05/24/09/52/mockup-5213409_1280.jpg" alt="Influencer Marketing 1">
    <img src="https://cdn.pixabay.com/photo/2016/11/29/12/30/phone-1869510_1280.jpg" alt="Influencer Marketing 2">
    <img src="https://cdn.pixabay.com/photo/2018/09/20/17/37/client-3691440_1280.jpg" alt="Influencer Marketing 3">
  </div>
  <a href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home.php'; ?>" class="back">Back to Home</a>
</div>
</body>
</html>
