<?php
include "dbconfig.php";
	error_reporting(E_ERROR);
	session_start();
	ob_start();
	$user_id = trim($_SESSION["VALID_USER_ID"]);
	if(isset($_SESSION["VALID_USER_ID"]) && $user_id=='admin')
	{
function team($abbr)
{
	global $con;
	$result=mysqli_query($con,"SELECT * from teamnames Where abbr='$abbr'") OR die(mysqli_error($con));
	$row1=mysqli_fetch_array($result);
	return $row1['name'];
}
$result=mysqli_query($con,"SELECT * from fixtures where fixture_id='".$_GET['fixid']."'");
$nteams=2;
$teams=array();
while($row=mysqli_fetch_array($result)) {
$teams[0]=$row['team1'];
$teams[1]=$row['team2'];
echo 'All players present <input type="checkbox" class="scan"  onclick="scanner();"><br/>';
echo 'Data entered <input type="checkbox" class="scan"  onclick="scanner();"><br/>';
echo '<div>Score of '.team($teams[0]).' : <input type="text" name="team1score"><br/><br/>';
echo 'Score of '.team($teams[1]).' : <input type="text" name="team2score"><br/><br/></div>';
}
?>
<p>Enter score in format as 245-9 where 245 is runs and 9 is the wickets down. (Please Remember to separate by hyphen)</p>
<div class="left">
<table>
	<thead>
		<tr>
			<th>Pid</th>
			<th>Player Name</th>
			<th>Skill</th>
			<th>Team</th>
			<th>MatchPlayed?</th>
			<th>Batted?</th>
			<th>Bowled?</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$i=1;
		for($j=0;$j<$nteams;$j++) 
		{
			$result=mysqli_query($con,"select * from players where team='$teams[$j]'");
			while($row=mysqli_fetch_array($result))
			{
				echo '<tr><td><input class="read" type="text" name="pid'.$i.'" value="'.$row["player_id"].'" readonly></td>';
				echo '<td><input class="read" type="text" name="pname'.$i.'" value="'.$row["name"].'" readonly></td>';
				echo '<td><input class="read" type="text" name="skill'.$i.'" value="'.$row["skill"].'" readonly></td>';
				echo '<td><input class="read" type="text" name="team'.$i.'" value="'.team($row["team"]).'" readonly></td>';
				echo '<td><input type="checkbox" name="match'.$i.'" id="match'.$i.'" value="1" onclick="call('.$i.')"></td>';
				echo '<td><input type="checkbox" class="play'.$i.'" name="bat'.$i.'" id="bat'.$i.'" value="1" style="visibility:hidden" onclick="callbat('.$i.')"></td>';
				echo '<td><input type="checkbox" class="play'.$i.'" name="bwl'.$i.'" id="bwl'.$i.'" value="1" style="visibility:hidden" onclick="callbwl('.$i.')"></td></tr>';
				$i++;
			}
		}
		echo '</tbody></table><br/><br/><br/></div>';
	?>
	<div class="right">
	<table>
	<thead>
		<tr>
			<th>NotOut</th>
			<th>RunsScored</th>
			<th>BallsFaced</th>
			<th>FoursHit</th>
			<th>SixesHit</th>
			<th>WicketsTaken</th>
			<th>BallsBowled</th>
			<th>RunsConceded</th>
			<th>MaidensBowled</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$i=1;
		for($j=0;$j<$nteams;$j++) 
		{
			$result=mysqli_query($con,"select * from players where team='$teams[$j]'");
			while($row=mysqli_fetch_array($result))
			{
				echo '<tr><td class="playbat'.$i.'" style="visibility:hidden"><input type="checkbox" name="notout'.$i.'" value="1"></td>';
				echo '<td class="playbat'.$i.'" style="visibility:hidden"><input onkeyup="expand(this);" type="text" name="runscored'.$i.'"></td>';
				echo '<td class="playbat'.$i.'" style="visibility:hidden"><input onkeyup="expand(this);" type="text" name="ballfaced'.$i.'"></td>';
				echo '<td class="playbat'.$i.'" style="visibility:hidden"><input onkeyup="expand(this);" type="text" name="fourhit'.$i.'"></td>';
				echo '<td class="playbat'.$i.'" style="visibility:hidden"><input onkeyup="expand(this);" type="text" name="sixhit'.$i.'"></td>';
				echo '<td class="playbwl'.$i.'" style="visibility:hidden"><input onkeyup="expand(this);" type="text" name="wktaken'.$i.'"></td>';
				echo '<td class="playbwl'.$i.'" style="visibility:hidden"><input onkeyup="expand(this);" type="text" name="ballbowled'.$i.'"></td>';
				echo '<td class="playbwl'.$i.'" style="visibility:hidden"><input onkeyup="expand(this);" type="text" name="runconceded'.$i.'"></td>';
				echo '<td class="playbwl'.$i.'" style="visibility:hidden"><input onkeyup="expand(this);" type="text" name="maidenbowled'.$i.'"></td></tr>';
				$i++;
			}
		}
		echo '</tbody></table><br/><br/><br/></div>';
		
	?>
	<br/><br/><br/>
	
	<?php
	}
	else
	{
	header("location: my-account/index.php");
	}
	?>

