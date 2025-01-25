<?php
require_once('../model/userModel.php');
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$events = getAllEvents();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        h2 {
            text-align: center;
            color: #333;
        }
        
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="number"],
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        /* Styles for the payment success popup */
        #paymentSuccessPopup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 9999;
        }
        
        #paymentSuccessPopup h3 {
            color: #4CAF50;
            text-align: center;
        }
        
        #paymentSuccessPopup p {
            color: #333;
            text-align: center;
        }
        
        /* Back button styles */
        .backButton {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .backButton:hover {
            background-color: #45a049;
        }
    </style>

<div style="background-color: red; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
     <div style="font-weight: bold; font-size: 24px; font-family: 'Arial', sans-serif;">JJARS EVENT Management Company</div>
            <div class="btn-container">
                <a href="customer_profile.php" style="text-decoration: none;">
                    <button>Dashboard</button>
                </a>
                <a href="home.php" style="text-decoration: none;">
                    <button>Log Out</button>
                </a>
            </div>
        </div>



</head>
<body>
<h2>Make Payment</h2>
<form action="../controller/payment_check.php" method="post">
        <label for="amount">Amount:</label><br>
        <input type="number" id="amount" name="amount" required><br><br>
        
        <label for="event_name">Event Name:</label><br>
        <select id="event_dropdown" name="event_dropdown">
            <?php foreach($events as $event): ?>
                <option value="<?php echo $event['id']; ?>">
                    <?php echo $event['event_name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <label for="bkash_number">Bkash Number:</label>
        <input type="text" id="bkash_number" name="bkash_number" required><br><br>
        
        <input type="submit" value="Make Payment">
        <div>
            <a href="../view/customer_home.php" class="backButton">Back to Home</a>
        </div>
    </form>

    <!-- Hidden div for the payment success popup -->
    <div id="paymentSuccessPopup">
        <h3>Payment Successful!</h3>
        <p>Your payment has been successfully processed.</p>
    </div>

    <br>
<br>

<div style="background-color: black; color: white; text-align: center; padding: 10px;">
    ©️ JJARSEMC@2024

        <div style="display: flex; justify-content: space-between; padding: 20px;">
            <div style="width: 23%;">
                <h3 style="color: white; border-bottom: 1px solid red;">Coverage District</h3>
                <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;">
                    <li>Dhaka</li>
                    <li>Chittagong</li>
                    <li>Rajshahi</li>
                    <li>Sylhet</li>
                    <li>Khulna</li>
                    <li>Barisal</li>
                    <li>Rangpur</li>
                </ul>
                <hr style="border-color: red;">
            </div>

            <div style="width: 23%;">
                <h3 style="color: white; border-bottom: 1px solid red;">Career</h3>
                <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;">
                    <li>Event Manager</li>
                    <li>Marketing Executive</li>
                    <li>Event Coordinator</li>
                    <li>Graphic Designer</li>
                    <li>Logistics Manager</li>
                    <li>PR Manager</li>
                    <li>Finance Manager</li>
                </ul>
                <hr style="border-color: red;">
            </div>

            <div style="width: 23%;">
                <h3 style="color: white; border-bottom: 1px solid red;">Event & Exhibition Logistic</h3>
                <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;  ">
                    <li>Aluminium German Hanger</li>
                    <li>Event Tent/Canopy Rental</li>
                    <li>Octanorm Stall Rent</li>
                    <li>Event / Exhibition Furniture</li>
                    <li>LED Wall on Rent</li>
                    <li>Digital Signage KIOSK Display</li>
                    <li>LED Plasma TV</li>
                    <li>All Rental Items</li>
                </ul>
                <hr style="border-color: red;">
            </div>

            <div style="width: 23%;">
            <h3 style="color: white; border-bottom: 1px solid red;">CONTACT INFO</h3>
            <p style="color: white;">Dhaka Office: Kuril, Dhaka-1229, Bangladesh</p>
            <p style="color: white;">Mobile: +880 18**********</p>
            <p style="color: white;">Mobile: +880 16**********</p>
            <hr style="border-color: red;">
        </div>
    </div>
</div>
    



</body>
</html>
