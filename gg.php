<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name']; 
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $database = "garv";
    $newURL = "Something";

    $conn = mysqli_connect($servername, $username, $dbpassword, $database);

    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }

    // Check if all required fields are not empty
    if (!empty($Name) && !empty($Email) && !empty($Password)) {
        // Hash the password
        $enc_Password = password_hash($Password, PASSWORD_DEFAULT);

        // Insert the hashed password into the database
        $sql = "INSERT INTO gg (Name, Email, Password) VALUES ('$Name', '$Email', '$enc_Password')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: $newURL.php");
            exit(); // Stop further execution
        } else {
            echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        }
    } else {
        echo "All fields are required.";
    }
}
?>