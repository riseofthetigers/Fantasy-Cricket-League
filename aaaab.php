<?php 
include 'dbconfig.php';
$result=mysqli_query($con,"select * from users");
while($row=mysqli_fetch_array($result))
$users[]=$row['user_id'];
for($i=0;$i<count($users);$i++) {
$result=mysqli_query($con,"select * from teamstemp where skill='batsman' and user_id='$users[$i]'");
$batsman=mysqli_num_rows($result);
$result=mysqli_query($con,"select * from teamstemp where skill='bowler' and user_id='$users[$i]'");
$bowler=mysqli_num_rows($result);
$result=mysqli_query($con,"select * from teamstemp where skill='ar' and user_id='$users[$i]'");
$ar=mysqli_num_rows($result);
$result=mysqli_query($con,"select * from teamstemp where skill='wk' and user_id='$users[$i]'");
$wk=mysqli_num_rows($result);
$combinations[$i][] = $batsman;
$combinations[$i][] = $bowler;
$combinations[$i][] = $ar;
$combinations[$i][] = $wk;
}
$unique = array_map("unserialize", array_unique(array_map("serialize", $combinations)));

for($i=0;$i<count($combinations);$i++) 
if(($combinations[$i][0]==0 && $combinations[$i][1]==0 && $combinations[$i][2]==0 && $combinations[$i][3]==0) || ($combinations[$i][0] + $combinations[$i][1] + $combinations[$i][2] + $combinations[$i][3] != 22))
unset($combinations[$i]);

$unique = array_map("unserialize", array_unique(array_map("serialize", $combinations)));

for($i=0;$i<count($unique);$i++) 
$count[]=0;

for($i=0;$i<count($unique);$i++)
for($j=0;$j<count($combinations);$j++)
if($unique[$i][0]==$combinations[$j][0] && $unique[$i][1]==$combinations[$j][1] && $unique[$i][2]==$combinations[$j][2] && $unique[$i][3]==$combinations[$j][3]) {
$count[$i]++;
echo 'Combination ';
for($k=0;$k<4;$k++)
echo $combinations[$j][$k].' ';
echo '<br>';
echo 'Unique ';
for($k=0;$k<4;$k++)
echo $unique[$i][$k].' ';
echo '<br>';
}
for($i=0;$i<count($unique);$i++)
echo $count[$i].' ';

?>