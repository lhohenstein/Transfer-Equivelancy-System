<?php 
  $db = mysqli_connect('localhost', 'root', '', 'csv_db');
  $username = "";
  $coursecode = "";
  if (isset($_POST['register'])) {
  	$schoolname = $_POST['schoolname'];
  	$coursecode = $_POST['coursecode'];
  	$credit = $_POST['credits'];

  	$sql_u = "SELECT TRANSFER_SCHOOL_NAME FROM tbl_name WHERE TRANSFER_SCHOOL_NAME='$schoolname'";
  	$sql_e = "SELECT TRANSFER_SCHOOL_COURSE_CODE FROM tbl_name WHERE TRANSFER_SCHOOL_COURSE_CODE=' $coursecode'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $school_error = 'School is in database'; 	
  	}if(mysqli_num_rows($res_e) > 0){
  	  $code_error = 'course is in database';
      }else{
           
           echo 'Saved!';
           exit(); 	
         }
  	
  }
?>