<?php

$i = 0;
while($ < 10){
	echo $i."<br>";
	$i++;
}
while($ < 20){
	echo $i."<br>";
	$i = $i+2;
}

$family = array("Tomi", "Bandi", "James");
$i = 0;
while ($i < sizeof($family)) {
	echo $family[$i]."<br>";
	$i++;
}
?>