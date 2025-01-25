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
    <title>Our Services</title>
</head>
<body>
    <h1>Our Services</h1>
    <ul>
        <li>Corporate Events</li>
        <li>Exhibition Stall Fabrication</li>
        <li>Influencer Marketing</li>
        <li>Singer & Celebrity Booking</li>
        <li>Wedding Planning</li>
    </ul>
    <a href="home.php">Back to Home</a>
</body>
</html>
