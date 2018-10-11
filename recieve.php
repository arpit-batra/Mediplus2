<?php
	require "connect.inc.php"; 
	$data = json_decode(file_get_contents("php://input"));
	echo $data->angular_var1;
	




//'".$contact_no2."'
  //   $query = "select c_name from country WHERE EMPNO = '".$data->angular_var."'";
  //   if($query_run = mysql_query($query)){
		// 	$makes = array();
		// 	while($row = mysql_fetch_array($query_run)){
		// 		array_push($makes, $row["ENAME"]);
		// 	}
		// 	echo json_encode($makes);
		// }
		// 	else{
		// 		echo "unsuccesful";
		// 	}
	//require "closedb.php";
 ?>