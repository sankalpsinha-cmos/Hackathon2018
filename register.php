<?php
include ("php/session.php");
include ("php/config.php");


$q5=$mysqli->query("SELECT * FROM people");
$var=array();
while($q5_result=$q5->fetch_object())
{
array_push($var,$q5_result->per_name);
}
?>

<?php
if(isset($_POST['submit']))
{
  $secretkey="6Ldc4kIUAAAAAK8FuJmWx8c88ggJJ79d32kW8d6w";
  $responsekey=$_POST['g-recaptcha-response'];
  $user_ip=$_SERVER['REMOTE_ADDR'];
  $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$user_ip";
  $response=file_get_contents($url);
  $response=json_decode($response);
}
?>

<?php
echo '<script type="text/javascript">
  function enableBtn(){
    document.getElementById("button1").disabled = false;
   }
</script>
<script src="https://www.google.com/recaptcha/api.js"></script>';
?>

<?php
// Password Match Script
echo '
<script type="text/javascript">
      function validateForm() {
    var x = document.forms["register"]["pwd"].value;
    var y = document.forms["register"]["rpwd"].value;
    if (x !=y) {
        alert("Password  mismatch");
        return false;
    }
    else{
      return true;
    }
} 
    </script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <title>Registration Page</title>
    <link rel="stylesheet" href="CSS/registration.css">
</head>
<style >
  a{
    color: #fff;
  }
 


</style>>


<body>
    <nav class="navbar navbar-fixed-top" style="font-size:16px;color=#fff;text-decoration: none ; background: #474747;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#fff; font-size: 180%;" >Evefy</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                   <li>
                        <a href="t.php"> <p>Trending tab </p></a>
                    </li>
                    <li>
                       <?php echo ' <a href="p1.php">'.$var[0].'</a>'; ?>
                    </li>
                    <li>
                        <?php echo ' <a href="p2.php">'.$var[1].'</a>'; ?>
                    </li>
                    <li>
                        <?php echo ' <a href="p3.php">'.$var[2].'</a>'; ?>
                    </li>
                    <li>
                        <?php echo ' <a href="p4.php">'.$var[3].'</a>'; ?>
                    </li>
                    <li>
                        <?php echo ' <a href="p5.php">'.$var[4].'</a>'; ?>
                    </li>
                    <li>
                        <a href="login.php">
                            <span>Login</span>
                        </a>
                    </li>
                    <li>
                        <a href="register.php">
                            <span>Register</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">  
        <form name ="register" id="contact" action="insert.php" method="post" onsubmit="return validateForm()">
          <h3>Registration Form</h3>
          
          <fieldset>
            <input name ="uname" placeholder="Username / Handle name" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input name="name" placeholder="Name" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input name="address" placeholder="Address" type="text" tabindex="3" required autofocus>
          </fieldset>
          <fieldset>
            <input name="email" placeholder="E-m@il" type="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input name="website" placeholder="Website (https://)" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input name="twitter" placeholder="Twitter (@handler)" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input name="contact_no" placeholder="Contact No. " type="number" tabindex="3" required>
          </fieldset>
          <fieldset>
            <input type="password" name="pwd" placeholder="Password"  tabindex="3" required>
          </fieldset>
          <fieldset>
            <input placeholder="Confirm Password" name="rpwd" type="password" tabindex="3" required>
          </fieldset>
           <div class="g-recaptcha" data-sitekey="6Ldc4kIUAAAAAMF_OGcXX6NhryFJsx23wTItQWHL" data-callback="enableBtn"></div>
       
          <fieldset>
            <button id= "button1" disabled="true" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>
        </form>
      </div>


</body>
</html>

