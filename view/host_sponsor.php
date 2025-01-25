<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard - JJARS Event</title>

    <script>
        function validateForm() {
            let companyName = document.getElementById("company_name").value;
            let address = document.getElementById("address").value;
            let details = document.getElementById("details").value;
            let reference = document.getElementById("reference").value;
            let contactNumber = document.getElementById("contact_number").value;
            let email = document.getElementById("email").value;

            if (!companyName.trim() || !address.trim() || !details.trim() || !reference.trim() || !contactNumber.trim() || !email.trim()) {
                alert("Please fill out all the required fields and accept the terms and conditions.");
                return false;
            }

            return true;
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: red;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .company-name {
            font-weight: bold;
            font-size: 24px;
            font-family: 'Arial', sans-serif;
        }
        
        .btn-container {
            display: flex;
        }
        
        .btn-container button {
            background-color: white;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }
        
        .main-content {
            margin-top: 20px;
            text-align: center;
        }
        
        h2 {
            color: blue;
        }
        
        form {
            width: 60%;
            margin: 0 auto;
        }
        
        label {
            display: block;
            margin-top: 10px;
        }
        
        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 16px);
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="radio"],
        input[type="checkbox"] {
            margin-top: 5px;
            margin-bottom: 10px;
        }
        
        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
        
        .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
        
        .footer ul {
            list-style-type: none;
            color: gray;
            padding: 0;
            text-align: left;
        }
        
        .footer ul li {
            padding-bottom: 5px;
        }
        
        .footer hr {
            border-color: red;
        }
    </style>


</head>

<body>
        <div class="header">
            <div class="company-name">JJARS EVENT Management Company</div>
            <div class="btn-container">
                <a href="host_profile.php" style="text-decoration: none;">
                    <button>Dashboard</button>
                </a>
                <a href="home.php" style="text-decoration: none;">
                    <button>Log Out</button>
                </a>
            </div>
        </div>

        <div class="main-content">
            <h2>Sponsorship Management</h2>
            <form id="sponsorshipform" action="../controller/sponsorship_details.php" method="post">
            <label for="company_name">Company Name (Sponsor):</label>
            <input type="text" id="company_name" name="company_name" value="" required><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="" required><br>

            <label for="details">Details:</label>
            <textarea id="details" name="details" rows="4" cols="50" placeholder="" required></textarea><br>

            <label for="reference">Reference:</label>
            <input type="text" id="reference" name="reference" value="" required><br>

            <label for="contact_number">Contact Number:</label>
            <input type="text" id="contact_number" name="contact_number" value="" required><br>

            <label for="sponsor_for">Sponsor for:</label>
            <input type="text" id="sponsor_for" name="sponsor_for" value="" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="" required><br>

            <input type="submit" value="Submit">
            <input type="reset" value="Reset"><br>
           
            <a href="host_home.php">Back to Home Page</a>
        </form>
    </div>

    <script>
        document.getElementById("sponsorshipform").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission

            var companyName = document.getElementById("company_name").value;
            var address = document.getElementById("address").value;
            var details = document.getElementById("details").value;
            var reference = document.getElementById("reference").value;
            var contactNumber = document.getElementById("contact_number").value;
            var sponsorFor = document.getElementById("sponsor_for").value;
            var email = document.getElementById("email").value;

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../controller/sponsorship_details.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.status === "success") {
                        alert("Sponsorship created successfully!\nCompany Name: " + response.sponsor_data.company_name + "\nSponsor For: " + response.sponsor_data.sponsor_for);
                        document.getElementById("sponsorshipform").reset(); // Reset the form after successful submission
                    } else {
                        alert(response.message); // Display error message
                    }
                } else {
                    alert("An error occurred while processing the request.");
                }
            };

            var data = "company_name=" + encodeURIComponent(companyName) +
                       "&address=" + encodeURIComponent(address) +
                       "&details=" + encodeURIComponent(details) +
                       "&reference=" + encodeURIComponent(reference) +
                       "&contact_number=" + encodeURIComponent(contactNumber) +
                       "&sponsor_for=" + encodeURIComponent(sponsorFor) +
                       "&email=" + encodeURIComponent(email);

            xhr.send(data);

            return false; // Prevent default form submission
        });
    </script>

    



<div class="footer">
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
                <ul style="list-style-type: none; color: gray; padding: 0;text-align: left;">
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

