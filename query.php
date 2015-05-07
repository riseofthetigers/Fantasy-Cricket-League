<?php

include "dbconfig.php";
	error_reporting(E_ERROR);
	session_start();
	ob_start();
	$user_id = trim($_SESSION["VALID_USER_ID"]);
	function econ($min_economy,$economy)
	{
		if($economy == 0)
			return 1;
		else 
			return $min_economy/$economy;
	}
	function player($pid)
   {
      global $con;
      $result=mysqli_query($con,"SELECT * from players Where player_id='$pid'") OR die(mysqli_error($con));
      $row1=mysqli_fetch_array($result);
      return $row1['name'];
   }
	if(isset($_SESSION["VALID_USER_ID"]) && $user_id=='admin')
	{
		$fixid = $_GET["myid"];
		$result=mysqli_query($con,"SELECT deadline_time from fixtures where fixture_id='$fixid'") OR die(mysqli_error($con));
		$strtime=0;
		$row=mysqli_fetch_array($result);
		$endtime = $row["deadline_time"]; 
		$result=mysqli_query($con,"SELECT Distinct deadline_time from fixtures where deadline_time<>0 Order by deadline_time desc") OR die(mysqli_error($con));
		while($row=mysqli_fetch_array($result))
		{
			if($endtime > $row["deadline_time"])
			{
				$strtime = $row["deadline_time"];
				break;
			}
		}
		$query=mysqli_query($con,"SELECT * from scorecard where fixture_id='$fixid' AND matchplayed<>false") OR die(mysql_error());
		class player{
			public $pid;
			public $strrate;
			public $economy;
			public $runscored;
			public $wktaken;
			public $points;
			public $diff;
			public $bowled;
			public $batted;
		}
		$obj=array();
		$i=1;
		while($row = mysqli_fetch_array($query))
		{
			$obj[$i]->pid = $row["player_id"];
			$obj[$i]->strrate = $row["strrate"];
			$obj[$i]->economy = $row["economy"];
			$obj[$i]->runscored = $row["runscore"];
			$obj[$i]->wktaken = $row["wicket"];
			$obj[$i]->diff = $row["point"];
			$obj[$i]->batted = $row["batted"];
			$obj[$i]->bowled = $row["bowled"];
			if($obj[$i]->economy == 0 && $obj[$i]->bowled == 0)
				$obj[$i]->economy = 1000;
			$i++;
		}
		$j=$i;
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
			$i++;
		}
		$i=1;
		while($i<$j)
		{
			$obj[$i]->points=number_format((float)$obj[$i]->points, 2, '.', '');
			$obj[$i]->diff=number_format((float)$obj[$i]->diff, 2, '.', '');
			$obj[$i]->diff = $obj[$i]->points - $obj[$i]->diff;
			$i++;
		}
		$flag=true;
		mysqli_query($con,"START TRANSACTION");
		$i=1;
		while($i<$j)
		{
				/*$query1=mysqli_query($con,"SELECT user_id from teamstemp where player_id='".$obj[$i]->pid."' AND time<='$endtime' AND time>'$strtime'") OR die(mysqli_error($con)."Error at query1");
				if(!$query1)
					$flag=false;
				while($row1=mysqli_fetch_array($query1) )
				{
					$user=$row1["user_id"];
					$query2=mysqli_query($con,"UPDATE `users` SET `points`=`points`+'".$obj[$i]->diff."' WHERE `user_id`='$user'") OR die(mysqli_error($con)."Error at query2");
					if(!$query2)
						$flag=false;
				}
				$query3=mysqli_query($con,"UPDATE `scorecard` SET `point`= '".$obj[$i]->points."' WHERE `fixture_id`='$fixid' AND `player_id`='".$obj[$i]->pid."'") OR die(mysqli_error($con)."Error at query3");
				if(!$query3)
					$flag=false;
				$query4=mysqli_query($con,"UPDATE `players` SET `points`= `points` + '".$obj[$i]->diff."' WHERE `player_id`='".$obj[$i]->pid."'") OR die(mysqli_error($con)."Error at query4");
				if(!$query4)
					$flag=false;
				$query5=mysqli_query($con,"UPDATE `players` SET `avgpoints`= ROUND(`points`/`matches`,2) WHERE `player_id`='".$obj[$i]->pid."' AND matches<>0 ") OR die(mysqli_error($con)."Error at query5");
				if(!$query5)
					$flag=false;
				$query5=mysqli_query($con,"INSERT INTO tempscores (player_id, points,pointsdiff) VALUES('".$obj[$i]->pid."','".$obj[$i]->points."','".$obj[$i]->diff."')") OR die(mysqli_error($con)."Error at query5");
				if(!$query5)
					$flag=false;*/
				echo $obj[$i]->pid."\t".player($obj[$i]->pid)."\t".$obj[$i]->points."\t".$obj[$i]->diff."<br/>";
			
			$i++;
		}
		if($flag)
		{
			mysqli_query($con,"COMMIT");
			echo "Table is Updated";
		}
		else{
			mysqli_query($con,"ROLLBACK");
			echo "An error occured";
		}
	}
	else
	{
	header("location: my-account/index.php");
	}
?>