<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>PHP 예제</title>
	</head>
	<body>
		<?php
			$dbc = mysqli_connect('localhost',
								 'root', 'mysql1234',
								 'gunpladb')
				or die('Error Connect');
			echo '성공';
		?>		
	</body>
</html>
