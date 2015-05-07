<html>
   <head>
      <style type="text/css">
         body {
         background-color: #f5f5f5;
         font-family: Arial, sans-serif;
         font-size: 14px;
         color: #252c33;
         }
         #wrapper {
         background-color: #f5f5f5;
         }
         .pre_top_nav,
         .wpml_switcher ul
         {
         background-color: #f5f5f5;
         }
         .footer {
         background-color: #ffffff;
         }
         .footer .copyright {
         color: #868686;
         }
         a{
         color: #c4302b;
         }
         a:hover, a:focus{
         color: #c4302b;
         }
         .navbar-brand{
         font-size: 20px;
         }
         h1, .h1,
         h2, .h2,
         h3, .h3,
         h4, .h4,
         h5, .h5,
         h6, .h6,
         .entry-title,
         .page-title
         {
         color: #252c33;
         font-weight: 400;
         font-family: Oswald, Arial, sans-serif;
         }
         h1, .h1
         {
         font-size: 60px;
         }
         h2, .h2{
         font-size: 30px;
         }
         h3, .h3{
         font-size: 20px;
         }
         h4, .h4{
         font-size: 17px;
         }
         h5, .h5{
         font-size: 15px;
         }
         h6, .h6{
         font-size: 14px;
         }
      </style>
   </head>
   <body>
   <?php
   error_reporting(E_ERROR);
   include "dbconfig.php";
   session_start();
   ob_start();
   $user_id = trim($_SESSION["VALID_USER_ID"]);
   if(isset($_SESSION["VALID_USER_ID"]) && !empty($user_id))
   {
   $temp = $_GET['player_id'];
   
   $player_id = intval(substr($temp, 1));
   
   $result = mysqli_query($con, "select * from players where player_id='$player_id'");
   while ($row = mysqli_fetch_array($result)) {
       $selected = $row['selected'];
       $skill    = $row['skill'];
       $name     = $row['name'];
       $team     = $row['team'];
       $points   = $row['points'];
       $credits  = $row['credits'];
       $photo    = $row['photo'];
       $class    = $row['class'];
       
       $sixes      = $row['sixes'];
       $fours      = $row['fours'];
       $batinnings = $row['batinnings'];
       $nnotout    = $row['notout'];
       $ballsfaced = $row['ballsfaced'];
       $runs       = $row['runscored'];
       $highest    = $row['highest'];
       
       $maiden       = $row['maiden'];
       $bwlinnings   = $row['bwlinnings'];
       $wickets      = $row['wickets'];
       $ballsbowled  = $row['ballsbowled'];
       $runsconceded = $row['runsconceded'];
       $best         = $row['best'];
       
       $matches       = $row['matches'];
       $avgpoints     = $row['avgpoints'];
       $points_last   = $row['points_last'];
       $captained     = $row['captained'];
       $vicecaptained = $row['vcaptained'];
       
   }
   $result          = mysqli_query($con, "select user_id from users");
   $totalUsers      = mysqli_num_rows($result);
   $percentSelected = ($selected / $totalUsers) * 100;
   
   ?>

      <div id="data">
         <div id="dataStatus"></div>
         <h2>Tour Performance</h2>
         <?php
			echo '<h3>' . $name . '</h3>';
			
			echo '<img width="100" height="100" src="'.$photo.'" class="photo"/>';
			
            echo '<h4>Class: <span style="color:#b81e1f;">' . $class . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			
            echo 'Points: <span style="color:#b81e1f;">' . $points . '</span> <br>';
			
            echo 'Credits: <span style="color:#b81e1f;">' . $credits .'</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			
            echo 'Team: <span style="color:#b81e1f;">' . $team . '</span> <br>';
			
            echo 'Skill: <span style="color:#b81e1f;text-transform:uppercase;">' . $skill . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			
            echo 'Selected by:<span style="color:#b81e1f;"> ' . number_format((float)$percentSelected, 2, '.', '') . '% Users</span><br><br>';
			
			echo 'Matches: <span style="color:#b81e1f;text-transform:uppercase;">' . $matches . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			
			echo 'Avg. Pts.:<span style="color:#b81e1f;"> ' . $avgpoints . '</span><br>';
			
			echo 'Pts. in Last Match: <span style="color:#b81e1f;text-transform:uppercase;">' . $points_last . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			
			echo 'Captained:<span style="color:#b81e1f;"> ' . $captained . '</span><br>';
			
			echo 'V-Captained: <span style="color:#b81e1f;text-transform:uppercase;">' . $vicecaptained . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			

			echo '<br><br>Batting Statistics<br>';
			
			echo '6s: <span style="color:#b81e1f;text-transform:uppercase;">' . $sixes . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			
			echo '4s:<span style="color:#b81e1f;"> ' . $fours . '</span><br>';
			
			echo 'Innings: <span style="color:#b81e1f;text-transform:uppercase;">' . $batinnings . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			echo 'Balls faced:<span style="color:#b81e1f;"> ' . $ballsfaced . '</span><br>';
			
			echo 'Not Out: <span style="color:#b81e1f;text-transform:uppercase;">' . $nnotout . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			echo 'Highest:<span style="color:#b81e1f;"> ' . $highest . '</span><br>';
			
			echo 'Runs: <span style="color:#b81e1f;text-transform:uppercase;">' . $runs . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			
			echo '<br><br>Bowling Statistics<br>';
			
			
			echo 'Maiden:<span style="color:#b81e1f;"> ' . $maiden . '</span><br>';
			
			echo 'Innings: <span style="color:#b81e1f;text-transform:uppercase;">' . $bwlinnings . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			echo 'Wickets:<span style="color:#b81e1f;"> ' . $wickets . '</span><br>';
			
			echo 'Balls Bowled: <span style="color:#b81e1f;text-transform:uppercase;">' . $ballsbowled . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			
			echo 'Runs conceded:<span style="color:#b81e1f;"> ' . $runsconceded . '</span><br>';
			
			echo 'Best: <span style="color:#b81e1f;text-transform:uppercase;">' . $best . '</span> &nbsp;&nbsp;&nbsp;&nbsp;';
			echo '</h4>';
            ?>
      </div>
      
   </body>
</html>
<?php
   }
   else
   {
   	header("location: my-account/index.php");
   }
   ?>