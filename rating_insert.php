<?php
include ("php/session.php");
include ("php/config.php");
$id= $_SESSION['id'];
$vote=$_POST['vote'];
$tweetid=$_POST['tweetid'];
$weblink=$_POST['weblink'];
$bq=$mysqli->query("UPDATE history SET flag=1 where user_id=$id");
if($vote==1){
	$q1=$mysqli->query("UPDATE tweets SET rate_up=rate_up+1 WHERE id=$tweetid");

}
else if($vote==0){
	$q1=$mysqli->query("UPDATE tweets SET rate_down=rate_down+1 WHERE id=$tweetid");
	

}
	echo "ddd".$weblink;
if($weblink){
$q=$mysqli->query("INSERT INTO refs(tweet_id, ref_link,ref_flag) VALUES ($tweetid,'$weblink',$vote )");
if($q)header("location:Ratings.php");
	}
?>
