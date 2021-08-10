<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Arrays</title>
</head>
<body>
	<?php
		//Indexed Array
		$arr1 = array("A for Apple", "B for Ball","C for Cat", "D for Dog");
		for($x=0; $x<count($arr1); $x++)
		{
			echo $arr1[$x]."<br>";
		}
		echo "<hr>";

		//Associative Array
		$arr2 = array("A" => "Apple", "B" => "for Ball", "C" => "for Cat", "D" => "Dog");
		foreach ($arr2 as $key => $value) {
			echo $key." for ".$value."<br>";
		}
		echo "<hr>";

		//Multidimension Arrays
		$arr3 = array(
			array("I'm ", "belong to ", "First " , "row", 1),
			array("I'm ", "belong to ", "Second " , "row"),
			array("I'm ", "belong to ", "Third " , "row"),
			array("I'm ", "belong to ", "Fourth " , "row")
		);
		foreach ($arr3 as $val1) {
			echo "<br>";
			foreach ($val1 as $val2) {
				echo $val2;
			}
		}
		echo "<hr>";

		echo count($arr3[1]);





	?>
</body>
</html>