<!DOCTYPE html>
<html>


   <body>
   <table> 
     <tr>
       <th>Transfer_School_Code</th>
       <th>Transfer_School_Name</th>
       <th>Transfer_School_Course_Code</th>
       <th>Transfer_Course_Name</th>
       <th>Arcadia_Course_Code</th>
       <th>Arcadia_Course_Name</th>
       <th>General_Education</th>
       <th>Minimum_Grade</th>
       <th>core_to_core</th>
     </tr>

    <table>
     	<?php
     	$conn = mysqli_connect("localhost", "root","", "csv_db");
     	if ($conn-> connect_error){
     	  die("Connection failed:". $conn-> connect_error);
     }
     /*$sql = "SELECT * FROM tbl_name";
     $result = $conn-> query($sql)or die($conn->error);
        echo "number of rows: " . $result->num_rows;
  if ($result-> num_rows >= 0){
    while ($row = $result-> fetch_assoc()){
          echo "<tr><td>". $row["TRANSFER_SCHOOL_CODE"] ."</td><td>".  $row["TRANSFER_SCHOOL_NAME"]."</td><td>".  $row["TRANSFER_SCHOOL_COURSE_CODE"]. "</td><td>".  $row["TRANSFER_COURSE_NAME"]. "</td><td>".  $row["ARCADIA_COURSE_CODE"]. "</td><td>".  $row["ARCADIA_COURSE_NAME"]. "</td><td>".  $row["GENERAL_EDUCATION"]. "</td><td>".  $row["MINIMUM_UNDERGRADUATE_TRANSFER_GRADE"]. "</td><td>".  $row["CORE_TO_CORE_AGREEMENT"].
      
            "</table>";
    }
 }
 else{
 	echo "0 result";
        }*/
        /*$sql="SELECT DISTINCT TRANSFER_SCHOOL_NAME FROM tbl_name";
        echo "<select name= school value=''>School Name</option>";
        foreach ($dbo->query($sql) as $row){
          echo "<option value='{. $row[tbl_name]}'>{. $row[tbl_name]}</option>";
        }
        echo "</select>";*/
       
       /*$query = "SELECT DISTINCT TRANSFER_SCHOOL_NAME FROM tbl_name";
       $result = mysqli_query($conn,$query);
       while ($row = mysqli_fetch_array($result)){
        echo "<option>" . $row{'TRANSFER_SCHOOL_NAME'} . "</option>";

       }*/
 

    $result = $conn->query("select distinct TRANSFER_SCHOOL_NAME from tbl_name");

    echo "<html>";
    echo "<body>";

    echo "<select name='id'>";

    while ($row = $result->fetch_assoc()) {

                  unset($school);
                  $school = $row['TRANSFER_SCHOOL_NAME'];
                  
                  echo '<option value="'.$school.'">"' .$school. '"</option>';

}

    echo "</select>";
    echo "</body>";
    echo "</html>";

    

    $conn-> close();
?>

 
        
        
        
</table>
</body>
</html>