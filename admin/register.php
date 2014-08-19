<?php
	session_start();
	include('bridge.php');
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$encrypt_password = md5($password);
	$email = $_POST['email'];
	$date = date("Y-m-d");
	mysql_query("INSERT INTO `blog`.`users` (`ID`, `USERNAME`, `PASSWORD`, `EMAIL`, `DATE`, `RANK`) VALUES (NULL, '$username', '$encrypt_password', '$email', '$date', '1');");
	header("location: index.php?remarks=success");
	mysql_close($con);
?>