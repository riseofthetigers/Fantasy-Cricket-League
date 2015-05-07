<?php
include "dbconfig.php";
	session_start();
	ob_start();
	$user_id = trim($_SESSION["VALID_USER_ID"]);
	if(isset($_SESSION["VALID_USER_ID"]) && $user_id=='admin')
	{
$fixid=$_SESSION["fixture"];
$result=mysqli_query($con,"SELECT deadline_time from fixtures where fixture_id='$fixid'") OR die(mysqli_error($con));
$strtime=0;
$row=mysqli_fetch_array($result);
$endtime = $row["deadline_time"]; 
$result=mysqli_query($con,"SELECT Distinct deadline_time from fixtures where deadline_time<>0 Order by deadline_time desc") OR die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	if($endtime > $row["deadline_time"])
	{
		$strtime = $row["deadline_time"];
		break;
	}
}
class userdata{
	public $uid;
	public $score;
	public $totscore;
	public $mem;
}
class team{
	public $pid;
	public $cvc;
}
$user=array();
$query=mysqli_query($con,"SELECT DISTINCT user_id from teamstemp where time<='$endtime' AND time>'$strtime'") OR die(mysqli_error($con));
$i=1;
while($row=mysqli_fetch_array($query)) 
{
	$user[$i]=new userdata();
	$user[$i]->uid=$row["user_id"];
	$user[$i]->score=0;
	$user[$i]->mem =array();
	$j=1;
	$result=mysqli_query($con,"SELECT * from teamstemp where user_id='".$user[$i]->uid."' AND time<='$endtime' AND time>'$strtime'") OR die(mysqli_error($con));
	while($row1=mysqli_fetch_array($result)) 
	{
		$user[$i]->mem[$j]=new team();
		$user[$i]->mem[$j]->pid=$row1["player_id"];
		$user[$i]->mem[$j]->cvc=$row1["cvc"];
		$result1=mysqli_query($con,"SELECT points_last from players where player_id='".$user[$i]->mem[$j]->pid."'") OR die(mysqli_error($con));
		$row2=mysqli_fetch_array($result1);
		$temp=$row2["points_last"];
		if($user[$i]->mem[$j]->cvc == 2)
			$temp*=1.5;
		if($user[$i]->mem[$j]->cvc == 1)
			$temp*=3;
		$user[$i]->score+=$temp;
		$j++;
	}
	$result2=mysqli_query($con,"SELECT points from users where user_id='".$user[$i]->uid."'") OR die(mysqli_error($con));
	$row3=mysqli_fetch_array($result2);
	$user[$i]->totscore = $user[$i]->score + $row3["points"];
	$i++;
}
$j=1;
$flag=true;
mysqli_query($con,"START TRANSACTION");
while($j<$i)
{
	$query2=mysqli_query($con,"UPDATE `users` SET `points_last`='".$user[$j]->score."',`points`='".$user[$j]->totscore."' WHERE `user_id`='".$user[$j]->uid."'") OR die("Couldn't update for user ".$user[$j]->uid."as".mysqli_error($con));
	if(!$query2)
		$flag=false;
	$j++;
}
$query1=mysqli_query($con,"UPDATE `players` SET `points_last`='0'") OR die(mysqli_error($con));
if(!$query1)
	$flag=false;
if($flag)
{
	mysqli_query($con,"COMMIT");
	header( "refresh:5;url=update_nrr.php" ); 
	echo 'Inserted players data !You are being redirected within 5 secs<br/>If not <a href="update_nrr.php">Click Here</a>';
}
else{
	mysqli_query($con,"ROLLBACK");
	echo "An error occured";
}
	}
	else
	{
	header("location: my-account/index.php");
	}
	
?>