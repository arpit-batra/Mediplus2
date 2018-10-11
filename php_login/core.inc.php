<?php 
	ob_start();
	session_start();
	$current_file = $_SERVER['SCRIPT_NAME'];
	//echo $current_file;
	$http_referer = $_SERVER['HTTP_REFERER'];

	
	function logged_in(){
		if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
			return true;
		else
			return false;
	}
 ?>