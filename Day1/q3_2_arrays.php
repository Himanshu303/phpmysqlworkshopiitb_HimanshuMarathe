<?php 

$arr1 = array(
	array(7,19),
	array(29,11)
);

$arr2 = array(
    array(3,7),
    array(5,31)
          )
;

echo "<h3>INPUT MATRICES: </h3>";

echo "1st Array: <br><br>";
for ($i=0; $i <= 1 ; $i++)
    {
    echo "|"; 
    for ($j=0; $j <= 1 ; $j++) 
    { 
		
		echo $arr1[$i][$j]." ";
	}
echo "|<br>";
    }

echo "<br>2nd Array: <br><br>";
for ($i=0; $i <=1 ; $i++) 
    {
echo "|"; 
    for ($j=0; $j <= 1 ; $j++) 
    { 
		
		echo $arr2[$i][$j]." ";
	}
echo "|<br>";
    }

echo "<h3>ADDITION OF THE MATRICES IS=:</h3>";
for ($i=0; $i <= 1 ; $i++)
     {
echo "|"; 
    for ($j=0; $j <= 1 ; $j++)
     { 
		
		echo ($arr1[$i][$j] + $arr2[$i][$j])." ";
	 }
echo "|<br>";
    }