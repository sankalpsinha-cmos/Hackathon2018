<?php 
include ("php/session.php");
include ("php/config.php");

$username=$_POST['username'];
$password=$_POST['pwd'];

$result = $mysqli->query("SELECT username,pwd FROM users");

if($result === FALSE){
  die(mysql_error());
}

$flag = 'true';
if($result){
  while($obj = $result->fetch_object()){

    if($obj->username === $username && $obj->pwd === $password) {

      $q1=$mysqli->query("SELECT * FROM users WHERE username='$username'");
      $result_q1=$q1->fetch_object();
      $_SESSION['username']=$username;
      $_SESSION['id']=$result_q1->user_id;
      $_SESSION['name']=$result_q1->name;
      $_SESSION['address']=$result_q1->address;
      $_SESSION['email']=$result_q1->email;
      $_SESSION['website']=$result_q1->website;
      $_SESSION['twitter']=$result_q1->twitter;
      $_SESSION['contact_no']=$result_q1->contact_no;
      // Add the moderator page here for now we go the register page 
      header("location:moderator.php");
    } 
    else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
}
}


function redirect() {
  echo '<h1>Wrong Credentials or Account Verification still pending by the admin</h1>';
  header("Refresh: 5; url=login.php");
}

 ?>