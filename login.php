<?php


session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title> Home Page </title>
</head>
<body>

	
	<h1> welcome <?php echo $_SESSION ['username'];  ?></h1>

</body>
</html>