<!DOCTYPE html>
<html>
<head>
    <title>Help Bot</title>
</head>
<body>

<a href="?show_chat=true">Help</a>

<?php
if (isset($_GET["show_chat"]) && $_GET["show_chat"] == "true") {
    echo '<div id="chat-container">
            <div id="chat-area">';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["user_input"])) {
        $user_input = $_POST["user_input"];
        echo "<p><strong>You:</strong> $user_input</p>";

        // Check for greetings and respond accordingly
        $response = "I'm sorry, I can't respond without JavaScript.";
        if (preg_match('/hello|hi|hlw|hey/i', $user_input)) {
            $response = "Hello! How can I assist you today?";
        }

        echo "<p><strong>Help Bot:</strong> $response</p>";
    }

    echo '</div>
        <form method="post" action="">
            <input type="text" name="user_input" placeholder="Type your message here...">
            <button type="submit">Send</button>
        </form>
    </div>';
}
?>

</body>
</html>
