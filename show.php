
<?php
include "dbconfig.php";
error_reporting(E_ERROR);
session_start();
ob_start();
$user_id = trim($_SESSION["VALID_USER_ID"]);
if(isset($_SESSION["VALID_USER_ID"]) && !empty($user_id))
{

$result = mysqli_query($con, "select * from next_match");
$nteams = mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result)) {
    $teams[] = $row['teams'];
}

for ($i = 0; $i < $nteams; $i++) {
    $result = mysqli_query($con, "select * from players where team='$teams[$i]'");
    while ($row = mysqli_fetch_array($result)) {
        $players[] = $row['player_id'];
    }
}

for ($i = 0; $i < sizeof($players); $i++) {
    $result = mysqli_query($con, "select * from teams where player_id='$players[$i]' and user_id='$user_id'");
    $count  = mysqli_num_rows($result);
    if ($count == 1) {
        $flag[$i] = 1;
		
	}	
    else
        $flag[$i] = 0;
}
$j          = 0;
$response[] = array(
    'value' => 'Choose a Player',
    'text' => 'Choose a Player'
);
for ($i = 0; $i < $nteams; $i++) {
    $result = mysqli_query($con, "select * from players where team='$teams[$i]'");
    while ($row = mysqli_fetch_array($result)) {
        if ($flag[$j] == 1) {
            $response[] = array(
                'value' =>$row['player_id'],
                'text' => $row['name'],
				'skill'=> $row['skill'],
				'team' => $row['team'],
				'credits' => number_format((float)$row['credits'], 2, '.', ''),
				'nteams'=>$nteams
            );
        }
        $j++;
    }
}

echo json_encode($response);
}
else
{
	header("location: my-account/index.php");
}
?>