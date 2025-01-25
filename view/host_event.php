<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <script>
        function validateForm() {
            let eventName = document.getElementById("event_name").value;
            let eventDate = document.getElementById("event_date").value;
            let eventTime = document.getElementById("event_time").value;
            let eventPlace = document.getElementById("event_place").value;
            let eventType = document.getElementById("event_type").value;
            let amount = document.getElementById("amount").value;

            if (eventName.trim() === '' || eventDate.trim() === '' || eventTime.trim() === '' || eventPlace.trim() === '' || eventType.trim() === '' || amount.trim() === '') {
                alert("All fields must be filled out");
                return false;
            }

            return true;
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"] {
            width: calc(100% - 22px); /* Adjusted to accommodate borders */
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .back-button {
            width: 100%;
            padding: 10px;
            background-color: #ccc;
            color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #aaa;
        }
    </style>
    <div style="background-color: red; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
     <div style="font-weight: bold; font-size: 24px; font-family: 'Arial', sans-serif;">JJARS EVENT Management Company</div>
            <div class="btn-container">
                <a href="host_profile.php" style="text-decoration: none;">
                    <button>Dashboard</button>
                </a>
                <a href="home.php" style="text-decoration: none;">
                    <button>Log Out</button>
                </a>
            </div>
        </div>


</head>
<body>
    <h2>Create Event</h2>
    <div style="margin-top: 100px; margin-left: 20%; margin-right: 20%;">
        <form id="event_form" action="../controller/create_event.php" method="POST" onsubmit="return validateForm()">
            <label for="event_name">Event Name:</label><br>
            <input type="text" id="event_name" name="event_name"><br>
            
            <label for="event_date">Event Date:</label><br>
            <input type="date" id="event_date" name="event_date"><br>
            
            <label for="event_time">Event Time:</label><br>
            <input type="time" id="event_time" name="event_time"><br>
            
            <label for="event_place">Event Place:</label><br>
            <input type="text" id="event_place" name="event_place"><br>
            
            <label for="event_type">Event Type:</label><br>
            <input type="text" id="event_type" name="event_type"><br>
            
            <label for="amount">Required Amount:</label><br>
            <input type="text" id="amount" name="amount"><br>
            
            <input type="submit" value="Create Event">
            <button class="back-button" onclick="window.location.href='host_home.php'">Back</button>
        </form>
    </div>

    <script>
        document.getElementById("event_form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../controller/create_event.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.status === "success") {
                        alert("Event created successfully!\nEvent Name: " + response.event_data.event_name + "\nEvent Type: " + response.event_data.event_type);
                        document.getElementById("event_form").reset(); // Reset the form after successful submission
                        
                    } else {
                        alert(response.message); // Display error message
                    }
                } else {
                    alert("An error occurred while processing the request.");
                }
            };

            var formData = new FormData(document.getElementById("event_form"));
            var params = new URLSearchParams(formData).toString();

            xhr.send(params);

            return false; // Prevent default form submission
        });
    </script>

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
