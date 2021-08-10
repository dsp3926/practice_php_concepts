<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>operators</title>
</head>
<body>
	<h1>Some interesting operators in php</h1>
	<h3>
	<?php
		$x = 20;
		$y = 30;
		$z = "20";

		//if $x and $y have same data type and same value then return true else false
		echo "$x === \"$z\" is ", var_dump($x === $y);

		//if $x and $y have either not same data type or not a same values then return true else false
		echo "<hr>$x !== \"$z\" is ", var_dump($x !== $y);

		//!= is equivalent to <>
		echo "<hr>$x <> $y is ", var_dump($x <> $y);

		$str1 = "HELLO";
		$str2 = "WORLD!!";

		//concatenate strings
		echo "<hr>$str1 .$str2 is ".$str1.$str2;

		//append strings
		echo "<hr>$str1 .=$str2 is ".$str1.=$str2;


		//Null coalescing: $x = $y ?? $z;
		//$x is $y if $y is neither unexistent nor null value 
		//else $z is checked whether it is unexistent or null value
		echo "<hr>";

		//$x is stored on $a
		$a = $x ?? $y;
		echo "\$a = $x ?? $y is ".$a."<br>";

		//$y is stored on $b
		$b = $b ?? $y;
		echo "\$b = $b ?? $y is ".$b."<br>";

		//$y is stored on $c
		$c = null ?? $y;
		echo "\$c = null ?? $y is ".$c."<br>";

		//$d is null
		$d = null ?? null;
		echo "\$d = null ?? null", var_dump($d)."<br>";
	?>
</h3>
</body>
</html>