<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignupFForm</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">

            <h4>Online Register</h4>
        </div>
        <h2>Sign Up</h2>
        <p>Enter Your Info To Access</p>
        <form action="#" method="post">
            <label for="">Username</label> <br>
            <input type="text" name="username" class="input" required> <br>
            <label for="">Email</label><br>
            <input type="email" name="email" class="input" required> <br>
            <label for="">Date of Birth</label> <br>
            <input type="date" name="dateofbirth" class="input" required> <br>
            <label for="">Password</label> <br>
            <input type="password" name="password" class="input" required> <br>
            <input type="checkbox">Remember Me <br><br>
            <input type="submit" class="submit">
            <p>Already have account!!<a href="Login.php">Login</a></p>
        </form>
    </div>
</body>

</html>
        <?php
        include("connection.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usernme = $_POST["username"];
            $email = $_POST["email"];
            $dateofbirth = $_POST["dateofbirth"];
            $password = $_POST["password"];

            $sql = "INSERT INTO  signup_list  VALUE ('','$usernme','$email','$dateofbirth','$password')";
            $run = mysqli_query($conn, $sql);
            if ($run == true) {
                // echo "Registered";
            }
        }
        ?>