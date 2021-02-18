<?php


	if(isset($_POST['submit']))
	{
		$gender = $_POST['gender'];
		if($gender == ""){
			echo "null submission";
		}else{
			echo "success";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>GENDER</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>GENDER</legend>
			<input type="radio" name="gender"> male
  		        <input type="radio" name="gender"> female
  		        <input type="radio" name="gender"> other <br>
              	<hr align ="left" width="100%">
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
