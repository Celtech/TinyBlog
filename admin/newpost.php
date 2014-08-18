<?php
	session_start();
	if(!$_SESSION['lulceltech'])
	header("location:acplogin.php");
?>
<html>
	<head>
		<script type="text/javascript" src="core/ckeditor.js"></script>
		<link rel="stylesheet" href="theme\css\admincp.css">
		<script src="js/jquery.js"></script>
		<script>
			$(function(){
			  $('.header').click(function(){
				$(this).closest('.container').toggleClass('collapsed');
			  });
			  
			});
			</script>
	</head>
	
	<body>
		<?php include("theme/leftnav.php"); ?>
	
		<div class="wrapper">
			<center>
				<form method="post" action="../api.php">
					<input type="text" placeholder="Title..." class="title" name="title">
					<textarea  class="ckeditor" placeholder="Post Content...." name="text"></textarea>
					<input type="Submit" value="Submit Post" class="post">
				</form>
			</center>
		</div>
	</body>
</html>