<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #ff5a00;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body style="background-image: url('44.jpg'); width: 100%; height: 60%;">
<body>
  <?php
require('textlocal.class.php');
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
    $mess=$_POST['post'];

$textlocal = new Textlocal(false,false,'a0Mu44KAat8-Ij22scFvlv4QQnSc76jCX7lgCT75XV');

$sender = 'TXTLCL';
$sql = "SELECT contact from volunteer";
                                        $result = $conn->query($sql);
                                        $arr=[];
                                        if ($result->num_rows > 0) {
                                          $i=0;
                                          
                                            while($row = $result->fetch_assoc()) {
                                            
                                            $arr[$i++] = $row["contact"];
                                          
                                            } 
                                            
                                          }
                                            
                                        try {
    $result = $textlocal->sendSms($arr, $mess, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
}
?>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="allvol.php">
                        <h2 class="form-title">SEND MESSAGE</h2>
                            <div class="dropdown">
 <center><button class="dropbtn">Volunteer</button></center> 
 
</div>
<p>
</p>
<p>
    </p>

                   
                        <textarea class="form-input" name="post" id="post" value="post"></textarea>
                        
                       
                       
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Update"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script>
function myFunction() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>