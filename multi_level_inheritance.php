<!DOCTYPE html>
<html>

<head>
	<title>Multi-level Inheritance</title>
</head>

<body>
	<?php
	class Father
	{

		public $a;
		public $b;

		function assign($x, $y)
		{
			$this->a = $x;
			$this->b = $y;
		}
	}


	class Son extends Father
	{

		function add()
		{

			return $this->a + $this->b;
		}
	}

	class GrandSon extends Son
	{
		public $sum;

		function display()
		{
			//$this->sum = $this->add();
			echo "The first number is $this->a <br>";
			echo "The second number is $this->b <br>";
			echo "The sum of number is " . $this->add() . " <br>";
		}
	}

	$obj = new GrandSon;
	$obj->assign(20, 50);
	$obj->display();


	?>
</body>

</html>