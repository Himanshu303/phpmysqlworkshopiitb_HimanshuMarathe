<html>

<h1>Know the type of the Triangle</h1>
<p>Enter the Sides:</p>

<form action="q6_1_special_variables_html.php" method="get">
	<input type="text" name="s1" placeholder="Enter side 1" required><br>
	<input type="text" name="s2" placeholder="Enter side 2" required><br>
	<input type="text" name="s3" placeholder="Enter side 3" required><br>

	   <input type="submit" value="Click Here">
</form>

 
</html>

<?php 

$s1 = @$_GET["s1"];
$s2 = @$_GET["s2"];
$s3 = @$_GET["s3"];


    if ($s1 == $s2 && $s2== $s3) 
    {
		echo "This Triangle is an Equilateral Triangle";
	}
    elseif ($s1 == $s2 || $s2 == $s3 || $s3 == $s1) 
    {
		echo "This Triangle is an Isosceles Triangle";
	}
	else{
        if($s1*$s1 == $s2*$s2 + $s3*$s3 || $s2*$s2==$s1*$s1+$s3*$s3 || $s3*$s3==$s2*$s2+$s1*$s1)
        {
            echo "This Triangle is a Right angled triangle.";
        }
        else
        {
            echo "This Triangle is a Scalene Triangle";
        }
    }		


?>