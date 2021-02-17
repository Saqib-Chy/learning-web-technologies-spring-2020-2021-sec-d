<?php

	$array = [
				[1, 2, 3, 'A'],
				[1, 2, 'B', 'C'],
				[1, 'D', 'E', 'F']
			];

	for($i= 0; $i < $array; $i++){
		for($j = 0; $j < $array[$i]; $j++){
			if($array[$i][$j] >= 'A' && $array[$i][$j] <= 'Z'){
				break;
			}
			echo $array[$i][$j];
		}
		echo "<br>";
	}

  echo "<br>";

  	for($i = 0; $i < $array; $i++){
  		for($j = 0; $j < ($array[$i]); $j++){
  			if($array[$i][$j] >= 'A' && $array[$i][$j] <= 'Z'){
  				echo $array[$i][$j];
  			}
  		}
  		echo "<br>";
  	}
?>
