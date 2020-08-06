<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
  $no = array(12,3,4,65,11,45);
 $maximum=maxval($no);
 echo "The maximum value is =".$maximum;
  ?>

</body>
</html>



<?php 

function maxval($num)
	{	
			$max = $num[0];
			  foreach ($num as  $value) 
				{ 
					if($max < $value)
					{

						$temp= $value;
						$value= $max;
						$max = $temp;	
					}
				}
				return $max;
	}

 ?>