<?php

	if(isset($_POST['submit']))
	{
		$currentpass = $_POST['currentpass'];
		$newpass = $_POST['newpass'];
		$repass = $_POST['repass'];

		if($currentpass === $newpass){
			echo "New Password cannot be the same as old password";
		}
		if($newpass != $repass){
			echo "Password doesn't match";
		}
	}

?>
