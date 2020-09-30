<?php 
$arr = array(11,23,72,44);

foreach ($arr as $i) 
{
	
	if ($i %2 != 0)
		echo "The number ".$i." is an  Odd Number.<br>";
	else
		echo "The number ".$i." is an Even Number.<br>";
}
 ?>