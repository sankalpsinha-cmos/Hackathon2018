<?php
include ("php/session.php");
include ("php/config.php");
?>

<?php
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


<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="CSS/login.css">

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
        <form id="contact" action="verify.php" method="POST">
          <h3>Login </h3>
          
          <fieldset>
            <input name="username" placeholder="Username / Em@il" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input name="pwd" type="password" placeholder="Password"  tabindex="3" required>
          </fieldset>
         
           <div class="g-recaptcha" data-sitekey="6Ldc4kIUAAAAAMF_OGcXX6NhryFJsx23wTItQWHL" data-callback="enableBtn"></div>
          <fieldset>
            <button id="button1" disabled="true" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Login >></button>
          </fieldset>
          <!-- <button id="login-btn">Login</button> -->

        </form>
       
      </div>

</body>
</html>

