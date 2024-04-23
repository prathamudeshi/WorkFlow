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

    if(isset($_POST['record'])){
        

        if(!empty(trim($_POST['Password']))  &&  !empty(trim($_POST['Email']))){
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];

            $enc_Password = password_hash($Password, PASSWORD_DEFAULT);


            $conn->query("INSERT INTO users (Email,Password) VALUES('$Email','$enc_Password')");

            if($conn->affected_rows != 1){
                $record_error = "Something went wrong";
            }
            else{
                $record_success = "Password hashed and stored successfully";
            }
        
        }
        else{
            $record_error = "Both files must have values";
        }
    }

    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
    }

    $sql = "INSERT INTO gg (Name, Email, Password) VALUES ('$Name', '$Email', '$Password')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: $newURL.php");
    }
    else{
        echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
    }
}
?>