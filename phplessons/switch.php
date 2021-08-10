<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Switch</title>
</head>
<body>
	<form action="switch.php" method="POST">
		<label for="num">Enter a number between 1 to 5:</label>
		<input type="number" name="num">
		<input type="submit" name="sub">
	</form>
	<?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$n = $_POST['num'];
			echo "<br><hr>You have entered ";
			switch ($n) 
			{
				case 1:
					echo "1";
					break;
				
				case 2:
					echo "2";
					break;

				case 3:
					echo "3";
					break;
					
				case 4:
					echo "4";
					break;
				
				case 5:
					echo "5";
					break;			

				default:
					echo "an invalid input";
					break;
			}
		}
	?>
</body>
</html>