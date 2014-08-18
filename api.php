<?php
	include('bridge.php');
	$title=$_POST['title'];
	$date=date("Y-m-d");
	$text=$_POST['text'];
	mysql_query("INSERT INTO `blog`.`blogs` (`ID`, `TITLE`, `DATE`, `TEXT`) VALUES (NULL, '$title', '$date', '$text');");
	header("location: index.php?remarks=success");
?>