<?php
include ("php/session.php");
include ("php/config.php");

$tweetcode=$_POST['tweetcode'];
$type=$_POST['type'];
$bq=$mysqli->query("SELECT MAX(id) AS id FROM tweets");
// echo $bq->fetch_object();
$row =mysqli_fetch_array($bq);
$result=$row["id"];
$result++;
$temp=0;
$q=$mysqli->query("INSERT INTO tweets (code, type) VALUES ('$tweetcode', $type)");
$qid=$mysqli->query("SELECT user_id from users");
while($qid_result=$qid->fetch_object()){
$id=$qid_result->user_id;
$bq=$mysqli->query("INSERT INTO history (user_id,id,flag) VALUES($id,$result,$temp)");
}
if($q){
	header("location:Ratings.php");}
?>
