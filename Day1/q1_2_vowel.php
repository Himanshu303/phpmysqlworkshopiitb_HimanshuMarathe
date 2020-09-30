<?php 

$arr = array("a","b","c","d","e","f");

foreach ($arr as $iter) {
    switch($iter)
     {
 	case 'a':
	case 'e':
	case 'i':
 	case 'o':
 	case 'u':
 	 echo $iter." is a vowel.<br>";
 	 break;
 	default:
 	 echo $iter." is a consonant.<br>";
	}
}
 ?>