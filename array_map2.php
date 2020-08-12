<!DOCTYPE html>
<html>

<head>
	<title>Array Map example 2</title>
</head>

<body>
	<?php

	function simple($value)
	{

		return ($value * $value);
	}

	$a = array(1, 2, 3, 4, 5);

	$sqrt = array_map("simple", $a);

	print_r($sqrt);

	?>

</body>

</html>