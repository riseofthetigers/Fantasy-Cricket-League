<?php
include "dbconfig.php";
session_start();
ob_start();
$user_id = trim($_SESSION["VALID_USER_ID"]);
if(isset($_SESSION["VALID_USER_ID"]) && $user_id=='admin')
{
	$fixid=$_SESSION['fixture'];
	$_SESSION['fixture']=NULL;
	$result=mysqli_query($con,"SELECT * FROM fixtures where fixture_id='$fixid'") OR die(mysqli_error($con));
	$row=mysqli_fetch_array($result);
	$team1abbr=$row["team1"];
	$team2abbr=$row["team2"];
	class team{
		public $score;
		public $run;
		public $over;
		public $played;
		public $won;
		public $lost;
		public $tie;
		public $totnrr;
		public $nrr;
		public $points;
	}
	$team1=new team();
	$team2=new team();
	$team1->score=$_POST["team1score"];
	$team1->over=$_POST["team1over"];
	$team1->nrr=$_POST["nrr1"];
	$result1=mysqli_query($con,"SELECT * FROM teamnames where abbr='$team1abbr'") OR die(mysqli_error($con));
	$row1=mysqli_fetch_array($result1);
	$team1->played=$row1["played"]+1;
	$team1->totnrr=$row1["NRR"] + $_POST["nrr1"];
	$team2->score=$_POST["team2score"];
	$team2->over=$_POST["team2over"];
	$team2->nrr=$_POST["nrr2"];
	$result2=mysqli_query($con,"SELECT * FROM teamnames where abbr='$team2abbr'") OR die(mysqli_error($con));
	$row2=mysqli_fetch_array($result2);
	$team2->played=$row2["played"]+1;
	$team2->totnrr=$row2["NRR"] + $_POST["nrr2"];
	$temp=explode("-", $team1->score);
	$team1->run=$temp[0];
	$temp=explode("-", $team2->score);
	$team2->run=$temp[0];
	$team1->won = $row1["won"];
	$team1->lost = $row1["lost"];
	$team1->tie = $row1["tie"];
	$team1->points = $row1["points"];
	$team2->won = $row2["won"];
	$team2->lost = $row2["lost"];
	$team2->tie = $row2["tie"];
	$team2->points = $row2["points"];
	if($team1->run > $team2->run)
	{
		$team1->won = $row1["won"]+1;
		$team2->lost = $row2["lost"]+1;
		$team1->points = $row1["points"]+=2;
	}
	else if($team1->run < $team2->run)
	{
		$team2->won = $row2["won"]+1;
		$team1->lost = $row1["lost"]+1;
		$team2->points = $row2["points"]+=2;
	}
	else if($team1->run == $team2->run)
	{
		$team2->tie = $row2["tie"]+1;
		$team1->tie = $row1["tie"]+1;
		$team1->points = $row1["points"]+1;
		$team2->points = $row2["points"]+1;
	}
	$flag=true;
	mysqli_query($con,"START TRANSACTION");
	$query1=mysqli_query($con,"UPDATE `teamnames` SET `played`='".$team1->played."',`won`='".$team1->won."',`lost`='".$team1->lost."',`tie`='".$team1->tie."',`points`='".$team1->points."',`NRR`='".$team1->totnrr."',`NRR_last`='".$team1->nrr."' WHERE `abbr`='$team1abbr'") OR die(mysqli_error($con));
	if(!$query1)
		$flag=false;
	$query2=mysqli_query($con,"UPDATE `teamnames` SET `played`='".$team2->played."',`won`='".$team2->won."',`lost`='".$team2->lost."',`tie`='".$team2->tie."',`points`='".$team2->points."',`NRR`='".$team2->totnrr."',`NRR_last`='".$team2->nrr."' WHERE `abbr`='$team2abbr'") OR die(mysqli_error($con));
	if(!$query2)
		$flag=false;
	$query3=mysqli_query($con,"UPDATE `fixtures` SET `team1score`='".$team1->score."',`team2score`='".$team2->score."',`team1over`='".$team1->over."',`team2over`='".$team2->over."',`nrrupdated`=true WHERE `fixture_id`='$fixid' AND `nrrupdated`=false") OR die(mysqli_error($con));
	if(mysqli_affected_rows($con) == 0)
		$flag=false;
	if(!$query3)
		$flag=false;
	if($flag)
	{
		mysqli_query($con,"COMMIT");
		echo "Table is Updated";
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