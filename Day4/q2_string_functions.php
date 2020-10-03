<!DOCTYPE html>
<html lang="en">

<body>
    
    <form action="q2_string_functions.php" method="POST">
    <label for="inp">Enter random String to perform string operations: </label>
    <input type="text" name="str" id="inp" required>
    <br>    
    <input type="submit" value="SUBMIT">

    </form>

</body>


</html>

<?php

$str=@$_POST["str"];

$substr=substr($str,3);



if($str)
{

echo "Entered String: ".$str."<br>";
echo "Total Characters in String: ".strlen($str)."<br>";
$arr=explode(" ",$str);
echo "String to Array: ";
print_r($arr);


echo "<br> Reverse of the string: ".strrev($str)."<br>";

echo "String after converting to all lower case: ".(strtolower($str))."<br>";
echo "String after converting to all upper case: ".(strtoupper($str))."<br>";

echo "The string after repacing with substring: ".str_replace($substr,"name is Sarvesh",$str);



}





?>