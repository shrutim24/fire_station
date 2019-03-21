<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      
            textarea{
            resize: none;
            overflow-y: scroll;
            height:100px;
            }
    </style>
</head>
<body style="background-image: url('44.jpg'); width: 100%; height: 60%;">
<body>
    <?php
    $server="localhost";
    $user="root";
    $pass="";
    $dbname="loc";
    try{
        $conn=mysqli_connect($server,$user,$pass,$dbname);
       

    }
    catch(Exception $e){
        $e->getMessage();
        echo $e;
    
    }

    if(isset($_POST['submit']))
    { 
        $post=$_POST['post'];
        $time=date('m/d/Y h:i:s a',time());
    
    $sql = "INSERT INTO posts (post,time)
VALUES ('$post','$time')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
          window.onload = function () { alert("Inserted"); } 
</script>'; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    }
    ?>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="adminpost.php">
                        <h2 class="form-title">POST UPDATE</h2>
    
                   
                        <textarea class="form-input" name="post" id="post"></textarea>
                        
                       
                       
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Update"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>