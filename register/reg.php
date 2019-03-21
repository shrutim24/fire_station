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
    $n1="";
    $c1="";
    $p1="";
    $flag=0;
    if(isset($_POST['submit']))
    {
       
        $name=$_POST['name'];
        //echo $name;
        if(empty($_POST["name"]))
        {
            $n1="Name required";
            $flag=1;
        }
       
        $cont=$_POST['cont'];
        //echo $cont;
        if(empty($_POST["cont"])){
            $c1="Contact No.required";
            $flag=1;
        }
        else
        {
            if(!preg_match("/^[0-9]{10}$/", $cont))
            {
                $c1="Exactly enter 10 digits";
                $flag=1;
            }
        }
         $username=$_POST['username'];
        //echo $sapid;
        $address=$_POST['address'];
        //echo $email;
        $password=$_POST['password'];
        //echo $pass;

        if(empty($_POST["password"]))
        {
            $p1="Password required";
            $flag=1;
       
        }
         


        if($flag==0)
        {
        try{
            $sql1="SELECT * FROM volunteer where username='$username'";
            $res1=mysqli_query($conn,$sql1);
            if($res1)
            {
                if(mysqli_affected_rows($conn)>0)
                {
                    echo '<script type="text/javascript">
          window.onload = function () { alert("Already registered"); } 
</script>'; 
                }
                else
                {
                    $sql2="INSERT INTO volunteer values('$username','$password','$name','$cont','$address')";
                $res2=mysqli_query($conn,$sql2);
                if($res2)
            {
                if(mysqli_affected_rows($conn)>0)
                {
                    echo '<script type="text/javascript">
          window.onload = function () { alert("Successfully Inserted"); } 
</script>'; 
                }
                else
                {
                    
                    echo '<script type="text/javascript">
          window.onload = function () { alert("Insertion error:".$conn->error); } 
</script>'; 
                }
                }
            }
        }
    }
        catch(Exception $e){
        $e->getMessage();
        echo $e;
    
    }
    }
    }
    ?>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Register as Volunteer</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                            <span><?php echo $n1;?></span>

                        </div>
                            <div class="form-group">
                            <input type="text" class="form-input" name="cont" id="cont" placeholder="Your Contact Number"/>
                            <span><?php echo $c1;?></span>

                        </div>

                       
    
                        <div class="form-group">
                            <input type="username" class="form-input" name="username" id="username" placeholder="Your Username"/>
                        </div>
                         <div class="form-group">
                            <input type="address" class="form-input" name="address" id="address" placeholder="Your Address"/>
                        </div>
                     
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <span><?php echo $p1;?></span>
                        </div>
                       
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>