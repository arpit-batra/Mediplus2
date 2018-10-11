<?php 
	require "connect.inc.php";
	$query1 = "select name from symptoms";

	if($query_run1 = mysqli_query($mysqli,$query1)){

			$s_name = array();
			while($row = mysqli_fetch_array($query_run1)){
				array_push($s_name,$row["name"]);
			}
			echo json_encode($s_name);
		}
			else{
				echo "unsuccesful";
			}
 ?>