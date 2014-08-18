<?php
	/////////////////////////////////////////////////////////////
	//                    Version 1.0.0                        //
	//                   Author: Tim Hinz                      //
	/////////////////////////////////////////////////////////////
	
	if(!(strpos($_SERVER['PHP_SELF'],'installer')))
	{
		if(!(file_exists("installer/lock.lock") || file_exists("../installer/lock.lock")))
			header("location:installer");
	}
	
	//VARIABLES FOR BLOG SETTINGS ~ LEAVE UNTOUCHED UNLESS YOU KNOW WHAT YOU'RE DOING
	$facebook = "http://facebook.com";
	$twitter = "http://twitter.com";
	$youtube = "http://youtube.com";
	$email = "webmaster@tinyblog.org";
	
	$theme = "default";
	$blogfavicon = "themes/$theme/imgs/favicon.ico";
	$blogtitle = "TinyBlog - Simply Blogging";
	$blogdescription = "";
	
	function limitwords($string,$max,$trail='') 
	{ 
		$max--; 
		$tmp = ''; 
		$string = trim($string); 
		$word = explode(" ", $string); 
		$total_words = count($word); 
		if ($total_words > $max) { 
			for ($i = 0; $i <= $max; $i++) { 
				if ($i == $max) { 
					$tmp .= $word[$max].$trail;  
				} else { 
					$tmp .= $word[$i]." "; 
				} 
			} 
		} else { 
			$tmp = $string; 
		} 
		return $tmp; 
	} 
	
