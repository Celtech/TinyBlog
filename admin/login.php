<?php
	include('../bridge.php');
	$myemail=$_POST['email']; 
	$mypassword=$_POST['password']; 
	$myusername = '';

	$myemail = stripslashes($myemail);
	$mypassword = stripslashes($mypassword);
	$myemail = mysql_real_escape_string($myemail);
	$mypassword = mysql_real_escape_string($mypassword);
	$sql="SELECT * FROM `blog`.`users` WHERE EMAIL='$myemail' and PASSWORD='$mypassword'";
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