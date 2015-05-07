<?php
error_reporting(E_ERROR);
session_start();
include "../dbconfig.php";


if(isset($_POST["page"]) && !empty($_POST["page"]))
{
	//Sign-up Page Starts here
	if($_POST["page"] == "users_registration")
	{
		$uname = trim(strip_tags($_POST['uname']));
		$contact = trim(strip_tags($_POST['contact']));
		$class = trim(strip_tags($_POST['class']));
		$userid = trim(strip_tags($_POST['userid']));
		$user_email = trim(strip_tags($_POST['remail']));
		$user_password = trim(strip_tags($_POST['rpasswd']));
		$encrypted_md5_password = md5($user_password);
		
		$check_for_duplicates = mysqli_query($con,"select * from `users` where `email` = '".mysqli_real_escape_string($con,$user_email)."'");
		$check_for_duplicates2 = mysqli_query($con,"select * from `users` where `user_id` = '".mysqli_real_escape_string($con,$userid)."'");
		
		if($uname == "" || $user_email == "" || $user_password == "")
		{
			echo '<br><div class="info">Sorry, all fields are required to create a new account. Thanks.</div><br>';
		}
		elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $user_email))
		{
			echo '<div class="info">Sorry, Your email address is invalid.</div>';
		}
		else if(mysqli_num_rows($check_for_duplicates) > 0)
		{
			echo '<div class="info">Sorry, your email address already exist in our database.</div>';
		}
		else if(mysqli_num_rows($check_for_duplicates2) > 0)
		{
			echo '<div class="info">Sorry, your team name address already exist in our database.</div>';
		}
		else
		{
			if(mysqli_query($con,"insert into users(name,contact,class,user_id,email,password) values('".mysqli_real_escape_string($con,$uname)."', '".mysqli_real_escape_string($con,$contact)."','".mysqli_real_escape_string($con,$class)."','".mysqli_real_escape_string($con,$userid)."', '".mysqli_real_escape_string($con,$user_email)."', '".mysqli_real_escape_string($con,$encrypted_md5_password)."')")or die(mysqli_error($con)))
			{
				$_SESSION["VALID_USER_ID"] = $userid;
				$_SESSION["USER_FULLNAME"] = strip_tags($uname);
				echo 1;
				
			}
			else
			{
				echo '<div class="info">Sorry, your account could not be created at the moment.</div>';
			}
		}
	}
	//Sign-up Page Ends here
	
	
	//Login Page Starts here
	elseif($_POST["page"] == "users_login") 
	{
		$user_email = trim(strip_tags($_POST['email']));
		$user_password = trim(strip_tags($_POST['passwd']));
		$encrypted_md5_password = md5($user_password);
		
		$validate_user_information = mysqli_query($con,"select * from `users` where `email` = '".mysqli_real_escape_string($con,$user_email)."' and `password` = '".mysqli_real_escape_string($con,$encrypted_md5_password)."'");
		
		if(mysqli_num_rows($validate_user_information) == 1)
		{
			$get_user_information = mysqli_fetch_array($validate_user_information);
			$_SESSION["VALID_USER_ID"] =strip_tags($get_user_information["user_id"]);
			$_SESSION["USER_FULLNAME"] = strip_tags($get_user_information["name"]);
			echo 1;
		}
		else
		{
			echo '<div class="info">Invalid E-mail/Password</div>';
		}
	}
	//Login Page Ends here
}
?>