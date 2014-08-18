<?php
	session_start();
	if(!$_SESSION['lulceltech'])
	header("location:acplogin.php");
	include_once("../bridge.php");
	$id = $_GET['id'];
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
	
		<div class="wrapper">
			<center>
				<textarea style="width:800px; height:400px; margin-top:15px;" value="<?php if($id != "")echo file_get_contents("../themes/$theme/$id.php");?>"></textarea>
			</center>
		</div>
	</body>
</html>