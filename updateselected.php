<?php
include 'dbconfig.php';
$result=mysqli_query($con,"select distinct player_id from teams");
while($row=mysqli_fetch_array($result))
$selectedThese[]=$row['player_id'];
for($i=0;$i<count($selectedThese);$i++) 
$countOfSelected[$i]=0;
for($i=0;$i<count($selectedThese);$i++) {
$result=mysqli_query($con,"select player_id from teams where player_id='$selectedThese[$i]'");
$countOfSelected[$i]=mysqli_num_rows($result);
$result=mysqli_query($con,"update players set selected=selected-'$countOfSelected[$i]' where player_id='$selectedThese[$i]'");
if($result)
echo 'Success '.$i.'<br>';
}

?>