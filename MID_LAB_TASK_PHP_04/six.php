<?php

	$array = ["Pogba", "Martia", "Cavani"];
	$element_to_search = "Pogba";
	$element_found = false;
	for($i = 0; $i < count($array); $i++){
		if($element_to_search === $array[$i]){
			$element_found = true;

		}
	}
	if($element_found === true)
  {
		echo "found";
	}
  else
  {
		echo "not found";
	}

?>
