<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name']; 
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];


    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $database = "workflow";


    $conn = mysqli_connect($servername, $username, $dbpassword, $database);

    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
    }

    $sql = "INSERT INTO gg (Name, Email, Password) VALUES ('$Name', '$Email', '$Password')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "The record has been inserted successfully successfully!<br>";
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
}
?>