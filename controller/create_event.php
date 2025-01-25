<?php
require_once('../model/userModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form fields are set in $_POST
    if(isset($_POST['event_name'], $_POST['event_date'],$_POST['event_time'], $_POST['event_place'], $_POST['event_type'], $_POST['amount'])) {
        $event_name = $_POST['event_name'];
        $event_date = $_POST['event_date'];
        $event_time = $_POST['event_time'];
        $event_place = $_POST['event_place'];
        $event_type =  $_POST['event_type']; // You need to get the event type from your form
                  
        $amount = $_POST['amount'];

        if (createEvent($event_name, $event_date, $event_time, $event_place, $event_type, $amount)) {
            // If event creation is successful
            $event_data = array(
                "event_name" => $event_name,
                "event_date" => $event_date,
                "event_time" => $event_time,
                "event_place" => $event_place,
                "event_type" => $event_type,
                "amount" => $amount
            );
            $response = array("status" => "success", "event_data" => $event_data);
            echo json_encode($response);
            return; // Stop further script execution
        } else {
            // If event creation failed
            $response = array("status" => "error", "message" => "Error creating event.");
            echo json_encode($response);
            return;
        }
    } else {
        // If one or more required fields are missing
        $response = array("status" => "error", "message" => "One or more required fields are missing.");
        echo json_encode($response);
        return;
    }
} else {
    // Redirect to the event creation page if accessed directly
    header("Location: ../view/home.php");
    exit();
}
?>
