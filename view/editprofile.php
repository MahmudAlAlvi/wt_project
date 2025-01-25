<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard - JJARS Event</title>
    <script>
        function validateForm() {
            let name = document.forms["myForm"]["name"].value;
            let email = document.forms["myForm"]["email"].value;

            if (name == "") {
                alert("Name must be filled out");
                return false;
            }
            if (email == "") {
                alert("Email must be filled out");
                return false;
            }
        }
    </script>
</head>
<body>
<div style="background-color: red; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
  <div style="font-weight: bold; font-size: 24px; font-family: 'Arial', sans-serif;">JJARS EVENT Management Company</div>
</div>


<div style="background-color: white; padding: 10px;">
  <a href="profile.php" style="color: black; font-weight: bold; text-decoration: none;">View Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="editprofile.php" style="color: red; text-decoration: none; font-weight: bold;">Edit Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="changepicture.php" style="color: black; text-decoration: none; font-weight: bold;">Change Profile Picture</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="changepassProfile.php" style="color: black; text-decoration: none; font-weight: bold;">Change Password</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="userlist.php" style="color: black; text-decoration: none; font-weight: bold;">All Users List</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="allevents.php" style="color: black; text-decoration: none; font-weight: bold;">Event History</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
  
  <a href="allpayment.php" style="color: black; text-decoration: none; font-weight: bold;">All Payment</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="allsponsor.php" style="color: black; text-decoration: none; font-weight: bold;">All Sponsorship List</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="dashboardCustomer.php" style="color: black; text-decoration: none; font-weight: bold;">Back to Homepage</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
 
<!--Middle--->
<div style="margin-top: 100px; margin-left: 20%; margin-right: 20%;">
    <form name="myForm" action="#" method="post" onsubmit="return validateForm()">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: right; font-weight: bold;">Name:</td>
                <td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
                <td style="text-align: right; font-weight: bold;">Email:</td>
                <td><input type="email" name="email" value=""></td>
            </tr>
            <tr>
                <td style="text-align: right; font-weight: bold;">Gender:</td>
                <td>
                    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align: right; font-weight: bold;">Date of Birth:</td>
                <td><input type="date" name="dob" value="2002-10-31"></td>
            </tr>
        </table>
        
        <div style="text-align: center; margin-top: 20px;">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>
</div>

<!--bottom-content------------------------------------------------>
<div style="width: 99%; text-align: center; bottom:0; position:fixed;">
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
