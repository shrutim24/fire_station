<?php

    session_start();
    $conn = new mysqli('localhost', 'root', '', 'loc');

    if (isset($_POST['reg_staff'])){

        $name = $_POST['name'];
        $sname = $_POST['sname'];
        $toll = $_POST['toll'];
        $dob = $_POST['dob'];
        $contact = $_POST['contact'];
        $pwd = $_POST['password'];
        $cpwd = $_POST['confirm_password'];

        if ($pwd == $cpwd){
            $reg_user_query = "INSERT INTO User  (uname, phone, dob, password) VALUES('$sname', '$contact', '$dob', '$pwd')";
            mysqli_query($conn, $reg_user_query);
            $reg_UID_query = "SELECT * FROM User WHERE phone='$contact'";
            $row = mysqli_fetch_row(mysqli_query($conn, $reg_UID_query));
            $userID = $row[0];       
            $reg_staff_query = "INSERT INTO Staff VALUES('$name', '$userID', '$toll' ) ";
            mysqli_query($conn, $reg_staff_query);
            $_SESSION['message'] = "Record Added.";
            header("location: staff_login.php");
        }
        else{
            $_SESSION['message'] = "Passwords do not match";
        }
    }
    
?>






<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <script type="text/javascript" src="js/register.js"></script>
</head>
<body>
    
    <?php
        if (isset($_SESSION['message'])) {
            echo "<div>", $_SESSION['message'], "</div>";
            unset($_SESSION['message']);    
        }
    ?>  
    <form id="form" method="post" name="Registeration" action="register.php" class="form" style="border:1px solid #ccc" >
        <div class="container">   
            <h2>Register as Volunteer</h2> 
            <div class="input-box">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="name" placeholder="Name" required>
            </div>
             <div class="input-box">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="password" name="username" placeholder="Username" required>
            </div>
            
            
            
            <div class="input-box">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="contact" placeholder="Contact" required>
            </div>
             <div class="input-box">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="password" name="address" placeholder="Address" required>
            </div>
            <div class="input-box">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-box">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            </div>
            <p>Agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            
            <div class="input-box">
                <input type="submit" name="reg_staff" value="Register">
            </div>
            Already a member? <a href="staff_login.php">Sign in</a>
        </p>
        </div>
    </form>    
</body>
</html>