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

  	if (mysqli_num_rows($res_u) < 1) {
  	  $school_error = 'School is not in database - Please Contact the Registrar Office'; 	
  	}else if(mysqli_num_rows($res_e) < 1){
  	  $code_error = 'course is not in database - Please contact the Registrar Office';
      }else{
           
           echo 'entry is in database';
        while($row = $res_u->fetch_row()){
printf("%s ($s)\n", $row[0]);
}
      
      
           exit(); 	
         }
  	
  }
?>
