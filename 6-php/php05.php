<?php

for ($i = 0; $ < 10; $i++){
	echo $i."<br>";
}
for ($i = 0; $ < 10; $i = $i + 2){
	echo $i."<br>";
}

for ($i = 9; $ >= 0; $--){
	echo $i."<br>";
}

$family = array("Bandi", "Tomi", "James");
for ($i=0; $ < sizeof($family; $i++){
	echo $family[$i]."<br>";
}
foreach($family as $key => $value){
	echo $family[$key];
	echo "item".$key." is ".$value."<br>";
	$family[$key] = $value." Komaromy";
	print_r($family);
}
?>