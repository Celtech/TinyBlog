<?php
	session_start();
	if(!$_SESSION['lulceltech'])
	header("location:acplogin.php");
	require_once('../bridge.php');
?>
<html>
	<head>
		<script type="text/javascript" src="../core/ckeditor.js"></script>
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
	
		<div class="subtitlewrapper">
			<center>
				<div class="subtitle">Common Blog Controls</div>
				<input type="text" value="<?php echo $blogtitle ?>" class="title" name="title">
				<input type="text" value="<?php echo $blogfavicon ?>" class="title" name="title">
				<input type="text" value="<?php echo $blogdescription ?>" class="title" name="title">
			</center>
		</div>
	</body>
</html>