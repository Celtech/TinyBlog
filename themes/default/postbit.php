<div class="postbit">
	<p>
		<?php
			$highest_id = mysql_result(mysql_query("SELECT MAX(ID) FROM blogs"), 0);
			$result = mysql_query("SELECT * FROM blogs WHERE ID='$highest_id'");
			if(mysql_num_rows($result) > 0){ 
				while($row = mysql_fetch_array($result))
				{	
					echo('<span class="title">' . $row['TITLE'] . '</span><br>');
					echo('<span class="date">' . $row['DATE'] . '</span><br>'); 
					echo($row['TEXT']);
				}	
			}else{
				echo 'No posts have been made.';
			}
		?>
	</p>
</div>

<div class="postbit">
	<p>
		<?php
			$highest_id2 = mysql_result(mysql_query("SELECT MAX(ID) FROM blogs WHERE ID < (SELECT MAX(ID) FROM blogs)"), 0);
			$result = mysql_query("SELECT * FROM blogs WHERE ID='$highest_id2'");
			if(mysql_num_rows($result) > 0){ 
				while($row = mysql_fetch_array($result))
				{	
					echo('<hr class="divide" noshade color="#000"><span class="title">' . $row['TITLE'] . '</span><br>');
					echo('<span class="date">' . $row['DATE'] . '</span><br>');
					echo($row['TEXT']);
				}	
			}
		?>
	</p>
</div>