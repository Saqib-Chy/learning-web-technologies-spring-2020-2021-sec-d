<?php
	require_once('../model/pmodel.php');

	if(isset($_POST['submit'])){

		$name 		= $_POST['name'];
		$bPrice 	= $_POST['b_price'];
		$sPrice 	= $_POST['s_price'];

		$product = [
						'name'		=>$name,
						'buying price'	=>$b_Price,
						'selling price'	=>$s_Price,

				];


				$status = insertProduct($product);
				print_r($status);

				if ($status) {
					if(isset($_POST['check'])){
				  	header('location: ../view/product_list.php');

				  	}else{

				  		header('location: ../view/home.html');
				  	}
				}

				else{
					echo "DB Error";
				}
	}

?>
