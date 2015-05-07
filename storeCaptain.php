<?php
include "dbconfig.php";
error_reporting(E_ERROR);
session_start();
ob_start();
$user_id = trim($_SESSION["VALID_USER_ID"]);
if(isset($_SESSION["VALID_USER_ID"]) && !empty($user_id))
{
$captain      = $_POST['captain'];
$vicecaptain  = $_POST['vicecaptain'];


$result = mysqli_query($con, "select * from next_match");
$nteams = mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result)) {
    $teams[] = $row['teams'];
}
$count = 0;
for ($i = 0; $i < $nteams; $i++) {
    $result = mysqli_query($con, "select cvc from teams where user_id='$user_id' and team='$teams[$i]'");
    while ($row = mysqli_fetch_array($result))
        $cvc = $row['cvc'];
    if ($cvc == 1 || $cvc == 2)
        $count++;
}
if ($count >= 1) {
    echo 7;
} else {
	if($nteams==8) {
	$result = mysqli_query($con, "select tc2 from users where user_id='$user_id'");
	while ($row = mysqli_fetch_array($result))
        $tc = $row['tc2'];
	}
	else {
    $result = mysqli_query($con, "select tc from users where user_id='$user_id'");
	while ($row = mysqli_fetch_array($result))
        $tc = $row['tc'];
	}
    
    if ($tc != 0) {
        echo 4;
    } else {
        if ($captain == 'Choose a Player' || $vicecaptain == 'Choose a Player' || $captain == $vicecaptain) {
            echo 0;
        }
        
        else {
            
            mysqli_query($con, "update teams set cvc=1 where player_id='$captain' and user_id='$user_id'");
            $result = mysqli_query($con, "update teams set cvc=2 where player_id='$vicecaptain' and user_id='$user_id'");
            mysqli_query($con, "update users set teamcomplete=1 where user_id='$user_id'");
            mysqli_query($con, "update players set captained=captained+1 where player_id='$captain'");
            mysqli_query($con, "update players set vcaptained=vcaptained+1 where player_id='$vicecaptain'");
            
            $result  = mysqli_query($con, "select skill from teams where user_id='$user_id' and skill='batsman'");
            $batsman = mysqli_num_rows($result);
            
            $result = mysqli_query($con, "select skill from teams where user_id='$user_id' and skill='wk'");
            $wk     = mysqli_num_rows($result);
            
            $result = mysqli_query($con, "select skill from teams where user_id='$user_id' and skill='ar'");
            $ar     = mysqli_num_rows($result);
            
            $result = mysqli_query($con, "select skill from teams where user_id='$user_id' and skill='bowler'");
            $bowler = mysqli_num_rows($result);
            
           
            
            echo 'Done!';
        }
    }
}
}
else
{
	header("location: my-account/index.php");
}
?>		