<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
  $no = array(12,3,4,11,45);
 $maximum=maxval($no);
 echo "The maximum value is =".$maximum;
  ?>

</body>
</html>



<?php 

function maxval($num)
	{	
			$max = $num[0];
			$i = 0;
			while($i<=4)  
				{ 
					if($max < $num[$i])
					{

						$temp= $num[$i];
						$num[$i] = $max;
						$max = $temp;	
					}
					$i++;
				}
				return $max;
	}

 ?>