<?php
include "dbconfig.php";
$result=mysqli_query($con,"select * from users");
while($row=mysqli_fetch_array($result)) {
$users[]=$row['user_id'];
$name[]=$row['name'];
$class[]=$row['class'];
}
for($i=0;$i<count($users);$i++)
{
unset($players);
$players = array();
unset($skill);
$skill = array();
unset($credits);
$credits = array();
unset($selected);
$selected = array();
unset($team);
$team = array();
unset($c);
$c = array();
unset($vc);
$vc = array();

$result=mysqli_query($con,"select * from teams where user_id='$users[$i]'");
echo 'User\'s name:'.$name[$i].'<br>';
echo '<br>';
echo 'User\'s team name:'.$users[$i].'<br>';

while($row=mysqli_fetch_array($result)) {
$temp=$row['player_id'];
$re=mysqli_query($con,"select * from players where player_id='$temp'");
while($r=mysqli_fetch_array($re)) {
$players[]=$r['name'];
$skill[]=$r['skill'];
$credits[]=$r['credits'];
$selected[]=$r['selected'];
$c[]=$r['captained'];
$vc[]=$r['vcaptained'];
$team=$r['team'];
}
}
echo '<table border="1">';
echo '<tr>';
echo '<td>Players name</td>';
echo '<td>skill</td>';
echo '<td>credits</td>';
echo '<td>selected(times)</td>';
echo '<td>captained(times)</td>';
echo '<td>vice captained(times)</td>';
echo '<td>player team</td>';
echo '</tr>';
for($j=0;$j<count($players);$j++) {
echo '<tr>';
echo '<td>'.$players[$j].'</td>';
echo '<td>'.$skill[$j].'</td>';
echo '<td>'.$credits[$j].'</td>';
echo '<td>'.$selected[$j].'</td>';
echo '<td>'.$c[$j].'</td>';
echo '<td>'.$vc[$j].' times</td>';
echo '<td>'.$team[$j].'</td>';
echo '</tr>';
}
echo '</table>';
}


?>