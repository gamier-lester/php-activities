<!DOCTYPE html>
<html>
<head>
	<title>PHP Intro</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php echo "Hello World!"; ?>

	<?php 
		$hello = "asdasd";

		echo "Hello $hello";
	?>

	<?php 
		$age = 34; 
		$name = "de\n\nrpy";

		echo "<br />" ;
		echo $age;
		echo "<br />";
		echo $name;
		echo "<hr>";
	?>

	<?php 
		echo "<pre>";
		echo 'Buzz Lightyear once said: 
		"You\'re a toy!"';
		echo 'You deleted C:\\*.*';
		echo 'You deleted C:\*.*';
		echo 'This will not expand: <pre>\n</pre> 
		a 
		newline';
		echo 'Variables do not $expand 
		either';
		echo "</pre>";
	?>
	
	<?php define("ABOUT_LOCATION", "NOITACOL_TUOBA"); echo ABOUT_LOCATION ?>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>