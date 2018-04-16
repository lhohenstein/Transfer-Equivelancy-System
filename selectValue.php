<!DOCTYPE html>
<html>
    <head>
        <title>Selected Option Value</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <select id="list" onchange="getSelectValue();">
 <?php
     	$conn = mysqli_connect("localhost", "root","", "schooldata");
     	if ($conn-> connect_error){
     	  die("Connection failed:". $conn-> connect_error);
     }
 $result = $conn->query("select distinct Transfer_School_Name from test");
 while ($row = $result->fetch_assoc()) {
                  unset($school);
                  $school = $row['Transfer_School_Name'];
                  
                  echo '<option value='.$school.'>' .$school. '</option>';
}
$conn-> close();
?>
        </select>
    <script>
        
        function getSelectValue()
        {
            var selectedValue = document.getElementById("list").value;
            
        }
        getSelectValue();

    </script>
    </body>
</html>
