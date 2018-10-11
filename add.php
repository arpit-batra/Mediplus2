<?php 
	require "connect.inc.php";
	//$bus  = $_GET["bus"];
	//echo $bus;
	$query1 = "select d_name,state.s_id from district,state where state.s_id=district.s_id";
	$query2 = "select s_name from state";
	if(($query_run1 = mysqli_query($mysqli,$query1))&&($query_run2 = mysqli_query($mysqli,$query2))){
			//echo $query_run[0];
			/*while($row = mysql_fetch_assoc($query_run)){
				$ename = $row['ENAME'];
				$job = $row['JOB'];
				echo '<br>'.$ename.' works as a '.$job.'<br>';
			}*/
			$s_name = array();
			$d_name = array();
			$s_id = array();
			while($row = mysqli_fetch_array($query_run1)){
				array_push($d_name, $row["d_name"]);
				array_push($s_id, $row["s_id"]);
			}

			while($row = mysqli_fetch_array($query_run2)){
				array_push($s_name, $row["s_name"]);
			}

			//echo $makes[2];
			echo json_encode(array($s_name,$d_name,$s_id));
		}
			else{
				echo "unsuccesful";
			}

 ?>