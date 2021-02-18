<!DOCTYPE html>
<html>
<head>
	<title> Degree</title>
</head>
<body>

	<form method="POST" action="#">
		<fieldset>
			<legend>DEGREE</legend>
			 <input type="Checkbox" name="degree" value="<?php if(isset($_POST['degree'])){ echo $_POST['degree'];} ?>">SSC
			   <input type="Checkbox" name="degree" value="<?php if(isset($_POST['degree'])){ echo $_POST['degree'];} ?>">HSC
			   <input type="Checkbox" name="degree" value="<?php if(isset($_POST['degree'])){ echo $_POST['degree'];} ?>">BSC
			   <input type="Checkbox" name="degree" value="<?php if(isset($_POST['gender'])){ echo $_POST['gender'];} ?>">MSC

			   <br>

				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
