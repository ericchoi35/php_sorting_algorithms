<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Sorting Algorithm Assignment"/>
		<title>Sorting Algorithm Assignment</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript">

		var numbers = [];

		function random_numbers(array){
			for(var i = 0; i < 100; i++){
				array[i] = Math.floor(Math.random() * 10000);
			}
			return array;
		}

		random_numbers(numbers);

		console.log(numbers);

		function selection_sort1(array){
			for(var i = 0; i < array.length; i++){
				var min = array[i];
				var max = array[i];
				var num_min = j;
				var num_max = j;
				for(var j = i; j < array.length; j++){
					if(array[j] < min){
						min = array[j];
						num_min = j;
					} else if(array[j] > max){
						max = array[j];
						num_max = j;
					}
				}
				temp = array[num_min];
				array[num_min] = array[num_max];
				array[num_max] = temp;
			}
			return array;
		}

		selection_sort1(numbers);

		console.log(numbers);

		</script>
	</head>
	<body>
		
	</body>
</html>