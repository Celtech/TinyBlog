<?php
	include('../bridge.php');
	$myemail = $_POST['email']; 
	$mypassword = $_POST['password']; 
	$myusername = '';

	$myemail = stripslashes($myemail);
	$mypassword = stripslashes($mypassword);
	$myemail = mysql_real_escape_string($myemail);
	$mypassword = mysql_real_escape_string($mypassword);
	
	$encrypt_password = md5($mypassword);
	
	$sql="SELECT * FROM `users` WHERE EMAIL='$myemail' and PASSWORD='$encrypt_password'";
	$result=mysql_query($sql);
	
	while($row = mysql_fetch_array($result))
	{
		$myusername = $row['USERNAME'];
	}
	
	$count=mysql_num_rows($result);

	if($count==1){
		session_start();
		$_SESSION['lulceltech'] = strtoupper($myusername);
		header("location:index.php");
	}
	else {
		echo "Wrong Username or Password";
	}
?>