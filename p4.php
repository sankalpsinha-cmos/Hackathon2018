
<?php
include ("php/session.php");
include ("php/config.php");
?>

<?php
$personality_id=4;
$q5=$mysqli->query("SELECT * FROM people");
$var=array();
while($q5_result=$q5->fetch_object())
{
array_push($var,$q5_result->per_name);
}
$q=$mysqli->query("SELECT * FROM tweets WHERE type=$personality_id"); // Query for tweets
$q3=$mysqli->query("SELECT per_name, per_handel FROM people WHERE per_id=$personality_id"); // Display the Name and the Twitter Handel of the personality
$q3_result=$q3->fetch_object();
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
    <link type="text/css" rel="stylesheet" href="CSS/Personality.css">

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
        <div class="container-fluid row  " style="padding-top:60px;">

            <div id="image" class="col-md-2  ">
                <img src="Assests/jb.jpg" width="150" height="150" style="border-radius:100%; float:right">

            </div>
            <div class=" col-md-8 ">

                <h3>
                    <br>
                    <?php echo '<b>'.$q3_result->per_name.'</b>'; ?>
                    <span></span>
                </h3>
                <h4>
                    <?php echo '<b>'.$q3_result->per_handel.'</b>'; ?>
                    <span></span>
                </h4>
                <p>


            </div>

        </div>
    </div>


    <div class="container-fluid text-center">
        <div class="container-fluid row table-heading">
            <div class="col-md-6">
                <h3>Tweets</h3>
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
        while($q_result=$q->fetch_object())
        {
            $counter=0;
         $q2=$mysqli->query("SELECT * FROM refs WHERE tweet_id=".$q_result->id.";");
         $reflinks="";
         $links=array();
         while($q2_result=$q2->fetch_object())
         {
            array_push($links,$q2_result->ref_link);
          }

         // 0 sucess 1 danger 2 warning 
         $upcount=$q_result->rate_up;
         $downcount=$q_result->rate_down;
         $per=0;
         $per2=0;
         $flag ="";
         $dflag="";
         $per=round(($upcount/($upcount+$downcount))*100,0);
         $per2=round(100-($upcount/($upcount+$downcount))*100,0);
         if($per-$per2>0 and $per-$per2>=5)
         {
       

            $flag ="success";
            $dflag="True";

         }
         else if($per-$per2<0 and $per-$per2<=-5)
         {
          
             $flag="danger";
             $per=round(100-($upcount/($upcount+$downcount))*100,0);
              $dflag="False";

         }
         else
         { 
    
            $flag="warning";
            $dflag="Maybe";
            }

        $per=($per);


        echo '<div class="container-fluid row text-cemter ">
            <div class="col-md-6">

                <!-- Tweet Begins -->
                '.$q_result->code.'

            </div>
            <!-- Tweet Ends -->
            <div class="col-md-3 rating">
                <!-- Progress Bar -->
                <div class="progress">
                    <div class="progress-bar progress-bar-'.$flag.' progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="-100" aria-valuemax="100"
                        style="width:'.$per.'%">
                        '.$per.'%  ('.$dflag.')
                    </div>
                </div>

                <!-- Progress Bar Ends -->
                <!-- References -->
            </div>
            <div class="col-md-3 references">
                <a href="#">
                    <img src="./Assests/globe.png" class="url-img" alt="URL" data-toggle="modal" data-target="#refmo'.$q_result->id.'"/>
                </a>
            </div>
        </div>
         <div class="modal fade " id="refmo'.$q_result->id.'" role="dialog">
        <div class="modal-dialog" style="color:#000;">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">References</h4>
                </div>
                <div class="modal-body">';
                while($counter<count($links)){
                echo"<a href=".$links[$counter]."style=color:black;>".$links[$counter]."</a><br>";
                $counter++;
}
                echo'
                </div>
            </div>
        </div>
    </div>';
    }
    ?> 
    <?php
include ("php/footer.php");
  ?>
