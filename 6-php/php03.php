<?php
$myArray = array("Bandi", "Tomi", "James");
$myArray[] = "Kati";
print_r($myArray);
echo $myArray[1];
echo"<br><br>";
$anotherArray[0] = "pizza";
$anotherArray[1] = "chocolate";
$anotherArray[5] = "coffee";
$anotherArray["favourite"] = "peanutbutter";
print_r($anotherArray);
echo"<br><br>";
$thirdArray = array(
				"France" => "French",
				"USA" => "English",
				"Germany" => "German");
unset($thirdArray["France"]);
print_r($thirdArray);
echo sizeof($thirdArray);
?>