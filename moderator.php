
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

<html>

<head>
    <title>Evefy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="CSS/moderator.css">

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
                   <?php
                    if(isset($_SESSION['username']))
                   {
                    echo '<li>
                        <a href="moderator.php">
                            <span>Moderator</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <span>Logout</span>
                        </a>
                    </li>';

                   }
                   else
                   {

                    echo '<li>
                        <a href="login.php">
                            <span>Login</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="register.php">
                            <span>Register</span>
                        </a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <form  action="moderator_insert.php" id="contact" method="post">
            <h3>Tweet Addition Form</h3>

            <fieldset>
                <textarea name="tweetcode" required id="TTCo" placeholder=" Enter Code for Embedded Tweet"></textarea>
            </fieldset>
            <fieldset>
                <label style="font-size:1.2em;">Tweeter Name:</label>
                <select  name= "type" id="myList" style="font-size:2em;">
               <option value = "0" selected>Trending</option>
                <?php echo '<option value = "1">'.$var[0].'</option>';?>
                <?php echo '<option value = "2">'.$var[1].'</option>';?>
                <?php echo '<option value = "3">'.$var[2].'</option>';?>
                <?php echo '<option value = "4">'.$var[3].'</option>';?>
                <?php echo '<option value = "5">'.$var[4].'</option>';?>
                </select>
            </fieldset>


            <fieldset>
                <button name="submit" type="submit" id="Tweet-submit" data-submit="...Sending">Add tweet</button>
            </fieldset>

            <fieldset class="text-center"><a href="Ratings.php" id="go-to-btn" style=" text-decoration: none; color: white; font-weight: bolder;">
                Verify Tweets</a>
            </fieldset>
        </form>

    </div>


</body>

</html>


<?php
include ("php/footer.php");
  ?>
