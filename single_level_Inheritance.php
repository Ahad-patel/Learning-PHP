<!DOCTYPE html>
<html>

<head>
	<title>Single level Inheritance</title>
</head>

<body>
	<?php
	class Father
	{
		public $a;
		public $b;

		function assign($a, $b)
		{
			$this->a = $a;
			$this->b = $b;
		}
	}

	class Son extends Father
	{
		public $sum;
		function addition()
		{

			$this->sum = $this->a + $this->b;
			echo "The sum of number is $this->sum <br>";
		}
	}

	$obj = new Son;
	$obj->assign(10, 20);
	$obj->addition();

	?>
</body>

</html>