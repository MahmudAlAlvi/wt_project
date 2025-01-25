<?php
require_once('../model/userModel.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['agenda_item'], $_POST['agenda_time'])) {
        $agenda_item = $_POST['agenda_item'];
        $agenda_time = $_POST['agenda_time'];

        if (addAgendaItem($agenda_item, $agenda_time)) {
            echo "Agenda item added successfully";
            header('location: ../view/agenda_list.php');
        } else {
            echo "Failed to add agenda item";
        }
    } else {
        echo "Error: One or more required fields are missing.";
    }
}
?>
