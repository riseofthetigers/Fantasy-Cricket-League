<?php
error_reporting(E_ERROR);
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'riteshp');    // DB username
define('DB_PASSWORD', 'adsftr$67');    // DB password
define('DB_DATABASE', 'vcl');      // DB name
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die(mysqli_error($con));




$timecon=time();
$resultcon=mysqli_query($con,"SELECT Distinct deadline_time from fixtures Where deadline_time>'$timecon' Order by deadline_time") OR die(mysqli_error($con));
$row=mysqli_fetch_array($resultcon);
$deadlinecon=$row["deadline_time"];
$fixcon=mysqli_query($con,"SELECT * from fixtures Where deadline_time='$deadlinecon' AND deadline_time<>0 Order by fixture_id") OR die(mysqli_error($con));
$nexmat=mysqli_query($con,"SELECT * from next_match") OR die(mysqli_error($con));
$flagcon=true;
$luckcon=false;
mysqli_query($con,"START TRANSACTION");
$i=1;
while($rowcon=mysqli_fetch_array($fixcon))
{
	$bool = true;
	$team1=$rowcon["team1"];
	$team2=$rowcon["team2"];
	$rowcon1=mysqli_fetch_array($nexmat);
	if(strcmp($rowcon["team1"],$rowcon1["teams"]) == 0)
	{
		$rowcon1=mysqli_fetch_array($nexmat);
		if(strcmp($rowcon["team2"],$rowcon1["teams"]) == 0)
		{
			$bool = false;
		}
	}
	if($bool)
	{
		$nexmat1=mysqli_query($con,"INSERT INTO next_match (id, teams) VALUES('".$i."','".$team1."') ON DUPLICATE KEY UPDATE teams=VALUES(teams)") OR die(mysqli_error($con));
		$luckcon=true;
		if(!$nexmat1)
			$flagcon=false;
		$i++;
		$nexmat2=mysqli_query($con,"INSERT INTO next_match (id, teams) VALUES('".$i."','".$team2."') ON DUPLICATE KEY UPDATE teams=VALUES(teams)") OR die(mysqli_error($con));
		$luckcon=true;
		if(!$nexmat2)
			$flagcon=false;
		$i++;
	}
	if(!$bool)
		$i+=2;
}
	if($luckcon || mysqli_fetch_array($nexmat))
	{
		$nexmat4=mysqli_query($con,"INSERT INTO teamstemp SELECT * FROM teams") OR die(mysqli_error($con));
		if(!$nexmat4)
			$flagcon=false;
		$nexmat5=mysqli_query($con,"Truncate teams") OR die(mysqli_error($con));
		if(!$nexmat5)
			$flagcon=false;
		if($i <= 7)
		{
			$nexmat6=mysqli_query($con,"UPDATE `users` SET `teamcomplete`=0,`tc`=11,`rc`=135") OR die(mysqli_error($con));
		}
		if($i > 7)
		{
			$nexmat6=mysqli_query($con,"UPDATE `users` SET `teamcomplete`=0,`tc2`=22,`rc2`=270") OR die(mysqli_error($con));
		}
		if(!$nexmat6)
			$flagcon=false;
		$nexmat7=mysqli_query($con,"UPDATE players,creditstemp set players.credits=creditstemp.credits where players.player_id=creditstemp.player_id") OR die(mysqli_error($con));
		if(!$nexmat7)
			$flagcon=false;
	}
	$nexmat3=mysqli_query($con,"DELETE from next_match where id>='$i'") OR die(mysqli_error($con));	
	if(!$nexmat3)
		$flagcon=false;
if($flagcon)
	mysqli_query($con,"COMMIT");
else
	mysqli_query($con,"ROLLBACK");
?>