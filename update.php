<?php

include "dbconfig.php";
	error_reporting(E_ERROR);
	session_start();
	ob_start();
	$user_id = trim($_SESSION["VALID_USER_ID"]);
	if(isset($_SESSION["VALID_USER_ID"]) && $user_id=='admin')
	{
ini_set('max_execution_time', 300);
function nullfix($attr)
{
	if(!isset($attr) || trim($attr)==='')
		return 0;
	else 
		return $attr;
}
function econ($min_economy,$economy)
{
	if($economy == 0)
		return 1;
	else 
		return $min_economy/$economy;
}
$fixid=$_POST["fix"];
$_SESSION['fixture']=$fixid;
$team1score=$_POST["team1score"];
$team2score=$_POST["team2score"];
$i=1;
class player{
	public $pid;
	public $pname;
	public $skill;
	public $team;
	public $match;
	public $batted;
	public $bowled;
	public $no;
	public $runscored;
	public $ballfaced;
	public $wktaken;
	public $ballbowled;
	public $runconceded;
	public $avgpoints;
	public $points;
	public $totmatches;
	public $batinnings;
	public $notout;
	public $totruns;
	public $highest;
	public $totballsfaced;
	public $bwlinnings;
	public $totballsbowled;
	public $totrunsconceded;
	public $totwickets;
	public $best;
	public $strrate;
	public $economy;
	public $credits;
	public $totpoints;
	public $fourhit;
	public $sixhit;
	public $totfours;
	public $totsixes;
	public $totmaiden;
	public $maidenbowled;
}
$obj=array();
while(isset($_POST["pid".$i]))
{
	$obj[$i]=new player();
	$obj[$i]->pid=$_POST["pid".$i];
	$obj[$i]->match=isset($_POST["match".$i])?1:0;
	$obj[$i]->pname=$_POST["pname".$i];
	$obj[$i]->skill=$_POST["skill".$i];
	$obj[$i]->team=$_POST["team".$i];
	$obj[$i]->batted=isset($_POST["bat".$i])?1:0;
	$obj[$i]->bowled=isset($_POST["bwl".$i])?1:0;
	$obj[$i]->no=isset($_POST["notout".$i])?1:0;
	$obj[$i]->runscored=$_POST["runscored".$i];
	$obj[$i]->ballfaced=$_POST["ballfaced".$i];
	$obj[$i]->fourhit=$_POST["fourhit".$i];
	$obj[$i]->sixhit=$_POST["sixhit".$i];
	$obj[$i]->wktaken=$_POST["wktaken".$i];
	$obj[$i]->ballbowled=$_POST["ballbowled".$i];
	$obj[$i]->runconceded=$_POST["runconceded".$i];
	$obj[$i]->maidenbowled=$_POST["maidenbowled".$i];
	$query=mysqli_query($con,"SELECT * from players where player_id='".$obj[$i]->pid."'");
	$row=mysqli_fetch_array($query);
	$obj[$i]->totpoints=$row['points'];
	$obj[$i]->credits=$row['credits'];
	$obj[$i]->avgpoints=$row['avgpoints'];
	$obj[$i]->points=0;
	$obj[$i]->totmatches=$row['matches'];
	$obj[$i]->batinnings=$row['batinnings'];
	$obj[$i]->notout=$row['notout'];
	$obj[$i]->totruns=$row['runscored'];
	$obj[$i]->highest=$row['highest'];
	$obj[$i]->totballsfaced=$row['ballsfaced'];
	$obj[$i]->bwlinnings=$row['bwlinnings'];
	$obj[$i]->totballsbowled=$row['ballsbowled'];
	$obj[$i]->totrunsconceded=$row['runsconceded'];
	$obj[$i]->totwickets=$row['wickets'];
	$obj[$i]->best=$row['best'];
	$obj[$i]->totfours=$row['fours'];
	$obj[$i]->totsixes=$row['sixes'];
	$obj[$i]->totmaiden=$row['maiden'];
	$obj[$i]->strrate=0;
	$obj[$i]->economy=1000;
	$i++;
}
$j=$i;
$i=1;
while($i<$j)
{
	if($obj[$i]->match)
	{
		$obj[$i]->totmatches++;
		if($obj[$i]->batted)
		{
			$obj[$i]->batinnings++;
			$obj[$i]->notout+=$obj[$i]->no;
			$obj[$i]->totruns+=$obj[$i]->runscored;
			$obj[$i]->totballsfaced+=$obj[$i]->ballfaced;
			$obj[$i]->highest= ($obj[$i]->highest > $obj[$i]->runscored) ? $obj[$i]->highest : $obj[$i]->runscored;
			$obj[$i]->strrate = $obj[$i]->runscored*100/$obj[$i]->ballfaced;
			$obj[$i]->totfours +=  $obj[$i]->fourhit;
			$obj[$i]->totsixes +=  $obj[$i]->sixhit;
			$obj[$i]->totmaiden +=  $obj[$i]->maidenbowled;
		}
		if($obj[$i]->bowled)
		{
			$obj[$i]->bwlinnings++;
			$obj[$i]->totballsbowled+=$obj[$i]->ballbowled;
			$obj[$i]->totrunsconceded+=$obj[$i]->runconceded;
			$obj[$i]->totwickets+=$obj[$i]->wktaken;
			$temp=explode('-',$obj[$i]->best);
			if($temp[0]<=$obj[$i]->wktaken)
			{
				if(($temp[0] == $obj[$i]->wktaken && $temp[1] > $obj[$i]->runconceded) || $temp[0] < $obj[$i]->wktaken)
				{
					$temp[1] = $obj[$i]->runconceded;
				}
				$obj[$i]->best = $obj[$i]->wktaken.'-'.$temp[1];
			}
			$obj[$i]->economy = $obj[$i]->runconceded*6/$obj[$i]->ballbowled;
		}
	}
	$i++;
}
$i=1;
$min_economy=$obj[$i]->economy;
$max_strrate=$obj[$i]->strrate;
$max_runs=$obj[$i]->runscored;
$max_wickets=$obj[$i]->wktaken;
$i++;
while($i<$j)
{
	if($min_economy>$obj[$i]->economy)
		$min_economy=$obj[$i]->economy;
	if($max_strrate<$obj[$i]->strrate)
		$max_strrate=$obj[$i]->strrate;
	if($max_runs<$obj[$i]->runscored)
		$max_runs=$obj[$i]->runscored;
	if($max_wickets<$obj[$i]->wktaken)
		$max_wickets=$obj[$i]->wktaken;
	$i++;
}
$i=1;
while($i<$j)
{
	if($obj[$i]->batted && $obj[$i]->bowled)
	{
		$obj[$i]->points=(($obj[$i]->strrate/$max_strrate)+($obj[$i]->runscored/$max_runs)+(econ($min_economy,$obj[$i]->economy))+($obj[$i]->wktaken/$max_wickets))*3.75;
	}
	else if($obj[$i]->batted)
	{
		$obj[$i]->points=(($obj[$i]->strrate/$max_strrate)+($obj[$i]->runscored/$max_runs))*5;
	}
	else if($obj[$i]->bowled)
	{
		$obj[$i]->points=((econ($min_economy,$obj[$i]->economy))+($obj[$i]->wktaken/$max_wickets))*5;
	}
	$obj[$i]->totpoints+=$obj[$i]->points;
	if($obj[$i]->totmatches != 0)
		$obj[$i]->avgpoints=(($obj[$i]->avgpoints*($obj[$i]->totmatches - 1))+$obj[$i]->points)/$obj[$i]->totmatches;
	$i++;
}
$i=1;
while($i<$j)
{
	$k=1;
	while($k<$j-1)
	{
		if($obj[$k]->points < $obj[$k+1]->points)
		{
			list($obj[$k], $obj[$k+1])=array($obj[$k+1] , $obj[$k]);
		}
		$k++;
	}
	$i++;
}
$i=1;
while($i<$j)
{
	if($i<=7 && $i>=3)
	{
		if($obj[$i]->credits<=13 && $obj[$i]->credits>=9)
			$obj[$i]->credits++;
		if($obj[$i]->credits<=8)
			$obj[$i]->credits+=2;
	}
	if($i>=8 && $i<=15)
	{
		if($obj[$i]->credits>=14)
			$obj[$i]->credits--;
		if($obj[$i]->credits<=8)
			$obj[$i]->credits++;
	}
	if($i>=16)
	{
		if($obj[$i]->credits>=14)
			$obj[$i]->credits-=2;
		if($obj[$i]->credits<=13 && $obj[$i]->credits>=9)
			$obj[$i]->credits--;
	}
	if($i <= 2)
		$obj[$i]->credits+=4;
	if($obj[$i]->credits>15)
		$obj[$i]->credits=15;
	if($obj[$i]->credits<5)
		$obj[$i]->credits=5; 
	$obj[$i]->avgpoints=number_format((float)$obj[$i]->avgpoints, 2, '.', '');
	$obj[$i]->strrate=number_format((float)$obj[$i]->strrate, 2, '.', '');
	$obj[$i]->economy=number_format((float)$obj[$i]->economy, 2, '.', '');
	$obj[$i]->points=number_format((float)$obj[$i]->points, 2, '.', '');
	$i++;
} 
$i=1;
while($i<$j)
{
	$obj[$i]->pid=nullfix($obj[$i]->pid);
	$obj[$i]->pname=nullfix($obj[$i]->pname);
	$obj[$i]->skill=nullfix($obj[$i]->skill);
	$obj[$i]->team=nullfix($obj[$i]->team);
	$obj[$i]->match=nullfix($obj[$i]->match);
	$obj[$i]->batted=nullfix($obj[$i]->batted);
	$obj[$i]->bowled=nullfix($obj[$i]->bowled);
	$obj[$i]->no=nullfix($obj[$i]->no);
	$obj[$i]->runscored=nullfix($obj[$i]->runscored);
	$obj[$i]->ballfaced=nullfix($obj[$i]->ballfaced);
	$obj[$i]->wktaken=nullfix($obj[$i]->wktaken);
	$obj[$i]->ballbowled=nullfix($obj[$i]->ballbowled);
	$obj[$i]->runconceded=nullfix($obj[$i]->runconceded);
	$obj[$i]->avgpoints=nullfix($obj[$i]->avgpoints);
	$obj[$i]->points=nullfix($obj[$i]->points);
	$obj[$i]->totmatches=nullfix($obj[$i]->totmatches);
	$obj[$i]->batinnings=nullfix($obj[$i]->batinnings);
	$obj[$i]->notout=nullfix($obj[$i]->notout);
	$obj[$i]->totruns=nullfix($obj[$i]->totruns);
	$obj[$i]->highest=nullfix($obj[$i]->highest);
	$obj[$i]->totballsfaced=nullfix($obj[$i]->totballsfaced);
	$obj[$i]->bwlinnings=nullfix($obj[$i]->bwlinnings);
	$obj[$i]->totballsbowled=nullfix($obj[$i]->totballsbowled);
	$obj[$i]->totrunsconceded=nullfix($obj[$i]->totrunsconceded);
	$obj[$i]->totwickets=nullfix($obj[$i]->totwickets);
	$obj[$i]->best=nullfix($obj[$i]->best);
	$obj[$i]->strrate=nullfix($obj[$i]->strrate);
	$obj[$i]->economy=nullfix($obj[$i]->economy);
	$obj[$i]->credits=nullfix($obj[$i]->credits);
	$obj[$i]->totpoints=nullfix($obj[$i]->totpoints);
	$obj[$i]->fourhit=nullfix($obj[$i]->fourhit);
	$obj[$i]->sixhit=nullfix($obj[$i]->sixhit);
	$obj[$i]->totfours=nullfix($obj[$i]->totfours);
	$obj[$i]->totsixes=nullfix($obj[$i]->totsixes);
	$obj[$i]->totmaiden=nullfix($obj[$i]->totmaiden);
	$obj[$i]->maidenbowled=nullfix($obj[$i]->maidenbowled);
	$i++;
}
$flag=true;
mysqli_query($con,"START TRANSACTION");
$i=1;
while($i<$j)
{
	$query1=mysqli_query($con,"INSERT INTO `scorecard`(`fixture_id`, `player_id`, `matchplayed`, `batted`, `bowled`, `notout`, `strrate`, `economy`, `runscore`, `ballfaced`, `four`, `six`, `wicket`, `ballbowled`, `runconceded`, `maidenbowled`, `point`) VALUES ('$fixid','".$obj[$i]->pid."','".$obj[$i]->match."','".$obj[$i]->batted."','".$obj[$i]->bowled."','".$obj[$i]->no."','".$obj[$i]->strrate."','".$obj[$i]->economy."','".$obj[$i]->runscored."','".$obj[$i]->ballfaced."','".$obj[$i]->fourhit."','".$obj[$i]->sixhit."','".$obj[$i]->wktaken."','".$obj[$i]->ballbowled."','".$obj[$i]->runconceded."','".$obj[$i]->maidenbowled."','".$obj[$i]->points."')") OR die("Couldnt execute scorecard for ".$obj[$i]->pid." as ".mysqli_error($con));
	if(!$query1)
		$flag=false;

	$query2=mysqli_query($con,"UPDATE `players` SET `avgpoints`='".$obj[$i]->avgpoints."',`points`='".$obj[$i]->totpoints."',`points_last`='".$obj[$i]->points."',`matches`='".$obj[$i]->totmatches."',`batinnings`='".$obj[$i]->batinnings."',`notout`='".$obj[$i]->notout."',`runscored`='".$obj[$i]->totruns."',`highest`='".$obj[$i]->highest."',`ballsfaced`='".$obj[$i]->totballsfaced."',`bwlinnings`='".$obj[$i]->bwlinnings."',`ballsbowled`='".$obj[$i]->totballsbowled."',`runsconceded`='".$obj[$i]->totrunsconceded."',`wickets`='".$obj[$i]->totwickets."',`best`='".$obj[$i]->best."',`fours`='".$obj[$i]->totfours."',`sixes`='".$obj[$i]->totsixes."',`maiden`='".$obj[$i]->totmaiden."' WHERE player_id='".$obj[$i]->pid."'") OR die("Couldnt execute players for ".$obj[$i]->pid." as ".mysqli_error($con));
	if(!$query2)
		$flag=false;

	$query4=mysqli_query($con,"INSERT INTO creditstemp (player_id, credits) VALUES('".$obj[$i]->pid."','".$obj[$i]->credits."') ON DUPLICATE KEY UPDATE credits=VALUES(credits)") OR die("Couldnt execute creditstemp for ".$obj[$i]->pid." as ".mysqli_error($con));
	if(!$query4)
		$flag=false;
	$i++;

	
}
$query3=mysqli_query($con,"UPDATE `fixtures` SET `team1score`='$team1score',`team2score`='$team2score',`updated`=true WHERE `fixture_id`='$fixid'") OR die(mysqli_error($con));
if(!$query3)
	$flag=false;
if($flag)
{
	mysqli_query($con,"COMMIT");
	header( "refresh:5;url=update_users.php" ); 
	echo 'Inserted players data !You are being redirected within 5 secs<br/>If not <a href="update_users.php">Click Here</a>';
}
else
{	
	mysqli_query($con,"ROLLBACK");
	echo "An error occured";
}
/*$i=1;
while($i<$j)
{
	if($obj[$i]->bowled)
	{
		$query=mysqli_query($con,"SELECT * from players where player_id='".$obj[$i]->pid."'");
		$row=mysqli_fetch_array($query);
		$diff=$obj[$i]->points-$row["avgpoints"];
		$query4=mysqli_query($con,"INSERT INTO tempscores (player_id, points,pointsdiff) VALUES('".$obj[$i]->pid."','".$obj[$i]->points."','".$diff."') ON DUPLICATE KEY UPDATE points=VALUES(points),pointsdiff=VALUES(pointsdiff)") ;
		if(!$query4)
			echo "Couldnt execute tempscores for ".$obj[$i]->pid;
		echo $obj[$i]->pid."\t".$obj[$i]->pname."\t".$obj[$i]->points."\t".$diff."<br/>";
	}
	$i++;
}*/

	}
	else
	{
	header("location: my-account/index.php");
	}
?>