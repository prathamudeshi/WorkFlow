cookie.php

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #DDF7E3;
        }

        .container {
            text-align: center;
            background-color: #C7E8CA;
            padding: 50px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .error-message {
            color: #006600;
            font-size: 25px;
            font-weight: 700;
        }

        .login-link {
            text-align: center;
            color: #006600;
            font-size: 25px;
            text-decoration: none;
            background-color: #4a7d47;
            color: white;
            padding: 5px 10px 5px 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        error_reporting(0);
        session_start();

        $users = array(
            "pu@so.edu" => "123",
            "gv@so.edu" => "123",

        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['Email'];
            $pass = $_POST['Password'];

            if (isset($users[$name]) && $users[$name] == $pass) {
                $username = substr($name, 0, strpos($name, '@'));
                if (isset($_POST['remember'])) {
                    setcookie("Email", $username, time() + 86400, "/");
                    setcookie("password", $pass, time() + 86400, "/");
                    echo "<span style='color: #006600;'>The cookie is set</span>";
                }

                $_SESSION['name'] = $name;
                $_SESSION['loggedin'] = true;
                header("Location: Something.html");
            } else {
                echo "<span class='error-message'>Username and password<br>are invalid.</span><br><br><a href='login.php' class='login-link'>Login</a>";
            }
        } else {
            if (isset($_COOKIE['name'])) {
                $name = $_COOKIE['name'];
                $pass = $_COOKIE['password'];
                if (isset($users[$name]) && $users[$name] == $pass) {
                    echo "<span style='color: #006600;'>Welcome back, $name!</span>";
                } else {
                    header("Location: Something.html");
                }
            } else {
                header("Location: Something.html");
            }
        }
        ?>

    </div>
</body>

</html>