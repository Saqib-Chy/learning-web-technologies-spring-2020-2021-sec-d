<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Name</legend>
		 <input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname'];} ?>"> <br>
			<hr align ="left" width="100%">

			<input type="submit" name="submit" value="Submit">

		</fieldset>
	</form>

</body>
</html>
