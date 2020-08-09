<!DOCTYPE html>
<html>
<head>
	<title>Array column example</title>
</head>
<body>
<?php 
	$a = array(
			array(
					"Id" => "100",
					"Name" => "John",
					"City" => "Ahmedabad",

				 ),
			array(
					"Id" => "200",
					"Name" => "Hook",
					"City" => "Surat",

				 ),
			array(
					"Id" => "300",
					"Name" => "Jim",
					"City" => "Varodra",

				 )


	);

	$names = array_column($a,"Name", "Id");
	print_r($names);

 ?>
</body>
</html>