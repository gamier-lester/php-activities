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

		echo vowelCount("eee222aaafff");

		// echo vowelCount("aaa");
		// $text2 = "aad";
		// echo substr_count($text2, 'a');

		echo "<br><br>";

		//explanation vowels
		//using regular expressions
		function vowel_count($haystack) {
			//this is a regular expression
			$vowel_regex = "/[aeiou]/";
			return preg_match_all($vowel_regex, $haystack);
		}

		$input_str = "The quick brown fox jumps over the lazy dog.";
		echo "There are ".vowel_count($input_str). " vowels in \"".$input_str."\"";
	?>

	<br>
	<br>

	<?php
		//palindrome stretch goals explanation
		function is_palindrome($input_str) {
			$string_length = strlen($input_str);

			for ($x=0; $x < $string_length/2; $x++) { 
				// echo $input_str[$i]."<br>";

				//look for mismatch and return false
				if($input_str[$x] != $input_str[$string_length-$x-1]){
					return FALSE;
				}
				// echo $input_str[$x] . " - " . $input_str[($string_length-$x)-1] . "<br>";
			}

			return TRUE;
		}

		// is_palindrome("bootcamp");

		$sample_str = "Racecar";
		if(is_palindrome(strtolower($sample_str))){
			echo $sample_str." is a palindrome.";
		} else {
			echo $sample_str." is NOT a palindrome.";
		}

		// $sample_str = "bootcamp";
		// echo $sample_str[0];
	?>

<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>