<?php
require_once('../model/userModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['amount'], $_POST['event_dropdown'], $_POST['bkash_number'])) {
        $amount = $_POST['amount'];
        $event_id = $_POST['event_dropdown']; // Assuming the value of the option is the event ID
        $bkash_number = $_POST['bkash_number'];
      
        // Retrieve event name based on event ID
        $event_name = getEventNameById($event_id);

        if (makePayment($amount, $event_name, $bkash_number)) {
            echo "Payment successful";
            header("Location: ../view/home.php");
        } else {
            echo "<script>alert('Payment failed!');</script>";
        }
    } else {
        echo "<script>alert('Error: One or more required fields are missing.');</script>";
    }
}
?>
