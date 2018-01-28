
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
$id=$_SESSION['id'];
$q=$mysqli->query("SELECT * FROM tweets where id in (SELECT id from history where user_id=$id and flag=0)"); // Query for tweets
  ?>
}

<html>

<head>
    <title>Evefy</title>
    <meta charset="utf-8">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="CSS/Rating.css">

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
   <div class="profile-cont">
                <!--    <h4 class="jumbotron text-center">Details</h4>-->
                <div class="container-fluid row  head-bar" style="padding-top:60px;">
        
                    <div id="image" class="col-md-2  ">
                        <img class="head-img"  src="./Assests/trending-logo.webp" width="150" height="150" style="border-radius:100%; float:right">
        
                    </div>
                    <div class=" col-md-8 ">
        
                        <h3>
                            <br>
                            <b>Trending</b>
                            <span></span>
                        </h3>
                        <h4 id="time">
                            
                        </h4>
                        <p>
        
        
                    </div>
        
                </div>
            </div>
        
        
            <div class="container-fluid text-center">
                <div class="container-fluid row table-heading">
                    <div class="col-md-6">
                        <h3>Hot Tweets</h3>
                    </div>
                    <div class="col-md-3">
                        <h3>Ratings</h3>
                    </div>
                    <div class="col-md-3">
                        <h3>References</h3>
                    </div>
                </div>
        




        <!-- Row Begins -->
<?php
    while ($q_result=$q->fetch_object()) {

    

       echo '<div class="container-fluid row text-cemter">
            <div class="col-md-6 tweet-cont">

                <!-- Tweet Begins -->
                '.$q_result->code.'



                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <!-- Tweet Ends -->
            <form action="rating_insert.php" method="POST" style="color:black;">
             <div class="col-md-3 rating">
                <!-- Progress Bar -->
                <div class="container-fluid voter" style=" margin-top:-10px;" >
                    
                        
                                <label class="container"><i class="em-svg em---1 thumbs" ></i>
                                        <input type="radio" checked="checked" name="vote" value=1>
                                        <span class="checkmark"></span>
                                      </label>
                                      <label class="container"><i class="em em--1 thumbs"></i>
                                        <input type="radio" name="vote" value=0>
                                          <input type="hidden" name="tweetid" value='.$q_result->id.'>
                                        <span class="checkmark"></span>
                                      </label>


                              <button style=" background-color: rgba(20, 175, 0, 0.781); /* Green */
                              border: none;
                              color: rgb(255, 255, 255);
                              padding: 10px 20px;
                              text-align: center;
                              text-decoration: none;
                              display: inline-block;
                              font-size: 16px;" class="button-vote">Vote</button>

                </div>

                <!-- Progress Bar Ends -->
                <!-- References -->
            </div>
            <div class="col-md-3 references">
                <input type="link   " name="weblink" id="wblnk" placeholder="Enter Article link" tabindex="3" style="
                
                color:rgb(255, 255, 255);
                background:rgba(0, 0, 0, 0.596);
                border : 0px;
                border : 5px solid rgb(0, 50, 97);
                
                "> 
            </div>
        </div>
    </form>';
    }
           ?>
        <!-- Row Ends -->



    
    


















        <script>
            var hide = document.getElementById('tweet').setAttribute("data-cards", "hidden");
            console.log("Fhjsdg");
        </script>
</body>

</html>