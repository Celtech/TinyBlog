<div class="postbit">
	<?php
		$query = $_GET['query']; 
		 
		$min_length = 3;

		 
		if(strlen($query) >= $min_length){ 
			 
			$query = htmlspecialchars($query); 
			 
			$query = mysql_real_escape_string($query);
			 
			$raw_results = mysql_query("SELECT * FROM blogs
				WHERE (`TITLE` LIKE '%".$query."%') OR (`TEXT` LIKE '%".$query."%')") or die(mysql_error());
			 
			if(mysql_num_rows($raw_results) > 0){ 
				 
				while($results = mysql_fetch_array($raw_results)){
				 
					echo "<p><h3>".$results['TITLE']."</h3>".$results['TEXT']."</p>";
				}
				 
			}
			else{
				echo "No results";
			}
			 
		}
		else{ 
			echo "Minimum length is ".$min_length;
		}
	?>
</div>