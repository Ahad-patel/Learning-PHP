<!DOCTYPE html>
<html>
<head>
	<title>True and false values in php</title>
</head>
<body>
<?php 

$a = array(0,0.0,"","0",false,null);

foreach ($a as $value) {
	if ($value == false) {		
    echo "The value of $value is false";
	echo "<br>";	}
	
}

 ?>
</body>
</html>