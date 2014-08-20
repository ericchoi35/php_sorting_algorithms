<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Sorting Algorithm Assignment"/>
		<title>Sorting Algorithm Assignment</title>
	</head>
	<body>
		<?php

			function random_numbers()
			{
				for($i = 0; $i < 1000; $i++)
				{	
					$array[] = rand(0,1000);
				}
				
				return $array;
			}

			$numbers = random_numbers();

			function selection_sort1($array)
			{	$time_start = microtime(true);
				for($i = 0; $i < count($array); $i++)
				{
					$min = $array[$i];
					$max = $array[$i];
					$new_min = $i;
					$new_max = $i;

					for($j = $i; $j < count($array); $j++)
					{
						if($array[$j] < $min)
						{
							$min = $array[$j];
							$new_min = $j;
						} 
						else if($array[$j] > $max)
						{
							$max = $array[$j];
							$new_max = $j;
						}
					}
					$temp = $array[$new_min];
					$array[$new_min] = $array[$new_max];
					$array[$new_max] = $temp;
				}
				$time_end = microtime(true);
				$time = $time_end - $time_start;
				echo "ran selection_sort1 in " . $time . "seconds<br>";
				return $array;
			}
			
			$numbers1 = selection_sort1($numbers);
			
			var_dump($numbers1);
		?>
	</body>
</html>