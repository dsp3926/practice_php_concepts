<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>htmlspecialchars</title>
</head>
<body>
	<?php
		//convert special chars to html entities
		$str  = "Hello World!!";
		echo htmlspecialchars($str); 
	?>
</body>
</html>