<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bio-Data Form</title>
</head>
<body>


	<div style="font-size: 20dp;font-weight: bold;">
		<form method="post" action="bio_data.php">
			<label for="name">Enter Name: </label>
			<input type="text" name="name">

			<br><br>

			<label for="age">Enter Age: </label>
			<input type="number" name="age">

			<br><br>

			Gender: 
			<input type="radio" name="gender" value="Male"> 
			<label for="gender">Male</label>
			&nbsp;
			<input type="radio" name="gender" value="Female"> 
			<label for="gender">Female</label>

			<br><br>
			Skills:
			<input type="checkbox" name="skill1" value="C Programming">
			<label for="skill">C Programming</label>
			&nbsp;
			<input type="checkbox" name="skill2" value="Python">
			<label for="skill">Python</label>
			&nbsp;
			<input type="checkbox" name="skill3" value="Java">
			<label for="skill">Java</label>

			<br><br>

			<input type="submit" name="pampey">
			
		</form>
	</div>

	<?php

	    if($_SERVER['REQUEST_METHOD'] == "POST")
	    {
	    	echo "<hr><br>Hii ".$_POST['name']."<br>Your age is ".$_POST['age']."<br>Your gender is ";
	    	echo $_POST['gender']." and your skills is/are: ";

	    	if(isset($_POST['skill1']))
	    	{
	    		
	    			echo $_POST['skill1'];
	    		
	    	}

	    	if(isset($_POST['skill2']))
	    	{
	    		
	    			echo "&nbsp;".$_POST['skill2'];
	    		
	    	}

	    	if(isset($_POST['skill3']))
	    	{
	    		
	    			echo "&nbsp;".$_POST['skill3'];
	    		
	    	}
	    }
	?>
	
</body>
</html>