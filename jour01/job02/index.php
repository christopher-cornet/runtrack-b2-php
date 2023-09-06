<?php

function my_str_reverse($string) {

	$result = "";
	$index = 0;

    // While the index of $string has a value
	while (isset($string[$index])) {
		// Increase the index by one to get all the characters of $string
		$index++;
	}

	// Browse $string in reverse starting from the index
	while ($index > 0) {
		// Decrease the index by one to get all the characters of $string
		$index--;
		// Add the character at the index to the result
		$result .= $string[$index];
	}
	
	return $result;
}

echo my_str_reverse("Runtrack PHP");

?>