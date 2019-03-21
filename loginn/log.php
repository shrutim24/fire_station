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
 
        	$username=$_POST['username'];
		//echo $sapid;
		
		$password=$_POST['password'];
		//echo $pass;
		try{
			$sql1="SELECT * FROM admin where username='$username'";
			$res1=mysqli_query($conn,$sql1);
			if($res1)
			{
				if(mysqli_affected_rows($conn)>0)
				{
					$sql2="SELECT * FROM admin where username='$username' AND password='$password'";
				$res2=mysqli_query($conn,$sql2);
				if($res2)
				{
				if(mysqli_affected_rows($conn)>0)
				{
					
					
					header("Location:admin.html");

				}
				else{
					echo '<script type="text/javascript">
          window.onload = function () { alert("Wrong Password"); } 
</script>'; 
				}
				}
				}
				else
					{ echo '<script type="text/javascript">
          window.onload = function () { alert("User does not exist"); } 
</script>'; 
				
			}
		}
	}
		catch(Exception $e){
		$e->getMessage();
		echo $e;
	
	}
    
    }
    ?>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="log.php">
                        <h2 class="form-title">LOGIN</h2>
    
                        <div class="form-group">
                            <input type="username" class="form-input" name="username" id="username" placeholder="Your Username"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign in"/>
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