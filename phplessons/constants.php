<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>constants</title>
	<?php
		//CASE SENSITIVE VARIABLE
		define ("DSP", "My name is DSP!!");
		echo DSP; 
		//error: echo dsp;

		//CASE INSENSITIVE VARIABLE
		define ("DSPM", "my name is dsp!!", true);
		echo "<hr>".dspm;

		//CONSTANT ARRAY
		define ("arr", ["hELLO", "eVERYONE!!"]);
		echo "<hr>";
		print_r(arr);


	?>
</head>
<body>

</body>
</html>