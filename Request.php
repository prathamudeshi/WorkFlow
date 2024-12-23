<?php
// Establish database connection
$servername = "localhost";
$username = "root"; // Leave it empty for default user
$password = ""; // Leave it empty for default password
$dbname = "garv"; // Change 'garv' to your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define allowed names
$allowed_names = array("Garv", "Pratham", "Sakshi");

// Validate form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $req = $_POST["exampleInputEmail1"];
    $budget = $_POST["Budget"];

    // Check if the name is in the allowed list
    if (in_array($name, $allowed_names)) {
        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO requests (Name, req, budget) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $req, $budget);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Record added successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error: Invalid name. Allowed names are: Garv, Pratham, Sakshi";
    }
}

// Close connection
$conn->close();
?>
