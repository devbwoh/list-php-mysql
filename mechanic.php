<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Mechanic</title>
		<body>
		<?php
			$dbc = mysqli_connect('localhost', 
								  'root', 'mysql1234',
								  'gunpladb')
				or die('Error Connect DB');
			
			mysqli_query($dbc, 'set names utf8');
			
			$query = 'select * from mechanic';
			$result = mysqli_query($dbc, $query)
				or die('Error Query');
			
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['name'] . '<br/>';
			}
			
			mysqli_free_result($result);
				
			mysqli_close($dbc);
		?>			
		</body>
	</head>
</html>