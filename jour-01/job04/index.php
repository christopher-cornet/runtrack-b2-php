<?php

function my_fizz_buzz($num) {

	$result = [1];
	$i = 1;

	while ($num > 1) {

		$i++;
		
		if ($num % 3 == 0 && $num % 5 == 0) {
			array_push($result, "FizzBuzz");
		}
		elseif ($num % 3 == 0) {
			array_push($result, "Fizz");
		}
		elseif ($num % 5 == 0) {
			array_push($result, "Buzz");
		}
		else {
			array_push($result, $i);
		}
		
		var_dump($result);
		$num--;
		
	}
	
	return $result;

}

my_fizz_buzz(10);

?>