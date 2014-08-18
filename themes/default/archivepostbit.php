<div class="postbit">
<?php
	$id = $_GET['id'];
	
	if($id == '')
	{
		$highest_id = mysql_result(mysql_query("SELECT MAX(ID) FROM blogs"), 0);
		$result = mysql_query("SELECT * FROM blogs");
		while($row = mysql_fetch_array($result))
		{	
			echo('<p><span class="archivetitle">' . $row['TITLE'] . '</span><br>');
			echo('<span class="date">' . $row['DATE'] . '</span><br>');
			echo(limitwords(strip_tags($row['TEXT']),10,' <a class="bloglink" href="archive.php?id=' . $row['ID'] . '">Read More</a>') . "<br></p>");
			if($highest_id != $row['ID'])echo('<hr class="divide" noshade color="#000">');	
		}	
	}else{
		$result = mysql_query("SELECT * FROM blogs WHERE ID='$id'");
		while($row = mysql_fetch_array($result))
		{	
			echo('<p><span class="title">' . $row['TITLE'] . '</span><br>');
			echo('<span class="date">' . $row['DATE'] . '</span><br>'); 
			echo($row['TEXT'] . '<br><a href="archive.php" class="bloglink">Return to archive...</a></p>');
		}	
	}
?>
</div>