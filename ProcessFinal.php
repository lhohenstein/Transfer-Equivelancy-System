<?php 
  $db = mysqli_connect('localhost', 'root', '', 'schooldata');
  $schoolname = "";
  $coursecode = "";
  $grade="";
  $AuCc="";
  $ARgrade="";
  $genEd="";
  $schoolname1 = "";
  $coursecode1 = "";
  $grade1 = "";
  $AuCc1 = "";
  $ARgrade1="";
  $genEd1="";
  $creditTotal=0;
  if (isset($_POST['RegisterFinal'])) {
  	$schoolname = $_POST['schoolname'];
  	$coursecode = $_POST['coursecode'];
  	$credit = $_POST['credits'];
    $grade= $_POST['grade'];
  	$sql_u = "SELECT TRANSFER_SCHOOL_NAME FROM transferdata WHERE TRANSFER_SCHOOL_NAME='$schoolname'";
  	$sql_e = "SELECT TRANSFER_SCHOOL_COURSE_CODE FROM transferdata WHERE  TRANSFER_SCHOOL_COURSE_CODE = '$coursecode'" ;
	$sql_x = "SELECT ARCADIA_COURSE_CODE FROM transferdata WHERE TRANSFER_SCHOOL_COURSE_CODE = '$coursecode'";
  	$res_u = mysqli_query($db, $sql_u);
  	$res_e = mysqli_query($db, $sql_e);
	$res_x = mysqli_query($db, $sql_x);
    while ( $row=mysqli_fetch_row($res_x))
    {
    $AuCc =$row[0];
  }
    $sql_g = "SELECT MINIMUM_UNDERGRADUATE_TRANSFER_GRADE FROM audata WHERE  ARCADIA_COURSE_CODE = '$AuCc'";
    $sql_y = "SELECT GENERAL_EDUCATION FROM audata WHERE ARCADIA_COURSE_CODE = '$AuCc'";
    $res_g = mysqli_query($db, $sql_g);
    $res_y = mysqli_query($db, $sql_y);
while ( $row=mysqli_fetch_row($res_g))
    {
    $ARgrade =$row[0];
  }
  while ( $row=mysqli_fetch_row($res_y))
    {
    $genEd =$row[0];
  }
  echo "________________ COURSE 1 ________________";
//echo strcmp($grade, $ARgrade) ;
  	if (mysqli_num_rows($res_u) <1) {
  	  $school_error = 'School is not in database - Please Contact the Registrar Office';
      echo "$school_error"; 	
  	}
  	else if(mysqli_num_rows($res_e) <1){
  	  $code_error = 'course is not in database - Please contact the Registrar Office';
      echo "$code_error";
      }
     else if (strcmp($grade , $ARgrade) == '<1')
      {
        $grade_error = "You do not have a high enough grade  '$ARgrade'";
        echo "Grade is not accepted.";
      }
      else{
           $creditTotal+=$credit;
           //echo " You will receive $credit credits";
           
           echo "<br>";
           echo " Arcadia course code: $AuCc";
            echo "<br>";
            echo "<br>";
           echo " Requirements Fulfilled: $genEd"; 
           echo "<br>";
           echo "<br>";
           echo " Credit total = $creditTotal";	
           echo "<br>";
           echo "<br>";
         }
         echo "<br>";
    $schoolname1 = $_POST['schoolname1'];
  	$coursecode1 = $_POST['coursecode1'];
  	$credit1 = $_POST['credits1'];
    $grade1= $_POST['grade1'];
  	$sql_u1 = "SELECT TRANSFER_SCHOOL_NAME FROM transferdata WHERE TRANSFER_SCHOOL_NAME='$schoolname1'";
  	$sql_e1 = "SELECT TRANSFER_SCHOOL_COURSE_CODE FROM transferdata WHERE  TRANSFER_SCHOOL_COURSE_CODE = '$coursecode1'" ;
	$sql_x1 = "SELECT ARCADIA_COURSE_CODE FROM transferdata WHERE TRANSFER_SCHOOL_COURSE_CODE = '$coursecode1'";
  	$res_u1 = mysqli_query($db, $sql_u1);
  	$res_e1 = mysqli_query($db, $sql_e1);
	$res_x1 = mysqli_query($db, $sql_x1);
    while ( $row1=mysqli_fetch_row($res_x1))
    {
    $AuCc1 =$row1[0];
  }
    $sql_g1 = "SELECT MINIMUM_UNDERGRADUATE_TRANSFER_GRADE FROM audata WHERE  ARCADIA_COURSE_CODE = '$AuCc1'";
    $sql_y1 = "SELECT GENERAL_EDUCATION FROM audata WHERE ARCADIA_COURSE_CODE = '$AuCc1'";
    $res_g1 = mysqli_query($db, $sql_g1);
    $res_y1 = mysqli_query($db, $sql_y1);
while ( $row1=mysqli_fetch_row($res_g1))
    {
    $ARgrade1 =$row1[0];
  }
  while ( $row1=mysqli_fetch_row($res_y1))
    {
    $genEd1 =$row1[0];
  }
  echo "________________ COURSE 2 ________________";
// echo strcmp($grade1, $ARgrade1) ;
  	if (mysqli_num_rows($res_u1) <1) {
  	  $school_error1 = 'School is not in database - Please Contact the Registrar Office';
      echo "School is not in database - Please Contact the Registrar Office";    	
  	}
  	else if(mysqli_num_rows($res_e1) <1){
  	  $code_error1 = 'course is not in database - Please contact the Registrar Office';
      echo "Course is not in database - Please contact the Registrar Office";
      }
     else if (strcmp($grade1 , $ARgrade1) == 1)
      {
        $grade_error1 = "Yu do not have a high enough grade  '$ARgrade1'";
        echo "Grade is not accepted.";
      }
      else{
           $creditTotal+=$credit1;
           //echo " You will receive $credit1 credits";
           
           echo "<br>";
           echo "<br>";
           echo " Arcadia course code: $AuCc1";
           echo "<br>";
           echo "<br>";
           echo " Requirements Fulfilled: $genEd1"; 
            echo "<br>";
           echo "<br>";	
           echo " Credit total = $creditTotal";
         }
         echo "<br>";
         echo "<br>";
         echo "***If a course equivalency does not display on this page please ensure that the school is printed as listed on the school list. Otherwise the school and/or course information is not currently in the database and you should contact the registrar at registrar@arcadia.edu***";
         exit();
      
      }
