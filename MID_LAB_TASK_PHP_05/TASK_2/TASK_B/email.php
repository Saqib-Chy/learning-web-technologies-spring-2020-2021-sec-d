<?php


	if(isset($_POST['submit'])){

		$email 		= $_POST['email'];


		if($email == "" ){
			echo "null submission...";
		}else{
			echo $email;
		}

	}else{
		echo "invalid request...";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Email</legend>
		 <input type="email" name="email" value=""> <br>
      <hr align ="left" width="100%">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>
