<?php include 'library.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title></title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<?php
		// echo get_area_of_rectangle(2,2);

		$length = 4;
		$width = 2;
		$height = 50;

		echo get_volume_of_rectable($length, $width, $height);
	?>

<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>