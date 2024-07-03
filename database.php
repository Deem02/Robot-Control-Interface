
    <?php
    // Check if the button type is set in the POST request
    if (isset($_POST['button_type'])) {
        $button_type = $_POST['button_type'];
    
         // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "robot_control";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Insert the button click into the robot_directions table
        $insert_sql = "INSERT INTO robot_directions (direction) VALUES (?)";
        $stmt = $conn->prepare($insert_sql);
        $stmt->bind_param("s", $button_type);
    
        if ($stmt->execute()) {
            echo "Button click saved to database.";
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    
        $stmt->close();
        $conn->close();
    } else {
        echo "Error: Button type not set in the request.";
    }
    ?>