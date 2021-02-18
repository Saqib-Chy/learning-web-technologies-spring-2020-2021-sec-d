<?php


	if(isset($_POST['submit'])){

		$name = $_POST['myname'];


		if($name == "" ){
			echo "null submission...";
		}else{
			echo $name;
		}

	}else{
		echo "invalid request...";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
			<legend>Name</legend>
		  <input type="text" name="myname" value=""> <br>
       <hr align ="left" width="100%">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>
