<html>
	<head>
		<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
		<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
		<link rel="stylesheet" href="theme\css\admincp.css">
		<link rel="stylesheet" href="theme\css\adminlogin.css">
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
	
		<div class="loginwrapper">
			<div id="login">
				<h1>Log in</h1>
				<center>
					<form method="post" action="login.php">
						<input type="email" name="email" placeholder="Email" />
						<input type="password" name="password" placeholder="Password" />
						<input type="submit" value="Log in" />
					</form>
				</center>
			</div>
		</div>
	</body>
</html>