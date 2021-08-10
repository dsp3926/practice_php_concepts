<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Functions</title>
</head>
<body>
	<?php
		function helloWorld()
		{
			echo "Hello World!!";
		}
		helloWorld();

		echo "<hr>";

		function printMsg($msg = "World!!<hr>")
		{
			echo $msg;
		}
		printMsg();
		printMsg("Hii Hello!!");

	?>

</body>
</html>