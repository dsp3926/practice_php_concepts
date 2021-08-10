<!--
//name -  text - must contain only alphabet and white spaces
//age  -  num - only number
//gender - radio 
//dob    - date
//vaccination - dropdown
//lang proficiecy - checkbox
//E-mail - text
//Address - textarea
//submit button
<!DOCTYPE html>
--->

<html>
<head>
	<meta charset="utf-8">
	<title>Bio-Data Form</title>
</head>
<body>
	<?php 
		$nameErr = $ageErr = $genErr = $dobErr = $vacErr = $emailErr = $addrErr = "*";
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = valData($_POST['name']);
			if(empty($name))
			{
				$nameErr = "* Name Required";
			}
			else if (!preg_match("/^[a-zA-Z- ]*$/", $name))
			{
				$nameErr = "* Name cannot include other than alphabet and whitespaces";
			}
			else
			{
				echo "Hello ".$name."<br>";
			}


			if(empty($_POST['age']))
			{
				$ageErr = "*Age Required";
			}
			else if($_POST['age'] <= 0 || !	is_numeric($_POST['age']))
			{
				$ageErr = "* Invalid Age";
			}
			else
			{
				echo "Your age is ".$_POST['age']."<br>";
			}

			if(!isset($_POST['gender']))
			{
				$genErr = "*Choose Gender";
			}
			else
			{
				echo "Your gender is ".$_POST['gender']."<br>";
			}
			if(empty($_POST['date']))
			{
				$dobErr = "*Choose DOB";
			}

			if($_POST['vac'] == "na")
			{
				$vacErr = "*Vaccinated field required*";
			}
			else
			{
				echo "Your are ".$_POST['vac']."<br>";
			}

			if(isset($_POST['lang1'])|| isset($_POST['lang2']) || isset($_POST['lang3']))
			{
				echo "You are proficient at ";
			}
			if(isset($_POST['lang1']))
			{
				echo "Telugu";
			}
			if(isset($_POST['lang2']))
			{
				echo "-English";
			}
			if(isset($_POST['lang3']))
			{
				echo "-Hindi";
			}

			if(empty($_POST['mail']))
			{
				$emailErr = "*E-mail required";
			}
			else if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
			{
				$emailErr = "* Invalid Mail ID";
			}
			else
			{
				echo "Your Mail ID is ".$_POST['mail']."<br>";
			}

			$addr = valData($_POST['addr']);
			if(empty($addr))	
			{
				$addrErr = "*Address required";
			}
			else
			{
				echo "Your address details: ".$addr." <br>";
			}


			echo "<br><hr><br>";

		}

		function valData($data)
		{
			$data = trim($data);
			$data = stripcslashes($data);
			return htmlspecialchars($data);
		}
	?>
	<form method="POST" action="form.php">
		<label for ="name">Enter Name: </label>
		<input type="text" name="name">
		<?php echo $nameErr; ?>
		<br><br>

		<label for ="Age">Enter Age: </label>
		<input type="number" name="age">
		<?php echo $ageErr; ?>
		<br>

		<p>Gender:
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<?php echo $genErr; ?>
		</p>
		<br>

		<label for ="date">DOB: </label>
		<input type="date" name="date">
		<?php echo $dobErr; ?>
		<br><br>

		<label for="vac">Are you Vaccinated: </label>
		<select name="vac">
			<option value="na">Not set</option>
			<option value="vaccinated">Yes</option>
			<option value="not vaccinated">No</option>
		</select>
		<?php echo $vacErr; ?>
		<br>

		<p>Language Proficiency:
		<input type="checkbox" name="lang1" value="Telugu">
		<label for="lang1">Telugu</label>
		<input type="checkbox" name="lang2" value="English">
		<label for="lang2">English</label>
		<input type="checkbox" name="lang3" value="Hindi">
		<label for="lang3">Hindi</label>
		 </p>
		<br>

		<label for ="name">E-mail: </label>
		<input type="text" name="mail">
		<?php echo $emailErr; ?>
		<br><br>

		<label for="addr">Address:</label>
		<textarea name="addr" rows="4" cols="30"></textarea>
		<?php echo $addrErr; ?>
		<br><br>

		<input type="submit" name="sub">
	</form>

	
</body>
</html>