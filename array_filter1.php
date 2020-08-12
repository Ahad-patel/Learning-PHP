<!DOCTYPE html>
<html>

<head>
	<title>Array filter example 1</title>
</head>

<body>
	<?php
	$number = array(5, 12, 56, 98, 3, 16);
	echo "The odd no ";
	print_r(array_filter($number, function ($data1) {
		return ($data1 & 1);
	}));

	echo "<br>" . "The even no ";
	print_r(array_filter($number, function ($data2) {
		return !($data2 & 1);
	}));



	?>

</body>

</html>