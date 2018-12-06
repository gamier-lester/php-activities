<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title></title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php
		// Functions in php
		function sayHello($name){
			echo "<h1>Hello $name</h1>";
		}

		sayHello("asd");

		//returns the sum of 2 numbers
		function addNum($num1, $num2) {
			$answer = $num1 + $num2;
			return $answer;
		}

		$dsa = addNum(1,2);
		echo $dsa;

		echo (addNum(5,3));

		echo "<br /><br />";


	?>

	<?php
		function addSum($num1, $num2) {
			return $num1 + $num2;
		}


		//returing array using function
		function myArray($num1, $num2, $num3) {
			return [$num1, $num2, $num3];
		}

		print_r(myArray("qwe","asd", "zxc"));
	?>

	<?php
		//sample function
		// m represents the row
		// n represents the column
		function printTable($m, $n, $content) {
			echo "<table border=1>";

			for ($i=0; $i < $m; $i++) { 
				echo "<tr>";
				for ($j=0; $j < $n; $j++) { 
					echo "<td>" . $content . "[" . $i. "][" . $j . "] </td>";
				}
				echo "</tr>";
			}

			echo "</table>";
		}

		// printTable(4, 10, "Bigger Table");
		echo "<br>";
		// printTable(3, 3, "Smaller Table");
		echo "<br>";


	?>

	<?php
		//3x3 array
		$three_by_three = [
			["Orange", "Kiwi", "Avocado"],
			["Mango", "Dragonfruit", "Tomato"],
			["Banana", "Guava", "Strawberry"],
			["Grape"],
			["asd", "dsa", "qwe", "zxc"]
		];

		function printTablex($arr_content) {
			echo "<table border=1>";

			$outer_length = count($arr_content);
			for ($i=0; $i < $outer_length; $i++) { 
				$inner_length = count($arr_content[$i]);
				echo "<tr>";
				for ($j=0; $j < $inner_length; $j++) { 
					echo "<td>" . $arr_content[$i][$j] . "[" . $i. "][" . $j . "] </td>";
				}
				echo "</tr>";
			}

			echo "</table>";
		}

		printTablex($three_by_three);
	?>

	<?php
		//php built-in functions

		//converts all strings to lower case
		$lowered = strtolower("aNy # letters and Punctuation you WANT");
		echo $lowered;

		echo "<br>";

		// capitalizes first letter of strings
		$ucfixed = ucfirst("any # letters and punctuation you want");
		echo $ucfixed;

		echo "<br>"; 

		//test
		function fix_names($n1, $n2, $n3) {
			$n1 = ucfirst(strtolower($n1));
			$n2 = ucfirst(strtolower($n2));
			$n3 = ucfirst(strtolower($n3));
			return $n1 . " " . $n2 . " " . $n3;
		}

		echo fix_names("LESTER", "JaN", "gamIER");

		/* local variables => created and exists only inside a function, 
		global variables => accessible from any part of the page, 
		static variables => variables that doesn't lose value when thge function exits, 
		superglobal variables => accessible everywhere inside the program*/

	?>



<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>