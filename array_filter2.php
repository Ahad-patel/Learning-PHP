<!DOCTYPE html>
<html>

<head>
	<title>Array filter example 2</title>
</head>

<body>
	<?php
	$students = array("jim" => "fy", "tim" => "ty", "steave" => "sy", "cook" => "fy");

	function fy_students($data)
	{
		if ($data == "fy") {
			return ($data);
		}
	}

	print_r(array_filter($students, "fy_students"));

	?>

</body>

</html>