<?php
include "dbconfig.php";
error_reporting(E_ERROR);
session_start();
ob_start();
$user_id = trim($_SESSION["VALID_USER_ID"]);
if(isset($_SESSION["VALID_USER_ID"]) && !empty($user_id))
{
$player_id = $_POST['player_id'];
if (isset($player_id) && !empty($player_id)) {
	$result=mysqli_query($con,"select teamcomplete from users where user_id='$user_id'");
	while($row=mysqli_fetch_array($result)) {
		$teamcomplete=$row['teamcomplete'];
	}
	
	if($teamcomplete==1) {
	
    $result  = mysqli_query($con, "select * from teams where user_id='$user_id'");
    while ($row = mysqli_fetch_array($result)) {
        if($row['cvc']==1)	
			$cap = $row['player_id'];
		if($row['cvc']==2)	
			$vcap = $row['player_id'];
	}	
    
        mysqli_query($con, "update players set captained=captained-1 where player_id='$cap'");
        mysqli_query($con, "update players set vcaptained=vcaptained-1 where player_id='$vcap'");
	}	
    $result = mysqli_query($con, "select * from next_match");
    $nteams = mysqli_num_rows($result);
    while ($row = mysqli_fetch_array($result)) {
        $teams[] = $row['teams'];
    }
    for ($i = 0; $i < $nteams; $i++) {
        $result = mysqli_query($con, "select player_id from teams where user_id='$user_id' and team='$teams[$i]'");
        while ($row = mysqli_fetch_array($result))
            $current_team[] = $row['player_id'];
        mysqli_query($con, "delete from teams where user_id='$user_id' and team='$teams[$i]'");
    }
    for ($i = 0; $i < count($current_team); $i++) {
        $result = mysqli_query($con, "select selected from players where player_id='$current_team[$i]'");
        while ($row = mysqli_fetch_array($result))
            $t = $row['selected'];
        if ($t != 0)
            mysqli_query($con, "update players set selected=selected-1 where player_id='$current_team[$i]'");
    }
    if($nteams==8)
	$result = mysqli_query($con, "update users set rc2=270,tc2=22 where user_id='$user_id'");
	else
    $result = mysqli_query($con, "update users set rc=135,tc=11 where user_id='$user_id'");
    $result = mysqli_query($con, "update users set teamcomplete=0 where user_id='$user_id'");
    if ($result)
        echo '1';
    else
        echo '0';
	
	
} else
    echo 'Access Denied';
}
else
{
	header("location: my-account/index.php");
}	
?>		