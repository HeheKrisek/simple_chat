<?php
include 'db.php';

$sql = "SELECT * FROM messages ORDER BY timestamp ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row["user"]. "</strong>: " . $row["message"]. " <i>(" . $row["timestamp"]. ")</i></p>";
    }
} else {
    echo '<p style="color: gray; font-style: italic; text-align: center;">No messages</p>';
}

$conn->close();
?>
