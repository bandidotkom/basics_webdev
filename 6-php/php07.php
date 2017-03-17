<?php

print_r($_GET);
echo $_GET["password"];echo "Hi there ".$_GET['name']."!";

if (is_numeric($_GET) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){
	$i = 2;
	$isPrime = true;
	while($i < $_GET['number']){
		if ($_GET['number'] % $i == 0){
			$isPrime = false;
		}
		$i++;
	}
	if ($isPrime){
		echo "<p>".$i." is a prime number!</p>";
	}else{
		echo "<p>".$i." is not a prime number!</p>";
	}
}
else if ($_GET){
	echo "Please enter a positive whole number!";
}
?>

<p>What's your name?</p>
<form>
	<input name="name" type="text">
	<input type="submit" value="Go!">
</form>
<p>Is it a prime?</p>
<form>
	<input name="number" type="text">
	<input type="submit" value="Prime?">
</form>