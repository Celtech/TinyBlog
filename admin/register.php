<?php
	session_start();
	include('bridge.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$date = date("Y-m-d");
	mysql_query("INSERT INTO `blog`.`users` (`ID`, `USERNAME`, `PASSWORD`, `EMAIL`, `DATE`, `RANK`) VALUES (NULL, '$username', '$password', '$email', '$date', '1');");
	header("location: index.php?remarks=success");
	mysql_close($con);
?>