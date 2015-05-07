function vpb_users_registration() 
{
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var uname = $("#uname").val();
	var contact = $("#contact").val();
	var Class = $("#class").val();
	var userid = $("#userid").val();
	var vpb_email = $("#remail").val();
	var vpb_passwd = $("#rpasswd").val();
	
	if(uname == "")
	{
		$("#signup_status").html('<div class="info">Please enter your full name in the required field to proceed.</div>');
		$("#uname").focus();
	}
	else if(contact == "")
	{
		$("#signup_status").html('<div class="info">Please enter your contact number to go.</div>');
		$("#contact").focus();
	}
	else if(Class == "")
	{
		$("#signup_status").html('<div class="info">Please enter your Class to go.</div>');
		$("#class").focus();
	}
	else if(userid == "")
	{
		$("#signup_status").html('<div class="info">Please enter your desired team name to go.</div>');
		$("#userid").focus();
	}
	else if(vpb_email == "")
	{
		$("#signup_status").html('<div class="info">Please enter your email address to proceed.</div>');
		$("#remail").focus();
	}
	else if(reg.test(vpb_email) == false)
	{
		$("#signup_status").html('<div class="info">Please enter a valid email address to proceed.</div>');
		$("#remail").focus();
	}
	else if(vpb_passwd == "")
	{
		$("#signup_status").html('<div class="info">Please enter your desired password to go.</div>');
		$("#rpasswd").focus();
	}
	
	else
	{
		
		var dataString = 'uname='+ uname + '&remail=' + vpb_email + '&rpasswd=' + vpb_passwd + '&page=users_registration' + '&userid=' + userid + '&class=' + Class + '&contact=' + contact;
		
		$.ajax({
			type: "POST",
			url: "vpb_save_details.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#signup_status").html('<img width="48px" height="48px"  src="../images/loading.gif" />');
			},
			success: function(response)
			{
				if (response == '1') 
				{
					$("#signup_status").html('');
					location.assign('../fantasyhome.php');
					
				}
				else
				{
				
					$("#signup_status").fadeIn(1000).html(response);
				}
			}
		});
	}
}

function vpb_users_login() 
{

	var vpb_email = $("#email").val();
	var vpb_passwd = $("#passwd").val();
	
	if(vpb_email == "")
	{
		$("#login_status").html('<div class="info">Please enter your account email address to proceed.</div>');
		$("#email").focus();
	}
	else if(vpb_passwd == "")
	{
		$("#login_status").html('<div class="info">Please enter your account password to go.</div>');
		$("#passwd").focus();
	}
	else
	{
		var dataString = 'email=' + vpb_email + '&passwd=' + vpb_passwd + '&page=users_login';
		$.ajax({
			type: "POST",
			url: "vpb_save_details.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#login_status").html('<img width="48px" height="48px"  src="../images/loading.gif" /><br><br>');
				
			},
			
			success: function(response)
			{
			
				
				if (response == 1) 
				{
					$("#login_status").html('');
					location.assign("../fantasyhome.php");
				}
				else
				{
					$("#login_status").fadeIn(1000).html(response);
					
				}
			}
		});
	}
}
