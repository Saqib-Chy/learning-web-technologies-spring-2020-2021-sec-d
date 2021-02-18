<?php


	if(isset($_POST['submit'])){

		$day 		= $_POST['day'];
		$month 		= $_POST['month'];
		$year 		= $_POST['year'];


		if($day == "" || $month == "" || $year == "" ){
			echo "null submission...";
		}else{
			echo $day."/" ;
			echo $month."/";
			echo $year;
		}



	}else{
		echo "invalid request...";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Date of Birth</title>
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
								<input type="number" name="day" value="">/
							</td>
							<td>
								<input type="number" name="month" value="">/
							</td>
							<td>
								<input type="year" name="year" value="">
							</td>

						</tr>

					</table>
				<hr align ="left" width="100%">
					<input type="Submit" name="submit">


			</fieldset>

	</form>

</body>
</html>
