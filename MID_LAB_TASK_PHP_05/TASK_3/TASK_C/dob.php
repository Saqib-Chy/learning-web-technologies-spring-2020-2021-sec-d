<!DOCTYPE html>
<html>
<head>
	<title>Date Of Birth</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
				<legend><b>DATE OF BIRTH</b></legend>
					<table>
						<tr>
              <td>dd</td>


							<td>mm</td>


							<td>yy</td>
						</tr>

						<tr>
							<td>
								<input type="number" name="day" value="<?php if(isset($_POST['day'])){ echo $_POST['day'];} ?>">/
							</td>
							<td>
								<input type="number" name="month" value="<?php if(isset($_POST['month'])){ echo $_POST['month'];} ?>">/
							</td>
							<td>
							<input type="year" name="year" value="<?php if(isset($_POST['year'])){ echo $_POST['year'];} ?>">
							</td>

						</tr>

					</table>
					<hr align ="left" width="100%">
					<input type="Submit" name="submit">


			</fieldset>



	</form>

</body>
</html>
