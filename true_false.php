<!DOCTYPE html>
<html>

<head>
	<title>True and false values in php</title>
</head>

<body>
	<?php

	$a = array(0, 0.0, "", "0", false, null);

	echo "The comparison through == is <br>";

	foreach ($a as $key => $value) {

		if ($value == false) {
			echo "The key ($key) of $value is false";
			echo "<br>";
		}
	}


	echo "<br> <br>";

	echo "The comparison through === is <br>";

	foreach ($a as $key2 => $value2) {

		if ($value2 === false) {
			echo "The key ($key2) of $value2 is false";
			echo "<br>";
		}
	}


	echo "<br> <br>";

	echo "The comparison directly through array is <br>";
	foreach ($a as $key1 => $value1) {
		if (array($a)) {
			echo "The key ($key1) of $value1 is false";
			echo "<br>";
		}
	}

	?>
</body>

</html>