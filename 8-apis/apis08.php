<?php
	require "twitteroauth/autoload.php";

	use Abraham\TwitterOAuth\TwitterOAuth;

	$consumerkey = "QdWKO3DGs99qBo0qx27lfaJuu";
	$consumersecret = "RqLqvYhNPGLy7oRt6ABtV3hgHPIMt1iLGjHqS1j2klg8nTzmba";
	$accesstoken = "824506632197570560-ZMgkKm5DQLduW1gp0q5iI56P0hUtMcP";
	$accesstokensecret = "K6ho2GONnZAKlWseEj7xVC4MOoAUW80YxuPZty1sp9OLi";

	$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
	$content = $connection->get("account/verify_credentials");

	$statuses2 = $connection->post("statuses/update", ["status" => "just testing my twitter app"]);
	$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);
	print_r($statuses);
?>