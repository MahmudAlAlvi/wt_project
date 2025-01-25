<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard - JJARS Event</title>
    <script>
        function validateForm() {
            var fileInput = document.getElementById('myfile');
            var file = fileInput.files[0];

            if (!file) {
                alert("Please select an image to upload");
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
  <a href="customer_profile.php" style="color: black; font-weight: bold; text-decoration: none;">View Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;


  <a href="customer_home.php" style="color: black; text-decoration: none; font-weight: bold;">Back to Homepage</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <span style="color: red;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
 

<div style="margin-top: 60px; margin-left: 20%; margin-right: 20%; text-align: center;">
<div style="border: 1px solid #ccc; width: 200px; height: 200px; margin: 0 auto;"> 


    <?php
        $upload_dir = "../upload/";
        $files = glob($upload_dir . "*.{jpg,png,gif}", GLOB_BRACE);
        usort($files, function($a,$b)
        {
            return filemtime($b)- filemtime($a);

        });
        $latest_file = reset($files);
        if($latest_file)
        {
            echo "<img src= '$latest_file' alt='Uploaded Image' style='max-width: 100%; max-height: 100%;'>";

        }else {
            echo "<p> no image uploaded yet </p>";
        }
    ?>



    </div>

    <div style="margin-top: 30px;">

        <form method="post" action="../controller/fileCheck.php" enctype="multipart/form-data" onsubmit="return validateForm()">

            Image: <input type="file" name="myfile" id="myfile"/> <br>

            <div style="margin-top: 20px;">

                <input type="submit" name="submit" value="Upload" />  

                <input type="reset" value="Reset">

            </div>

        </form>

    </div>

</div>

&nbsp;&nbsp;&nbsp;&nbsp;
<div style="width: 99%; text-align: center; bottom:0;">
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
