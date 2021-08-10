<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>loops</title>
</head>
<body>
	<?php
	//while loop
	$x = 1;
	while($x<=5)
	{
		echo $x."\t";
		$x++;
	}
	echo "<hr>";

	//do while loop
	$y = 5;
	do
	{
		echo $y."\t";
	}while($y<=2);
	echo "<hr>";

	//for loop
	for($z=0; $z<10; $z++)
	{
		echo $z."\t";
	}
	echo "<hr>";


	//foreach loop
	$arr = ['A','B','C','D','E','F'];
	foreach ($arr as $val) {
		echo $val."\t";
	}
	echo "<hr>";

	?>
</body>
</html>