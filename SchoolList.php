<html>

   <body>
   <table> 
     <tr>
       <th>Transfer School Name</th>
     </tr>

    <table>



<?php 
  $db = mysqli_connect('localhost', 'root', '', 'schooldata');
  $sql_a = "SELECT DISTINCT TRANSFER_SCHOOL_NAME FROM transferdata";

      $result = $db-> query($sql_a)or die($conn->error);
  if ($result-> num_rows >= 0){
    while ($row = $result-> fetch_assoc() ){
         
          echo "<tr><td>". $row["TRANSFER_SCHOOL_NAME"]."</td>"."</tr>";
    }
}
else{
	echo "No result";
}
  $db-> close();
        ?>
    </table>
</table>
</body>
</html>
