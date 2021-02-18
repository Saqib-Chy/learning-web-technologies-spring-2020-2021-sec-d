<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Email</legend>
		 <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>"> <br>
			<hr align ="left" width="100%">

			<input type="submit" name="submit" value="Submit">

		</fieldset>
	</form>

</body>
</html>
