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
<title>About Us</title>
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
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}
.content h1 {
    color: red;
    font-size: 28px;
    margin-bottom: 20px;
}
.content p {
    font-size: 16px;
    line-height: 1.8;
    color: #333;
    text-align: justify;
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
    <h1>About Us</h1>
    <p>
        Welcome to <strong>JJARS EVENT Management Company</strong>, your number one source for event planning and management services in Bangladesh.
        We are dedicated to providing you the very best in event management with a focus on creativity, professionalism, and reliability.
    </p>
    <p>
        Founded in 2010, our company has come a long way from its beginnings in Dhaka. When we first started, our passion for creating
        unforgettable experiences drove us to establish a service that helps clients achieve their vision effortlessly.
    </p>
    <p>
        Today, we serve clients across the country, offering services such as corporate event management, wedding planning,
        brand activation, exhibitions, concerts, and much more. Our mission is to make every event not just successful but memorable.
    </p>
    <p>
        We hope you enjoy working with us as much as we enjoy making your events come alive. If you have any questions or comments,
        please feel free to contact us.
    </p>
    <a href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'home.php'; ?>" class="back">Back to Home</a>

</div>
</body>
</html>
