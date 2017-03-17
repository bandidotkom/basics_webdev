<?php
if (is_numeric($_POST) && $_POST['number'] > 0 && $_POST['number'] == round($_POST['number'], 0)){
	$i = 2;
	$isPrime = true;
	while($i < $_POST['number']){
		if ($_POST['number'] % $i == 0){
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
else if ($_POST){
	echo "Please enter a positive whole number!";
}

?>

<p>Is it a prime?</p>
<form method="post">
	<input name="number" type="text">
	<input type="submit" value="Prime?">
</form>