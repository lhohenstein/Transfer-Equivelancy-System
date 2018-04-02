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
     	$conn = mysqli_connect("localhost", "root","", "SchoolData");
     	if ($conn-> connect_error){
     	  die("Connection failed:". $conn-> connect_error);
     }
     $sql = "SELECT * FROM test";
     $result = $conn-> query($sql)or die($conn->error);
        echo "number of rows: " . $result->num_rows;
  if ($result-> num_rows >= 0){
    while ($row = $result-> fetch_assoc()){
          echo "<tr><td>". $row["Transfer_School_Code"] ."</td><td>".  $row["Transfer_School_Name"]."</td><td>".  $row["Transfer_School_Course_Code"]. "</td><td>".  $row["Transfer_Course_Name"]. "</td><td>".  $row["Arcadia_Course_Code"]. "</td><td>".  $row["Arcadia_Course_Name"]. "</td><td>".  $row["General_Education"]. "</td><td>".  $row["Minimum_Undergraduate_Transfer_Grade"]. "</td><td>".  $row["Core_To_Core_Agreement"].
      
            "</table>";
    }
 }
 else{
 	echo "0 result";
        }
        $conn-> close();
        ?>
</table>
</body>
</html>