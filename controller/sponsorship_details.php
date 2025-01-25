<?php
require_once('../model/userModel.php');

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $company_name = $_POST["company_name"];
    $address = $_POST["address"];
    $details = $_POST["details"];
    $reference = $_POST["reference"];
    $contact_number = $_POST["contact_number"];
    $sponsor_for = $_POST["sponsor_for"];
    $email = $_POST["email"];

    if (insertSponsorship($company_name, $address, $details, $reference, $contact_number, $sponsor_for, $email)) {
        // If insertion is successful
        $sponsor_data = array(
            "company_name" => $company_name,
            "sponsor_for" => $sponsor_for,
            // Add other relevant sponsor data fields
        );
        $response = array("status" => "success", "sponsor_data" => $sponsor_data);
        echo json_encode($response);
       // header("Location: ../view/dashboardCustomer.php");
               return; // Stop further script execution
    } else {
        // If insertion failed
        $response = array("status" => "error", "message" => "Failed to insert sponsorship details.");
        echo json_encode($response);
        return;
    }
}
?>
