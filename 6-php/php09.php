<?php
if ($_POST){
	$family = array("Bandi", "Tomi", "James");
	$isKnown = false;
	foreach ($family as $value){
		if ($value == $_POST['name']){
			$isKnown = true;
		}
	}
	if (isKnown){
		echo "Hi there ".$$_POST['name']."!";
	}else{
		echo "I do not know you!";
	}
}

?>

<p>What is your name?</p>
<form method="post">
	<input name="name" type="text">
	<input type="submit" value="Submit">
</form>