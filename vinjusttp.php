<?php
    include "dbconfig.php";
    error_reporting(E_ERROR);
    session_start();
    ob_start();
    function team($abbr)
    {
        global $con;
        $result=mysqli_query($con,"SELECT * from teamnames Where abbr='$abbr'") OR die(mysqli_error($con));
        $row1=mysqli_fetch_array($result);
        return $row1['name'];
    }
    $user_id = trim($_SESSION["VALID_USER_ID"]);
    if(isset($_SESSION["VALID_USER_ID"]) && $user_id=='admin')
    {
        $fixid=17;
        $result=mysqli_query($con,"SELECT * FROM fixtures where fixture_id='$fixid'") OR die(mysqli_error($con));
        $row=mysqli_fetch_array($result);
    ?>
<style type="text/css">
    input{
        box-sizing: border-box;
        width: 9em;
    }
</style>
<form action="update_teamdata.php" method="post" name="theform">
    <p>The foolowing form is for the match between <?php echo team($row['team1']); ?> AND <?php echo team($row['team2']); ?> on <?php echo date("M d Y",$row['actual_time']); ?> </p>
    <p>Maximum overs in an innings <input type="text" value="8" id="maxovers" /> (Change this part only if the match was not 8 overs per side)</p>
    <p>Fill the next part as Team A score 45-8 in 4.5 overs. If Team A has scored 45 runs at expense of 29 balls. Dont forget the <big>'-'</big> in score and the <big>'.'</big> in overs. So exactly four overs will be written as 4.0 and 4 overs and five balls will be written as 4.5 overs. If 45 runs is scored with no wicket fell score will be written as 45-0 else if 10 wickets fell as 45-10</p>
    <p>Team <span id="team1"><?php echo team($row['team1']); ?> </span> scored <input class="scan" onkeyup="calculatenrr()" type="text" name="team1score" id="team1score" value=<?php if(strcmp($row["team1score"],'') != 0)echo '"'.$row["team1score"].'"'; else echo '"0-0"'; ?> /> in <input class="scan" onkeyup="calculatenrr()" type="text" name="team1over" id="team1over" value=<?php if(strcmp($row["team1over"],'')!=0)echo '"'.$row["team1over"].'"'; else echo '"0.0"'; ?> /> overs </p>
    <p>Team <span id="team2"><?php echo team($row['team2']); ?> </span> scored <input class="scan" onkeyup="calculatenrr()" type="text" name="team2score" id="team2score" value=<?php if(strcmp($row["team2score"],'') != 0)echo '"'.$row["team2score"].'"'; else echo '"0-0"'; ?> /> in <input class="scan" onkeyup="calculatenrr()" type="text" name="team2over" id="team2over" value=<?php if(strcmp($row["team2over"],'')!=0)echo '"'.$row["team2over"].'"'; else echo '"0.0"'; ?> /> overs </p>
    <div id="myDiv"></div>
    <p>So NRR for this match of <?php echo team($row['team1']); ?> = <input class="scan" onkeyup="calculatenrr()" type="text" name="nrr1" id="nrr1" value="" readonly /> </p>
    <p>So NRR for this match of <?php echo team($row['team2']); ?> = <input class="scan" onkeyup="calculatenrr()" type="text" name="nrr2" id="nrr2" value="" readonly /> </p>
</form>
<button onclick="check()" style="display:none;" id="button">Submit</button>
<script type="text/javascript">
    function check () { 
        var temp = confirm("Please Review Your Contents Again !!! Changes later on is impossible\nIf you want to Continue,Press OK");
        if(temp==true)
        {
            document.theform.submit();
        }
    }
    function scanner () {
        var bool = true;
        var evans = document.getElementsByClassName('scan');
        for(var i = 0; i < evans.length; i++) {
            if(evans[i].value.length === 0)
                bool=false;
        }
        if(bool == true)
            document.getElementById('button').style.display="block";
    }
    function calculatenrr () {
        var team1score = document.getElementById('team1score').value;
        var team1over = document.getElementById('team1over').value;
        var team2score = document.getElementById('team2score').value;
        var team2over = document.getElementById('team2over').value;
        var maxovers = document.getElementById('maxovers').value;
        var temp = team1over.split(".");
        var team1bowl = (parseInt(temp[0])*6)+parseInt(temp[1]);
        temp = team2over.split(".");
        var team2bowl = (parseInt(temp[0])*6)+parseInt(temp[1]);
        var team1 = document.getElementById('team1').innerHTML;
        var team2 = document.getElementById('team2').innerHTML;
        temp = team1score.split("-");
        var team1run = parseInt(temp[0]);
        var team1wkt = parseInt(temp[1]);
        temp = team2score.split("-");
        var team2run = parseInt(temp[0]);
        var team2wkt = parseInt(temp[1]);
        if(team1wkt === 10)
            team1bowl = parseInt(maxovers) * 6;
        if(team2wkt === 10)
            team2bowl = parseInt(maxovers) * 6;
        if(team1run>team2run)
            document.getElementById("myDiv").innerHTML= team1 + " wins over " + team2;
        else if(team1run<team2run)
                document.getElementById("myDiv").innerHTML= team2 + " wins over " + team1;
              else
                document.getElementById("myDiv").innerHTML= team2 + " is in tie with " + team1;
        var team1rr,team2rr;
        if(team1bowl !== 0)
            team1rr = team1run * 6.0/team1bowl;
        if(team2bowl !== 0)
            team2rr = team2run * 6.0/team2bowl;
        var team1nrr = team1rr - team2rr;
        var team2nrr = team2rr - team1rr;
        if(!isNaN(team1nrr))
            document.getElementById("nrr1").value=team1nrr;
        if(!isNaN(team2nrr))
            document.getElementById("nrr2").value=team2nrr;
        scanner();
    }
</script>
<?php
    }
    else
    {
        header("location: my-account/index.php");
    }
    ?>