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
		//A. daysInMonth() takes month as input and returns the number of days present in that month

		function daysInMonth($num1) {
			return cal_days_in_month(CAL_GREGORIAN, $num1, 2018);

		}

		echo daysInMonth(3);

		echo "<br /><br />";

		//B. vowelCount() accepts strings as parameter and returns the number of vowels in the string

		$vowelz = ["a", "e", "i", "o", "u"];

		function vowelCount($text) {
			$output = 0;
			$output += substr_count($text, 'a');
			$output += substr_count($text, 'e');
			$output += substr_count($text, 'i');
			$output += substr_count($text, 'o');
			$output += substr_count($text, 'u');
			return $output;
		}

		echo vowelCount("lester");

		// echo vowelCount("aaa");
		// $text2 = "aad";
		// echo substr_count($text2, 'a');

	?>

<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>