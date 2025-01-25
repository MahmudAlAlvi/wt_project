<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    $adminUsername = "alvi mahmud"; 
    $adminDetails = getUserdetails($adminUsername); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard - JJARS Event</title>
</head>
<body>
<div style="background-color: red; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
  <div style="font-weight: bold; font-size: 24px; font-family: 'Arial', sans-serif;">JJARS EVENT Management Company</div>
</div>


<div style="background-color: white; padding: 10px;">
  <a href="#" style="color: red; font-weight: bold; text-decoration: none;">View Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="customer_picture.php" style="color: black; text-decoration: none; font-weight: bold;">Change Profile Picture</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="customer_home.php" style="color: black; text-decoration: none; font-weight: bold;">Back to Homepage</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
 
  
 
</div>

<div style="margin-top: 75px; text-align: center;">
    <table style="width: 60%; border-collapse: collapse; border: 2px solid #333; margin: 0 auto;">
        <tr>
            <td style="border-right: 2px solid #333; padding: 10px; font-weight: bold; width: 50%;">Customer Information</td>
            <td style="padding: 10px; font-weight: bold; width: 50%;">Profile Picture Option</td>
        </tr>
        <tr>


            <td style="border-right: 2px solid #333; padding: 10px; text-align: left;">
                <table style="width: 100%;">
                    <?php foreach ($adminDetails as $admin): ?>
                    <tr>
                            <td style="font-weight: bold;">Username:</td>
                            <td><?php echo $admin['username']; ?></td>
                    </tr>
                   
                    <tr>
                             <td style="font-weight: bold;">Email:</td>
                            <td><?php echo $admin['email']; ?></td>
                    </tr>
                  
                    <tr>
                        <td style="font-weight: bold;">User Type:</td>
                        <td><?php echo $admin['usertype']; ?></td>
                        <?php endforeach; ?>
                    </tr>
                </table>
            </td>
            <td style="padding: 10px; vertical-align: middle; text-align: center;">
            <div style="border: 1px solid #333; width: 150px; height: 150px; margin: 0 auto;">
            <img src="../assets/img/redo.jpg" alt="Picture" style="width: 150px; height: 150px;">
</div>

                    <a href="changepicture.php" style="text-decoration: none;">Change Picture</a>
                </div>
            </td>
        </tr>
    </table>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;



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