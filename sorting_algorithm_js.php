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

		function selection_sort(array){
			for(var i = 0; i < array.length; i++){
				var min = array[i];
				var number = i;
				for(var j = i; j < array.length; j++){
					if(array[j] < min){
						min = array[j];
						number = j;
					}
				}
				temp = array[i];
				array[i] = array[number];
				array[number] = temp;
			}
			return array;
		}

		numbers = selection_sort(numbers);

		console.log(numbers);

		</script>
	</head>
	<body>
		
	</body>
</html>