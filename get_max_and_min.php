<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Get Max And Min</title>
</head>
<body>
	<?php

	function get_max_and_min($numbers){

		$min = $numbers[0];
		$max = $numbers[0];

		foreach ($numbers as $key => $value) {
			if ( $value  < $min ) {
				$min = $value;
			}

			if ( $value > $max ) {
				$max = $value;
			}

		}
			$min_max_array = [ 'max' => $max, 'min' => $min];

			return $min_max_array;

	}

	$array_of_numbers = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02 );

	$output = get_max_and_min($array_of_numbers);

	var_dump($output);

	?>
</body>
</html>