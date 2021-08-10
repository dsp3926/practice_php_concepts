<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>String Functions</title>
</head>
<body>
	<form method="post" action="string_functions.php">
		<label for="str">Enter a string: </label>
		<input type="text" name="str">
		<hr>
	</form>

	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$str = $_POST['str'];

			echo "String word count: ", str_word_count($str),"<hr>";

			echo "Reversed String: ", strrev($str);

			echo "<hr>Searching 'dsp' in entered string: ", strpos($str, "dsp");

			echo "<hr>Replace 'dsp' with 'rgu': ", str_replace('dsp', 'rgu', $str);

		} 
	?>
</body>
</html>