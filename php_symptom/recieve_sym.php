<?php 
	require "connect.inc.php";
	$data = json_decode(file_get_contents("php://input"));

	$s1 = $data->angular_var1;
	$s2 = $data->angular_var2;
	$s3 = $data->angular_var3;
	$s4 = $data->angular_var4;
	$s5 = $data->angular_var5;

	$disease = array();
	$medicine = array();


	if($s1!='none' && $s2=='none' && $s3=='none' && $s4=='none' && $s5=='none')
{
	$query="select name,medicines from disease where (symptom1='".$s1."' or symptom2='".$s1."' or symptom3='".$s1."' or symptom4='".$s1."' or symptom5='".$s1."')";
}

if($s1!='none' && $s2!='none' && $s3=='none' && $s4=='none' && $s5=='none')
{
	$query="select name,medicines from disease where (symptom1='".$s1."' or symptom2='".$s1."' or symptom3='".$s1."' or symptom4='".$s1."' or symptom5='".$s1."') and (symptom1='".$s2."' or symptom2='".$s2."' or symptom3='".$s2."' or symptom4='".$s2."' or symptom5='".$s2."')";
}

if($s1!='none' && $s2!='none' && $s3!='none' && $s4=='none' && $s5=='none')
{
	$query="select name,medicines from disease where (symptom1='".$s1."' or symptom2='".$s1."' or symptom3='".$s1."' or symptom4='".$s1."' or symptom5='".$s1."') and (symptom1='".$s2."' or symptom2='".$s2."' or symptom3='".$s2."' or symptom4='".$s2."' or symptom5='".$s2."') and (symptom1='".$s3."' or symptom2='".$s3."' or symptom3='".$s3."' or symptom4='".$s3."' or symptom5='".$s3."')";
}

if($s1!='none' && $s2!='none' && $s3!='none' && $s4!='none' && $s5=='none')
{
	$query="select name,medicines from disease where (symptom1='".$s1."' or symptom2='".$s1."' or symptom3='".$s1."' or symptom4='".$s1."' or symptom5='".$s1."') and (symptom1='".$s2."' or symptom2='".$s2."' or symptom3='".$s2."' or symptom4='".$s2."' or symptom5='".$s2."') and (symptom1='".$s3."' or symptom2='".$s3."' or symptom3='".$s3."' or symptom4='".$s3."' or symptom5='".$s3."') and (symptom1='".$s4."' or symptom2='".$s4."' or symptom3='".$s4."' or symptom4='".$s4."' or symptom5='".$s4."')";
}

if($s1!='none' && $s2!='none' && $s3!='none' && $s4!='none' && $s5!='none')
{
	$query="select name,medicines from disease where (symptom1='".$s1."' or symptom2='".$s1."' or symptom3='".$s1."' or symptom4='".$s1."' or symptom5='".$s1."') and (symptom1='".$s2."' or symptom2='".$s2."' or symptom3='".$s2."' or symptom4='".$s2."' or symptom5='".$s2."') and (symptom1='".$s3."' or symptom2='".$s3."' or symptom3='".$s3."' or symptom4='".$s3."' or symptom5='".$s3."') and (symptom1='".$s4."' or symptom2='".$s4."' or symptom3='".$s4."' or symptom4='".$s4."' or symptom5='".$s4."') and (symptom1='".$s5."' or symptom2='".$s5."' or symptom3='".$s5."' or symptom4='".$s5."' or symptom5='".$s5."')";
}


	if($query_run1 = mysqli_query($mysqli,$query)){

			while($row = mysqli_fetch_array($query_run1)){
				array_push($disease, $row["name"]);
				array_push($medicine, $row["medicines"]);
			}
			echo json_encode(array($disease,$medicine));
		}
			else{
				echo "unsuccesful";
			}

	//echo $var1;
 ?>