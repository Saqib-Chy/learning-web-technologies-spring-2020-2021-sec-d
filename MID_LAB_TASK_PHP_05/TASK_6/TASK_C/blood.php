<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="#">
    <fieldset>

<legend>Blood Group</legend>
	<select name="select">
    <option value="A+" selected>A+</option>
              	<option value="<?php if(isset($_POST['select'])){ echo $_POST['select'];} ?>">A-</option>
  							<option value="<?php if(isset($_POST['select'])){ echo $_POST['select'];} ?>">B+</option>
                <option value="<?php if(isset($_POST['select'])){ echo $_POST['select'];} ?>">B-</option>
  							<option value="<?php if(isset($_POST['select'])){ echo $_POST['select'];} ?>">O+</option>
                <option value="<?php if(isset($_POST['select'])){ echo $_POST['select'];} ?>">O-</option>
                <option value="<?php if(isset($_POST['select'])){ echo $_POST['select'];} ?>">AB+</option>
                <option value="<?php if(isset($_POST['select'])){ echo $_POST['select'];} ?>">AB-</option>
</select> <br>
<hr align ="left" width="100%">
<input type="submit" name="submit" value="Submit">
</fieldset>

</form>

</body>
</html>
