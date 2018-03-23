<?php
	$username = "root";
	$password = "";
	$host = "localhost";
	$connector = mysql_connect($host, $username, $password)
		or die("Unable to connect");
	$selected = mysql_select_db("testData", $connector);

	?>
	<!DOCTYPE html>
	<html xmlns="https://www.w3.org/1999/xhtml">
	<head>
		<title>TransferEquivalencySystem</title>
	</head>
	<body>
		<div id="body">
			<div id="left">
			</div></div>
		<?php
		$result = mysql_query("SELECT * FROM TransferSchoolData");
		?>
		<table>
			<thead>
				<tr>
					<th>SchoolName</th>
					<th>CourseCode</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysql_fetch_assoc($result)) {
					echo
					"<tr>
				<td>{$row['SchoolName']}</td>
				<td>{$row['CourseCode']}</td>
				<td>{$row['CourseName']}</td>
				<td>{$row['AuCode']}</td>
					</tr>";
						}
						?>
					</tbody>
				</table>
			</body>
			</html>
			<?php mysql_close($connector); ?>
				
				
				}