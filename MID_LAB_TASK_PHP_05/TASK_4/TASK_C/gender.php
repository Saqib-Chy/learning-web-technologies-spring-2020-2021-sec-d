<!DOCTYPE html>
<html>
<head>
	<title>Choose Gender </title>
</head>
<body>

	<form method="POST" action="#">
		<fieldset>
			<legend>GENDER</legend>
			 <input type="radio" name="gender" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender'];} ?>"> male
  		        <input type="radio" name="gender" <?php if(isset($_POST['gender'])){ echo $_POST['gender'];} ?>"> female
  		        <input type="radio" name="gender"> other <br>
							<hr align ="left" width="100%">
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
