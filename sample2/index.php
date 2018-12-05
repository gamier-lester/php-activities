<!DOCTYPE html>
<html>
<head>
	<title>PHP Intro 2</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<?php 
		$bank_balance = 0;
		$no_val = null;

		echo "Bank balance is: " . $no_val;

		echo "<br />";

		if ($bank_balance < 100) {
		   $money = 1000;
		   $bank_balance += $money;
		} else {
		   // $savings += 50;
		   $bank_balance -= 50;
		}


		echo "Current Balance is: " . $bank_balance;

		echo "<br />";

		echo (3.14 == (1+2.14));

		echo "<br />";

		echo ("abc" == ("a"."bc"));

		$a = "1000";
		$b = "+1000";
		echo "<br />";
		if ($a == $b) echo "1";
		echo "<br />";
		if ($a === $b) echo "2";
		echo "<br />";
		echo "<br />";

	?>
	

	<?php 

		$a = 0; $b = 1;
		if ($a AND $b) echo "asd" . "<br>";
		if ($a or $b)  echo "asde" . "<br>";		
		if ($a XOR $b)  echo "asdef" . "<br>";
		if (!$a) echo "asdefg" . "<br>";

		echo "<br />";
		


	?>

	<?php 
		//while loops
		//checked 13 times
		$count = 1;
		while ($count <= 12)
		{
		    echo "$count times 12 is " . $count * 12 . "<br>";
		    $count++;
		}

		echo "<br />";
	?>

	<?php 
		//do while loop
		//checked 12 times
		$count  = 1;
		do
		{
		    echo "$count times 12 is " . $count * 12 . "<br>";
		    $count++;
		} while ($count <= 12);

		echo "<br />";
	?>

	<?php 
		// for loop
		// checked 13 times
		for ($count = 1; $count <= 12; $count++){
			echo "$count times 12 is " . $count * 12 . "<br>";
		}

	?>

	<br />

	<?php 
		// activity
		$output = "";
		// for ($counta = 0; $counta <= 10; $counta++){
		// 	$output .= "<label>";
		// 	for ($countb = 0; $countb <= $counta; $countb++) { 
		// 		$output .= "* ";
		// 	}
		// 	$output .= "</label>";
		// 	$output .= "<br />";
		// }

		$output2 = "";
		for ($counta = 0; $counta <= 10; $counta++){
		
			for ($countb = 0; $countb <= $counta; $countb++) { 
				if ($countb == $counta){
					$output2 .= "* ";
				} else {
					$output2 .= "- ";
				}
			}
			$output2 .= "<br />";	
		}
		echo $output2;
	?>

	<hr>

	<h1> Pattern Activity </h1>

	<h2> #1 </h2>
	<?php 
		$output3 = "";
		$spaceo = "&nbsp";
		$spacez = "&nbsp" . "&nbsp" . "&nbsp";
		$space_count = 3;
		$space_countz = 9;

		for ($counta = 0; $counta <= 6; $counta++){
			$output3 .= "<p>";
			// place spaces without using styles
			// for ($space_count = 0; $space_count <= 6)

			if (($counta % 2) == 0) {
				for ($countc = 0; $countc != $space_count; $space_count--){
					$output3 .= $spacez;
					$output3 .= $spacez;
					$output3 .= $spacez;
				}
				for ($countb = 0; $countb <= $counta; $countb++) { 
					$output3 .= "* ";
				}
				// $output3 .= $spacez;
				// $output3 .= $spacez;
				// for ($a = $space_count; $space_count != 0; $space_count--) {
				// 	$output3 .= $spacez;
				// }
				
			}
			$output3 .= "</p>";
		}
		echo $output3;
	?>


	<h2> #2 </h2>


	<?php
		$output4 = "";

	?>



<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>