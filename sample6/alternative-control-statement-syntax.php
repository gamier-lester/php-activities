<?php include_once("partials/start-body.php") ?>
<?php require_once("partials/navbar.php") ?>
<?php include_once("partials/end-body.php") ?>

<!-- alternative-control-statement-syntax -->

<?php
	
	//normal if else statement
	if(true) {
		echo "<h1> Welcome, User! </h1>";
	} else {
		echo "<h1> Welcome, Guest! </h1>";
	}

	//alternative if else statements
	//usually used under some instances provided by the use-case method
	if (true):
		echo "<h1> Welcome, User! </h1>";
	else:
		echo "<h1> Welcome, Guest! </h1>";
	endif;
?>