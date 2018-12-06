<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title> Array Activity </title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<h2>Array Activity</h2>

	<?php
		/*
			First name
			Last name
			Age
			Actor
			Superpowers
			Stretch Goal: Other movies Array
		*/

		// team ironman
		$ironman = [
			"First Name" => "Tany",
			"Last Name" => "Stark",
			"Age" => 12,
			"Superpowers" => "NaN",
			"Other Movies" => ["movie1", "movie2", "movie3"]
			];

		$warmachine = [
			"First Name" => "War",
			"Last Name" => "Machine",
			"Age" => 8,
			"Superpowers" => "NaN",
			"Other Movies" => ["movie1", "movie2", "movie3"]
			];

		$vision = [
			"First Name" => "mission",
			"Last Name" => "vision",
			"Age" => "&infin;",
			"Superpowers" => "flying flying",
			"Other Movies" => ["movie1", "movie2", "movie3"]
			];

		$team_ironman = ["Ironman" => $ironman, "War Machine" => $warmachine, "Vision" => $vision];

		// team captain america
		$capamerica = [
			"First Name" => "Captain",
			"Last Name" => "America",
			"Age" => "9999",
			"Superpowers" => "Super shield",
			"Other Movies" => ["movie1", "movie2", "movie3"]
			];

		$bucky = [
			"First Name" => "bucky",
			"Last Name" => "grappler",
			"Age" => "16",
			"Superpowers" => "martial arts",
			"Other Movies" => ["movie1", "movie2", "movie3"]
			];

		$hawkeye = [
			"First Name" => "hawk",
			"Last Name" => "eye",
			"Age" => "10000",
			"Superpowers" => "geass",
			"Other Movies" => ["movie1", "movie2", "movie3"]
			];

		$falcon = [
			"First Name" => "ateneo",
			"Last Name" => "falcon",
			"Age" => "400",
			"Superpowers" => "fly high",
			"Other Movies" => ["movie1", "movie2", "movie3"]
			];

		$team_cap = ["Cap America" => $capamerica, "Bucky" => $bucky, "Hawkeye" => $hawkeye, "Falcon" => $falcon];

		// print_r($team_ironman);

		$civil_war = ["Team Ironman" => $team_ironman,"Team Captain America" => $team_cap];

		// echo "<br /><br />";

		//testing before implementation
		// foreach ($team_ironman as $key => $value) {
		// 	echo "Supername: " . $key ."<br />";

		// 	foreach ($value as $cont => $cont_val) {
		// 		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		// 		echo $cont . ":&nbsp;" . $cont_val;
		// 		echo "<br />";
		// 	}
		// 	echo "<br /><br />";
		// }

		// foreach ($team_cap as $key => $value) {
		// 	echo "Supername: " . $key ."<br />";

		// 	foreach ($value as $cont => $cont_val) {
		// 		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		// 		echo $cont . ":&nbsp;" . $cont_val;
		// 		echo "<br />";
		// 	}
		// 	echo "<br /><br />";
		// }

		//echo civil war
		// print_r($civil_war);
		// echo "<br /><br />";

		$finda = "a";

		foreach ($civil_war as $team => $superheroes) {
			echo "<h3>" . $team . "</h3>" . "<br />";

			foreach ($superheroes as $superhero => $info) {
				echo "Superhero: " . $superhero . "<br />";

				foreach ($info as $info_name => $info_content) {
					
					if (is_array($info_content)){
						$info_len = count($info_content);
						echo "&nbsp;&nbsp;&nbsp;&nbsp;";
						echo $info_name . ":&nbsp;";
						echo "<br />";

						for ($i=0; $i < $info_len; $i++) { 
							echo "&nbsp;&nbsp;&nbsp;&nbsp;";
							echo "&nbsp;&nbsp;&nbsp;&nbsp;";
							echo $info_content[$i];
							echo "<br />";
						}

						echo "<br />";
					} else {
						$lower_info = strtolower($info_content);
						$search_res = strpos($lower_info, $finda);

						if ($search_res !== false) {
							$string_len = strlen($info_content);
							$output = $string_len - ($string_len / 2);
							$output = round($output);
							$output = $output - ($output * 2);
							$sliced_str = substr($info_content, 0, $output);
							echo "&nbsp;&nbsp;&nbsp;&nbsp;";
							echo $info_name . ":&nbsp;" . $sliced_str;
							echo "<br />";
						} else {
							echo "&nbsp;&nbsp;&nbsp;&nbsp;";
							echo $info_name . ":&nbsp;" . $info_content;
							echo "<br />";
						}

						
					}
				}
				echo "<br /><br />";
			}
		}

		//test stretch stretch goals
		// $asd = "aaeawe";
		// $asd = strpos($asd, $finda);
		// if ($asd !== false) {
		// 	echo "asd";
		// }
		//end of test stretch stretch goals

		// $try = [
		// 	"First Name" => "ateneo",
		// 	"Last Name" => "falcon",
		// 	"Age" => "400",
		// 	"Superpowers" => "fly high",
		// 	"Other Movies" => ["movie1", "movie2", "movie3"],
		// 	"other other movies" => ["movie4", "movie5"]
		// 	];

		// foreach($try as $ky => $val) {
		// 	if (is_array($val)){
		// 		$val_len = count($val);

		// 		echo "key = " . $ky . " val: " . "<br />";

		// 		for($counter = 0; $counter < $val_len; $counter++) {
		// 			echo $val[$counter] . "<br />";
		// 		}
		// 	} else {
		// 		echo "key = " . $ky . " val = " . $val . "<br />";
		// 	}

		// }

	?>


<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>