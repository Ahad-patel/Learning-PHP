<!DOCTYPE html>
<html>
<head>
	<title>Heirarchical Inheritance</title>
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
		public $sum;
		function addition()
		{

			$this->sum = $this->a + $this->b;
			echo "The sum of number is $this->sum <br>";
		}
	}

	class Daughter extends Father
	{
		public $multi;
		function multiply() {

			$this->multi = $this->a * $this->b;
			echo "The sum of number is $this->multi <br>";
		}		
	}

$objs = new Son;
$objd = new Daughter;

$objs->assign(20,40);
$objs->addition();

$objd->assign(10,5);
$objd->multiply();

  ?>

</body>
</html>