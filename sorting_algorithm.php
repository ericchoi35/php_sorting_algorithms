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

			function selection_sort($array)
			{	$time_start = microtime(true);
				for($i = 0; $i < count($array); $i++)
				{
					$min = $array[$i];
					$new_i = $i;

					for($j = $i; $j < count($array); $j++)
					{
						if($array[$j] < $min)
						{
							$min = $array[$j];
							$new_i = $j;
						}
					}
					$temp = $array[$i];
					$array[$i] = $array[$new_i];
					$array[$new_i] = $temp;
				}
				$time_end = microtime(true);
				$time = $time_end - $time_start;
				echo "ran selection_sort1 in " . $time . "seconds<br>";
				return $array;
			}

			$numbers1 = selection_sort($numbers);

			var_dump($numbers1);
		?>
	</body>
</html>