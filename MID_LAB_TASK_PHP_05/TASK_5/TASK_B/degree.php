<?php

	if(isset($_POST['submit']))
	{

		$degree = $_POST['degree'];

		if($degree == ""){
			echo "null submission";
		}else{
			echo "success";
		}
	}else{
		echo "Invalid request";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Degree</title>
</head>
<body>

	<form method="POST" action="#">
		<fieldset>
			<legend>DEGREE</legend>
			 <input type="Checkbox" name="degree" value="">SSC
			   <input type="Checkbox" name="degree" value="">HSC
			   <input type="Checkbox" name="degree" value="">BSC
			   <input type="Checkbox" name="degree" value="">MSC

			   <br>

				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
