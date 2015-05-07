<?php
	include "dbconfig.php";
	error_reporting(E_ERROR);
	session_start();
	ob_start();
	$user_id = trim($_SESSION["VALID_USER_ID"]);
	if(isset($_SESSION["VALID_USER_ID"]) && $user_id=='admin')
	{

if(isset($_POST["fixid"]))
{
	$fixid=$_POST["fixid"];
	$acttime=strtotime($_POST["acttime"]);
	$deadtime=strtotime($_POST["deadtime"]);
	mysqli_query($con,"UPDATE fixtures SET actual_time='$acttime',deadline_time='$deadtime' where fixture_id='$fixid'") OR die(mysql_error());
}
echo '<table>';
echo '<tr><th>Sr</th><th>Team1</th><th>Team2</th><th>Actual Time</th><th>Deadline</th><th></th>';
$query=mysqli_query($con,"SELECT * from fixtures");
while($row=mysqli_fetch_array($query))
{
	echo '<tr><form action="" method="post">';
	echo '<td><input type="text" name="fixid" value="'.$row["fixture_id"].'" readonly></td>';
	echo '<td><input type="text" name="team1" value="'.$row["team1"].'" readonly></td>';
	echo '<td><input type="text" name="team2" value="'.$row["team2"].'" readonly></td>';
	echo '<td><input type="text" name="acttime" value="'.date('M d Y H:i',$row["actual_time"]).'"></td>';
	echo '<td><input type="text" name="deadtime" value="'.date('M d Y H:i',$row["deadline_time"]).'" ></td>';
	echo '<td><input type="submit" value="Submit"></td>';
	echo '</form></tr>';
}
echo '</table>';
}
	else
	{
	header("location: my-account/index.php");
	}
?>