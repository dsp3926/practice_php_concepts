<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Superglobals</title>
</head>
<body>
	<?php
		//$GLOBALS
		echo "<b>\$_GLOBALS Examples:<br></b>";
		$x = 1;
		$y = 2;
		function accessGlobals()
		{
			echo "Accessing Global variables: ";
			echo $GLOBALS['x']."  ";
			echo $GLOBALS['y']."<hr>";
		}
		accessGlobals();

		//$_SERVER (few examples)
		echo "<b>\$_SERVER Examples:<br></b>";
		echo "\$_SERVER['REQUEST_METHOD'] : ".$_SERVER['REQUEST_METHOD']."<br>";
		echo "\$_SERVER['PHP_SELF'] : ".$_SERVER['PHP_SELF']."<br>";
		echo "\$_SERVER['HTTP_HOST'] : ".$_SERVER['HTTP_HOST']."<br>";
		echo "\$_SERVER['SCRIPT_NAME'] : ".$_SERVER['SCRIPT_NAME']."<br>";
		echo "\$_SERVER['REMOTE_PORT'] : ".$_SERVER['REMOTE_PORT']."<br><hr>";

		//$_GET (few examples)
		echo "<b>\$_GET Examples:<br></b>";
	?>

	<form method="GET" action="superglobals.php">
		<label for="name">Enter Name: </label>
		<input type="text" name="name">
		<input type="submit" name="sub">
	</form>

	<?php 
		
		if($_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET['name']))
		{
			echo $_GET['name'];
		}

		//$_POST 
		echo "<hr><b>\$_POST Example:<br></b>";
	?>

	<form method="POST" action="superglobals.php">
		<label for="name">Enter Name: </label>
		<input type="text" name="name">
		<input type="submit" name="sub">
	</form>

	<?php 
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			echo $_POST['name'];
		}

		//$_REQUEST 
		//$_REQUEST can collect both GET and POST data
		echo "<hr><b>\$_REQUEST Example:<br></b>";
		if(!empty($_REQUEST['name']))
		{
			echo "\$_REQUEST['name'] : ".$_REQUEST['name']."<br>";
		}
	?>




</body>
</html>