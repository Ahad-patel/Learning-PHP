<!DOCTYPE html>
<html>

<head>
	<title>Array map example 1</title>
</head>

<body>
	<?php
	$a = array("Apple", "Pear", "Orange", "Pineapple", "Banana");

	$fruits = array_map(function ($value) {
		return strtoupper($value);
	}, $a);

	print_r($fruits);
	?>

</body>

</html>