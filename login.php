<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name']; 
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];


    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $database = "workflow";
    $newURL = "Something";

    
    $conn = mysqli_connect($servername, $username, $dbpassword, $database);

    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        echo "Connection was successful<br>";
    }

//     $sql = "INSERT INTO gg (Name, Email, Password) VALUES ('$Name', '$Email', '$Password')";

//     $result = mysqli_query($conn, $sql);

//     if(){
//         header("Location: $newURL.html");
//     }
//     else{
//         echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
//     }
// }








session_start(); 

// include "login.php";

if (isset($_POST['Email']) && isset($_POST['Password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $Email = validate($_POST['Email']);

    $Password = validate($_POST['Password']);

    if (empty($Email)) {

        // header("Location: index.php?error=User Name is required");
        echo"Email required";

        exit();

    }else if(empty($Password)){

        echo"Password required";
        // header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}
?>