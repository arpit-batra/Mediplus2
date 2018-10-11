<?php 
	require "connect.inc.php";
	$query1 = "select * from disease";

	$disease = array();
	$medicine = array();
	$severity = array();
	$commoness = array();
	$time_to_recover = array();
	$home_remedies = array();
	$symptom1 = array();
	$symptom2 = array();
	$symptom3 = array();
	$symptom4 = array();
	$symptom5 = array();

	if($query_run1 = mysqli_query($mysqli,$query1)){
			
			while($row = mysqli_fetch_array($query_run1)){
				array_push($disease, $row["name"]);
				array_push($medicine, $row["medicines"]);
				array_push($severity, $row["severity"]);
				array_push($commoness, $row["commoness"]);
				array_push($time_to_recover, $row["time_to_recover"]);
				array_push($home_remedies, $row["home_remedies"]);
				array_push($symptom1, $row["symptom1"]);
				array_push($symptom2, $row["symptom2"]);
				array_push($symptom3, $row["symptom3"]);
				array_push($symptom4, $row["symptom4"]);
				array_push($symptom5, $row["symptom5"]);
			}

			echo json_encode(array($disease,$medicine,$severity,$commoness,$time_to_recover,$home_remedies,$symptom1,$symptom2,$symptom3,$symptom4,$symptom5));
		}
			else{
				echo "unsuccesful";
			}
 ?>