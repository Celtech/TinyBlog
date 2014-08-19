<?php
	if(file_exists("lock.lock"))
		die("Error: TinyBlog Already Installed! If this is a mistake please navigate to the installer folder and delete the lock file.");
	require_once("../bridge.php");
	$installer = $_GET['installer'];
	$sql_user = $_POST['user'];
	$sql_pass = $_POST['pass'];
	$sql_serv = $_POST['serv'];
	$sql_data = $_POST['data'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$date = date("Y-m-d");
?>

<html>
	<head>
		<title>TinyBlog Installer</title>
		<link rel="icon" type="image/x-icon" href="imgs/favicon.ico">
		<link rel="stylesheet" href="css\installer.css">
	</head>
	
	<body>
		<div class="wrapper">
			
			<div class="left">
				<ul>
					<li><a>Welcome to TinyBlog</a></li>
					<li><a>Database Settings</a></li>
					<li><a>Database Installer</a></li>
					<li><a>Admin Creation</a></li>
					<li><a>Completed Setup</a></li>
				</ul>
			</div>
			<?php
				if($installer == "" || $installer == "0")
				{
					echo('
					<span class="welcome">Welcome to TinyBlog!</span>
					<div class="intro">TinyBlog is a software set around simply blogging. With competitors like Wordpress and blogger, TinyBlog exists for the blogs who want simplicity,
					not to drown in so many features you can&#39t even find your posts. That&#39s where TinyBlog comes in. It&#39s a lightweight software that&#39s open source to give you the best
					performance and security possible while still enjoying a sleek clean look. With two license options available(Free, and Donor) TinyBlog is truly a blogging suite for
					any user who wants to get into blogging with just a few clicks. 
					<a href="index.php?installer=1"><input type="submit" class="button" value="Next"></a>
					');
				}else if($installer == "1"){
					echo('
					<span class="welcome">Database Settings</span>
					<div class="intro">
					<form method="post" action="index.php?installer=2">
					<input type="text" class="text" name="serv" value="localhost" placeholder="SQL Server"><br>
					<input type="text" class="text" name="user" value="" placeholder="SQL Username"><br>
					<input type="password" class="text" name="pass" value="" placeholder="SQL Password"><br>
					<input type="text" class="text" value="" name="data" placeholder="SQL Database"><br>
					<input type="submit" class="button" value="Next">
					</form>
					</div>
					');
				}else if($installer == "2"){
					$data = file_get_contents("../bridge.php");
					file_put_contents("../bridge.php",$data . '
					$mysql_hostname = "' . $sql_serv .'";
					$mysql_user = "' . $sql_user.'";
					$mysql_password = "' . $sql_pass .'";
					$mysql_database = "' . $sql_data .'"; 
					$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database Or Tiny blog has not been installed");
					mysql_select_db($mysql_database, $bd) or die("Could not select database Or Tiny blog has not been installed");
					?>');
					
					echo('
					<span class="welcome">Database Installer</span>
					<div class="intro">
					');
					
					mysql_connect($sql_serv,$sql_user, $sql_pass) or die(mysql_error()); 
					mysql_select_db($sql_data) or die(mysql_error()); 
					mysql_query("CREATE TABLE blogs (TITLE VARCHAR(9999), DATE DATE, TEXT VARCHAR(9999))"); 
					Print "blogs table has been created<br>"; 
					mysql_query("ALTER TABLE  `blogs` ADD  `ID` INT NOT NULL AUTO_INCREMENT FIRST , ADD PRIMARY KEY (  `ID` )");
					Print "Populating blogs<br>"; 
					mysql_query("CREATE TABLE users (USERNAME VARCHAR(255), DATE DATE, PASSWORD VARCHAR(255), EMAIL VARCHAR(255),RANK INT)"); 
					Print "users table has been created<br>"; 
					mysql_query("ALTER TABLE  `users` ADD  `ID` INT NOT NULL AUTO_INCREMENT FIRST , ADD PRIMARY KEY (  `ID` )");
					Print "Populating users<br>"; 
					
					echo('
					<a href="index.php?installer=3"><input class="button" type="submit" value="Next"></a>
					</div>
					');
				}else if($installer == "3"){
					echo('
						<span class="welcome">Admin Creation</span>
						<div class="intro">
						<form method="post" action="index.php?installer=4">
						<input type="email" class="text" name="email" placeholder="Email"><br>
						<input type="text" class="text" value="" name="username" placeholder="Username"><br>
						<input type="password" class="text" value="" name="password" placeholder="Password"><br>
						<input class="button" type="submit" value="Next">
						</form>
						</div>
					');
				}else if($installer == "4"){
					$enc_pass = md5($password);
					mysql_query("INSERT INTO `users` (`ID`, `USERNAME`, `PASSWORD`, `EMAIL`, `DATE`, `RANK`) VALUES (NULL, '$username', '$enc_pass', '$email', '$date', '1');");
					
					echo('
						<span class="welcome">Thank you for choosing TinyBlog!</span>
						<div class="intro">
						Your installation has successfully completed! We recommend deleting the install directory from TinyBlog for your security.
						<a href="../index.php"><input type="submit" class="button" value="Finish"></a>
						</div>
					');
					
					$ourFileName = "lock.lock";
					$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
					fclose($ourFileHandle);
				}
			?>
		</div>
	</body>
</html>