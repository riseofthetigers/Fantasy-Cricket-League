<?php
include "dbconfig.php";
error_reporting(E_ERROR);
session_start();
ob_start();
$user_id = trim($_SESSION["VALID_USER_ID"]);
if(isset($_SESSION["VALID_USER_ID"]) && !empty($user_id))
{
$player_id = $_POST['player_id'];
$result    = mysqli_query($con, "select teamcomplete from users where user_id='$user_id'");
while ($row = mysqli_fetch_array($result)) {
    $teamcomplete = $row['teamcomplete'];
}
if ($teamcomplete == 0) {
    $result = mysqli_query($con, "select tc from users where user_id='$user_id'");
    while ($row = mysqli_fetch_array($result)) {
        $tc = $row['tc'];
    }
    echo (11 - $tc);
} else
    echo 'Team Complete!';
}
else
{
	header("location: my-account/index.php");
}	
?>		