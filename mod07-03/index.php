<?php include("library.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title></title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<?php
		$string_input = "racecar";

		if(is_palindrome($string_input)) {
			echo "$string_input is a PALINDROME";
		} else {
			echo "$string_input is NOT a PALINDROME";
		}
	?>


<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>