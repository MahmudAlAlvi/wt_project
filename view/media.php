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
    <title>Media</title>
</head>
<body>
    <h1>Media</h1>
    <ul>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="videos.php">Videos</a></li>
    </ul>
    <a href="home.php">Back to Home</a>
</body>
</html>
