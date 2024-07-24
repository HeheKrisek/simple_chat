<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = htmlspecialchars($_POST['user']);
    $message = htmlspecialchars($_POST['message']);

    $sql = "INSERT INTO messages (user, message) VALUES ('$user', '$message')";

    if ($conn->query($sql) === TRUE) {
        //echo "Message sent successfully";
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
