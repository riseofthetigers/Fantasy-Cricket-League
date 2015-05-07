<?php

	include "dbconfig.php";
	error_reporting(E_ERROR);
	session_start();
	ob_start();
	$user_id = trim($_SESSION["VALID_USER_ID"]);
	if(isset($_SESSION["VALID_USER_ID"]) && $user_id=='admin')
	{
function team($abbr)
{
	global $con;
	$result=mysqli_query($con,"SELECT * from teamnames Where abbr='$abbr'") OR die(mysqli_error($con));
	$row1=mysqli_fetch_array($result);
	return $row1['name'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Updation</title>
	<style type="text/css">
	.left{
		width:45%;
		float:left;
		overflow: auto;
		border:1px solid black;
	}
	.right{
		width:54%;
		float:left;
		overflow: auto;
		border:1px solid black;
	}
	input {
	    box-sizing: border-box;
	    width: 5em;
	    margin-left: auto;
	    margin-right:auto;
	}
	th{
		white-space: nowrap;
	}
	
	</style>
	<script>
function load(str)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    expandread();
    }
  }
xmlhttp.open("GET","update_form.php?fixid="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<form action="update.php" method="post" name="theform">
<?php
	echo '<select name="fix" onchange="load(this.value)"><option value="0">SELECT Fixture</option>';
	$result=mysqli_query($con,"SELECT * from fixtures where updated=false AND actual_time<>0 Order by actual_time");
	while($row=mysqli_fetch_array($result))
		echo '<option value="'.$row["fixture_id"].'">'.$row["fixture_id"].' - '.team($row["team1"]).' - VS - '.team($row["team2"]).' ON '.date("F d, Y",$row["actual_time"]).'</option>';
	echo '</select>';
?>
<br/><br/>
<div id="myDiv">
	
</div>
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
	 	   	if(!evans[i].checked)
	 	   		bool=false;
		}
		if(bool == true)
			document.getElementById('button').style.display="block";
	}
	function call ( m ) {
		if(document.getElementById("match"+m).checked)
		{
			var evans = document.getElementsByClassName('play'+m);
			for(var i = 0; i < evans.length; i++) {
		 	   evans[i].style.visibility="visible";
			}
			callbat(m);
			callbwl(m);
		}
		else
		{
			var evans = document.getElementsByClassName('play'+m);
			for(var i = 0; i < evans.length; i++) {
		 	   evans[i].style.visibility="hidden";
			}
			var evans = document.getElementsByClassName('playbat'+m);
			for(var i = 0; i < evans.length; i++) {
		 	   evans[i].style.visibility="hidden";
			}
			var evans = document.getElementsByClassName('playbwl'+m);
			for(var i = 0; i < evans.length; i++) {
		 	   evans[i].style.visibility="hidden";
			}
		}
	}
	function callbat ( m ) {
		if(document.getElementById("bat"+m).checked)
		{
			var evans = document.getElementsByClassName('playbat'+m);
			for(var i = 0; i < evans.length; i++) {
		 	   evans[i].style.visibility="visible";
			}
		}
		else
		{
			var evans = document.getElementsByClassName('playbat'+m);
			for(var i = 0; i < evans.length; i++) {
		 	   evans[i].style.visibility="hidden";
			}
		}
	}
	function callbwl ( m ) {
		if(document.getElementById("bwl"+m).checked)
		{
			var evans = document.getElementsByClassName('playbwl'+m);
			for(var i = 0; i < evans.length; i++) {
		 	   evans[i].style.visibility="visible";
			}
		}
		else
		{
			var evans = document.getElementsByClassName('playbwl'+m);
			for(var i = 0; i < evans.length; i++) {
		 	   evans[i].style.visibility="hidden";
			}
		}
	}
</script>
<script type="text/javascript">
 function expand(textbox) {
    if (!textbox.startW) { textbox.startW = textbox.offsetWidth; }  
    var style = textbox.style;
    style.width = 0;
    var desiredW = textbox.scrollWidth;
    desiredW += textbox.offsetHeight;   
    style.width = Math.max(desiredW, textbox.startW) + 'px';
}
  function expandread(textbox) {   
    var evans = document.getElementsByClassName('read');
    for(var i = 0; i < evans.length; i++) {
 	   evans[i].style.width = ((evans[i].value.length + 0.5) * 8) + 'px';
	}
}
 </script>
</body>
</html>
<?php
	}
	else
	{
	header("location: my-account/index.php");
	}
	?>