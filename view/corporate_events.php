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
<title>Corporate Events</title>
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
  <h2>Corporate Events</h2>
  <p>We organize professional corporate events, including seminars, conferences, team-building activities, and retreats.</p>
  <div class="gallery">
    <img src="https://media.istockphoto.com/id/2094337676/photo/diverse-team-working-together-in-modern-co-working-space.jpg?s=2048x2048&w=is&k=20&c=laH1UL7RxM9mqD9TSOYbAFbHBO3RokKTz3O1arUJ0_0=" alt="Corporate Event 1">
    <img src="https://media.istockphoto.com/id/1857502667/photo/business-people-in-convention-center-during-coffee-break.jpg?s=2048x2048&w=is&k=20&c=8AhAVe6laq9yjSAP6V7VpJDBkaXYQGb9HNRqnxbWI_o=" alt="Corporate Event 2">
    <img src="https://media.istockphoto.com/id/2161111602/photo/happy-multiracial-business-team-talking-on-a-meeting-in-the-office.jpg?s=2048x2048&w=is&k=20&c=QBtJwyldqg9XG_elXDGXrKIPd43RRUyPxIVS2pbAouU=" alt="Corporate Event 3">
  </div>
  <a href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home.php'; ?>" class="back">Back to Home</a>
</div>
</body>
</html>
