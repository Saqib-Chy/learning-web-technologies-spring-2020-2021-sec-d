<?php
for ($i=1; $i<=3; $i++)
{
for($j=1;$j<=$i;$j++)
{
echo " * ";
}
echo "<br/>";
}

echo"<br>";
for($i = 3; $i > 0; $i--){
		$num = 1;
		for($j= $i; $j> 0; $j--){
			echo $num++." ";
		}
		echo "<br>";
	}
echo "<br>";
$p = 'A';
	for($i = 0; $i < 3; $i++){
		for($j = 0; $j <= $i; $j++){
			echo $p++." ";
		}
		echo "<br>";
  }

?>
