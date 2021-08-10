<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>echo vs print</title>
</head>
<body>
	<?php
		//echo allows multiple parameters but print doesn't
		//echo is faster than print

		$str1 = "statement ";

		echo "<h1>I'm displaying <br>";
		echo "this ".$str1."using echo statement :) <br>";
		echo "It's ", "really ", "awesome ", "to use ", "echo ", $str1, "</h1><br>"; //multiple parametres


		print "<h1>I'm displaying <br>";
		print "this ".$str1."using print statement :) <br>";
		// print "It's ", "really ", "awesome ", "to use ", "echo ", $str1, "</h1><br>"; multiple parametres-not allowed using print statement

	?>
</body>
</html>