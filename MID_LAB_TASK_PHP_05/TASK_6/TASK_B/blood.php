<?php

    if(isset($_POST['submit']))
    {
        $selected = $_POST['select'];
        echo 'Blood Group is: ' .$selected;

    }
?>
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
              	<option value="A-">A-</option>
  							<option value="B+">B+</option>
                <option value="B-">B-</option>
  							<option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
</select> <br>
<hr align ="left" width="100%">
<input type="submit" name="submit" value="Submit">
</fieldset>

</form>

</body>
</html>
