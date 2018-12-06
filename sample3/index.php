<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Arrays and ForEach Loops</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php
		//Indexed Arrays
		$team = array('Kato', 'Shem', 'Ali', 'Carmela');
		$colors = array('red', 'green', 'blue');
		$fruits = array('mango', 'apple', 'orange');
		$colors = ['red', 'green', 'blue'];

		// echo count($colors);

		$arrlength = count($colors);

		for($x = 0; $x < $arrlength; $x++) {
			echo $colors[$x]."<br />";
		}
	?>

	<br />

	<?php
		//key value pairs
		$age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

		//try
		$age["juancho"] = "20";

		/*It can also be written like this
		$age['Peter'] = "35";
		$age['Ben'] = "37";
		$age['Joe'] = "43";
		*/

		//ksort(); sorts an associative array
		ksort($age);

		//if u use sort(); in an associative array, it changes its keys to 0-indexing integer. ex. 0 1 2 3 4
		// sort($age);
		// echo $age[0];

		//Traversing the arrays
		foreach ($age as $arr_key => $arr_value) {
			echo "Key= " . $arr_key . ", Value= " . $arr_value . "<br />";
		}

		echo key($age);

	?>

	<br />
	<br />

	<?php
		//arrays within an array
		$team_ironman = ["Tony", "War Machine", "Vision"];
		$team_cap = ["Cap America", "Bucky", "Hawkeye", "Falcon"];

		//adding contents to an array
		array_push($team_ironman, "Spiderman", "Pepper");

		// placing team_ironman and team_cap under the variable civil_war
		// will bind the current state/contents which disables the feature of
		// adding contents to the array later
		$civil_war = [$team_ironman, $team_cap];

		echo $civil_war[0][0]; //Tony
		echo "<br />";

		echo $civil_war[1][0]; //Cap America
		echo "<br />";

		echo $civil_war[0][2]; //Vision
		echo "<br />";

		echo $civil_war[1][1]; //Bucky
		echo "<br />";

		// print_r($civil_war);
		//printing array without print_r

		echo "<br />";
		echo "Traversing indexed arrays";
		echo "<br />";
		echo "<br />";

		$cv_length = count($civil_war);
		for ($x = 0; $x < $cv_length; $x++) {
			$inner_len = count($civil_war[$x]);
			//to check if the loop can traverse the array
			// echo $inner_len."<br/>";

			for ($y = 0; $y < $inner_len; $y++) {
				echo $civil_war[$x][$y]."<br />";
			}
			echo "<br />";
		}
	?>



<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>