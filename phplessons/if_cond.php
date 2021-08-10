<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conditional statements</title>
</head>
<body>
	<form action="if_cond.php" method="POST">
		<label for="age">Enter Age:</label>
		<input type="number" name="age">
		<input type="submit" name="sub">
	</form>
	<?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$age = $_POST['age'];
			echo "<br><hr>";
			if($age<1)
			{
				echo "Stop kidding, enter correct age!!";
			}
			elseif($age<=18)
			{
				echo "You are not allowed to get vaccinated :(";
			}
			elseif($age>18 && $age<=45)
			{
				echo "It's better if you are vaccinated!!";
			}
			else
			{
				echo "You must be vaccinated!!";
			}
		}
	?>
</body>
</html>