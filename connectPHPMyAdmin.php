
<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "robot_control";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the direction from the POST data
    $direction = $_POST['direction'];

    // Insert the button click data into the database
    $sql = "INSERT INTO robot_directions (direction) VALUES ('$direction')";
    if ($conn->query($sql) === TRUE) {
        echo "Button click stored in the database";
    } else {
        echo "Error storing button click: " . $conn->error;
    }
}

$conn->close();
?>