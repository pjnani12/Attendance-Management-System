<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("Config.php");
$stid=$_POST['stid'];
$subj=$_POST['subjid'];
$atten=$_POST['present'];
$date = date('Y-m-d H:i:s');
$query=mysql_query("Insert into tbl_attendence (studentRollNumber,subjectId,attendence,Date)VALUES('$stid','$subj','$atten','$date')");
if(!$query)
{
	echo mysql_error();
	}





header("Location:AttendenceForm.php");
?>