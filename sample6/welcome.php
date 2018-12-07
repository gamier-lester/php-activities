<?php $pageTitle = "Fasion Ultra Man | welcome";$loggedIn = true; ?>

<?php
	

	if (isset($_GET["name"]) && isset($_GET["lastname"]) && isset($_GET["age"]) && isset($_GET["email"])) {
		$name = htmlspecialchars($_GET["name"]);
		$lastname = htmlspecialchars($_GET["lastname"]);
		$age = htmlspecialchars($_GET["age"]);
		$email = htmlspecialchars($_GET["email"]);
		
	} else {
		$name = "Lester";
		$lastname = "Gamier";
		$age = 20;
		$email = "gamier.lester@gmail.com";
		//http://192.168.10.35/batch19/sample6/welcome.php?name=lester&lastname=gamier&age=20&email=teirrific1@gmail.com
	}
?>
<?php include_once("partials/start-body.php") ?>
<?php require_once("partials/navbar.php") ?>


<?php if($loggedIn) : ?>
	<h1> Welcome, User </h1>

<?php else: ?>
	<h1> Welcome, Guest </h1>

<?php endif; ?>


<?php 
	$name = "your name";
	echo isset($name);
?>












<?php include_once("partials/end-body.php") ?>