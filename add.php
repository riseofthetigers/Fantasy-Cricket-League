<?php
error_reporting(E_ERROR);
include "dbconfig.php";
session_start();
ob_start();
$user_id = trim($_SESSION["VALID_USER_ID"]);
if(isset($_SESSION["VALID_USER_ID"]) && !empty($user_id))
{
$flag=$_POST['flag'];
$player_id=$_POST['player_id'];

if(isset($player_id) && !empty($player_id)) {
	$timeOfInsert=time();
	$result=mysqli_query($con,"select * from next_match");
	$nteams=mysqli_num_rows($result);
	while($row=mysqli_fetch_array($result)) {
	$teams[]=$row['teams'];
	}

	$result=mysqli_query($con,"select skill,team,credits,selected from players where player_id='$player_id'");
	while($row=mysqli_fetch_array($result)) {
		$skill=$row['skill'];
		$team=$row['team'];
		$credits=$row['credits'];
		$selected=$row['selected'];
	}	

	$result=mysqli_query($con,"select skill from teams where user_id='$user_id' and skill='batsman'");
	$batsman=mysqli_num_rows($result);

	$result=mysqli_query($con,"select skill from teams where user_id='$user_id' and skill='wk'");
	$wk=mysqli_num_rows($result);

	$result=mysqli_query($con,"select skill from teams where user_id='$user_id' and skill='ar'");
	$ar=mysqli_num_rows($result);

	$result=mysqli_query($con,"select skill from teams where user_id='$user_id' and skill='bowler'");
	$bowler=mysqli_num_rows($result);

	$result=mysqli_query($con,"select tc,rc,teamcomplete from users where user_id='$user_id'");
	while($row=mysqli_fetch_array($result)) {
		$tc=$row['tc'];
		$rc=$row['rc'];
		$teamcomplete=$row['teamcomplete'];
	}
	$count=0;
	$f=0;
	for($i=0;$i<$nteams;$i++) {
		$result=mysqli_query($con,"select team from teams where user_id='$user_id' and team='$teams[$i]'");
		$teamCount[]=mysqli_num_rows($result);
		if($teamCount[$i]==7 && $team==$teams[$i])
		$count++;
	}
	if($count==1)
		$f=1;

	if($flag==1)
	{
		$result=mysqli_query($con,"select * from teams where player_id='$player_id' and user_id='$user_id'");
		$duplicate=mysqli_num_rows($result);
		if($duplicate==0) {

			if($tc>=1 && $rc<$credits) {
				echo 'Not enough credits!';
			}
			else {
				if($tc!=0) {
					if($f==1) {
						echo 'Spread the love!';
					}
					else {
						if($tc==1 && $skill!='wk' && $wk==0) {
							echo 'No Wicket-Keeper!';
						}
						else if($tc==1 && $skill!='ar' && $ar==0) {
							echo 'No All-Rounder!';
						}
						else if($tc==2 && $skill!='ar' && $ar==0 && $skill!='wk' && $wk==0) {
							echo 'No Wicket-Keeper and no All-Rounder!';
						}
						else if($tc==3 && $skill!='bowler' && $bowler==0) {
							echo 'No bowler!';
						}
						else if($tc==3 && $skill!='batsman' && $batsman==0) {
							echo 'No batsman!';
						}
						else {
							switch($skill) {
								case 'wk':
									if($wk==1) {
										echo 'Max Wicket-Keeper!';
									}
									else {
										mysqli_query($con,"insert into teams(user_id,player_id,skill,team,time) values('$user_id','$player_id','$skill','$team','$timeOfInsert')");
										
										$tc--;
										$rc=$rc-$credits;
										$selected++;
										mysqli_query($con,"update players set selected='$selected' where player_id='$player_id'");
										mysqli_query($con,"update users set rc='$rc',tc='$tc' where user_id='$user_id'");
										$result=mysqli_query($con,"select tc,rc from users where user_id='$user_id'");
										while($row=mysqli_fetch_array($result)) {
											$tc=$row['tc'];
											$rc=$row['rc'];
										}
										echo $rc.' '.(11-$tc);
									}
									break;
								case 'ar':
									if($ar==3) {
										echo 'Max All-Rounder!';
									}
									else {
										mysqli_query($con,"insert into teams(user_id,player_id,skill,team,time) values('$user_id','$player_id','$skill','$team','$timeOfInsert')");
										$tc--;
										$rc=$rc-$credits;
										$selected++;
										mysqli_query($con,"update players set selected='$selected' where player_id='$player_id'");
										mysqli_query($con,"update users set rc='$rc',tc='$tc' where user_id='$user_id'");
										$result=mysqli_query($con,"select tc,rc from users where user_id='$user_id'");
										while($row=mysqli_fetch_array($result)) {
											$tc=$row['tc'];
											$rc=$row['rc'];
										}
										echo $rc.' '.(11-$tc);
									}
									break;
								case 'bowler':
									if($bowler==5) {
										echo 'Max bowler!';
									}
									else {
										mysqli_query($con,"insert into teams(user_id,player_id,skill,team,time) values('$user_id','$player_id','$skill','$team','$timeOfInsert')");
										$tc--;
										$rc=$rc-$credits;
										$selected++;
										mysqli_query($con,"update users set rc='$rc',tc='$tc' where user_id='$user_id'");
										mysqli_query($con,"update players set selected='$selected' where player_id='$player_id'");
										$result=mysqli_query($con,"select tc,rc from users where user_id='$user_id'");
										while($row=mysqli_fetch_array($result)) {
											$tc=$row['tc'];
											$rc=$row['rc'];
										}
										echo $rc.' '.(11-$tc);
									}
									break;
								case 'batsman':
									if($batsman==5) {
										echo 'Max batsman!';
									}
									else {
										mysqli_query($con,"insert into teams(user_id,player_id,skill,team,time) values('$user_id','$player_id','$skill','$team','$timeOfInsert')");
										$tc--;
										$rc=$rc-$credits;
										$selected++;
										mysqli_query($con,"update users set rc='$rc',tc='$tc' where user_id='$user_id'");
										mysqli_query($con,"update players set selected='$selected' where player_id='$player_id'");
										$result=mysqli_query($con,"select tc,rc from users where user_id='$user_id'");
										while($row=mysqli_fetch_array($result)) {
											$tc=$row['tc'];
											$rc=$row['rc'];
										}
										echo $rc.' '.(11-$tc);
									}
									break;
								}	
							}
						}
					}
				else {
					echo 'Max team limit!';
				}
			}	
		}
		else {
			echo '97';
		}
	}
		
	else {
		$result=mysqli_query($con,"select * from teams where player_id='$player_id' and user_id='$user_id'");
		$alreadyThere=mysqli_num_rows($result);
		if($alreadyThere==1) {
			if($teamcomplete==1) {
				for($i=0;$i<$nteams;$i++) {
					$result=mysqli_query($con,"select player_id from teams where user_id='$user_id' and team='$teams[$i]'");
					while($row=mysqli_fetch_array($result))
						$current_team[]=$row['player_id'];
				}
				for($i=0;$i<count($current_team);$i++) {
					$result=mysqli_query($con,"select captained,vcaptained from players where player_id='$current_team[$i]'");
					while($row=mysqli_fetch_array($result)) { 
						$t=$row['captained'];
						$u=$row['vcaptained'];
					}
					if($t!=0)
						mysqli_query($con,"update players set captained=captained-1 where player_id='$current_team[$i]'");
					if($u!=0)
						mysqli_query($con,"update players set vcaptained=vcaptained-1 where player_id='$current_team[$i]'");
				}
				

			}
			mysqli_query($con,"delete from teams where player_id='$player_id' and user_id='$user_id'");
			$tc++;
			$rc=$rc+$credits;
			if($selected!=0) {
				$selected--;
				mysqli_query($con,"update players set selected=selected-1 where player_id='$player_id'");
			}
			mysqli_query($con,"update users set teamcomplete=0,rc='$rc',tc='$tc' where user_id='$user_id'");
			mysqli_query($con,"update teams set cvc=0 where user_id='$user_id'");
			$result=mysqli_query($con,"select tc,rc from users where user_id='$user_id'");
				while($row=mysqli_fetch_array($result)) {
					$tc=$row['tc'];
					$rc=$row['rc'];
				}
			echo $rc.' '.(11-$tc);
		}
		else {
			echo 99;
		}
	}	
}
else {
	echo "Access Denied";
}
}
else
{
	header("location: my-account/index.php");
}
?>