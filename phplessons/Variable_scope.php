<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Variable scope</title>
</head>
<body>
	<?php
			

		//global variable declares outside the function
		$imaglobalvariable = 123;

		echo "static variable: ";
		
		function func1()
		{
			static $x = 0;
			echo "$x ";
			$x++;
		}


		//display static variable
		func1();
		func1();
		func1();


		echo "<hr> local variable: ";


		function func2()
		{
			//local variable declared inside the function
			$x = 5;
			echo "$x ";
			$x++;
		}

		//display local variable
		func2();
		func2();

		echo "<hr> global variable method-1: ";

		function func3()
		{
			echo $GLOBALS['imaglobalvariable'];
			$GLOBALS['imaglobalvariable'] = 223;
		}

		//display global variable in the function (METHOD-1)
		func3();
		echo " ";
		func3();

		echo "<hr> global variable method-2: ";

		function func4()
		{
			global $imaglobalvariable;
			echo $imaglobalvariable;
			$GLOBALS['imaglobalvariable'] = 323;
		}

		//display global variable in the function (METHOD-2)
		func4();
		echo " ";
		func4();
	?>
</body>
</html>