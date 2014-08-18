<?php require_once('bridge.php'); ?>
<html>
	<head>
		<title><?php echo $blogtitle ?></title>
		<link rel="icon" type="image/x-icon" href="<?php echo $blogfavicon ?>">
		<link rel="stylesheet" href="themes\<?php echo $theme; ?>\css\main.css">
		<link rel="stylesheet" href="themes\<?php echo $theme; ?>\css\slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="themes\<?php echo $theme; ?>\css\slidermain.css" type="text/css" media="screen" />
	</head>
	
	<body>
		<div class="topbar">
			<?php include("themes/$theme/header.php"); ?>
		</div>
			
		<div class="wrapper">
			<?php include("themes/$theme/wrapper.php"); ?>
			<?php include("themes/$theme/postbit.php"); ?>
			<?php include("themes/$theme/footer.php"); ?>
		</div>
	</body>
</html>