<?php

function my_is_multiple($nb1, $nb2) {

	$result = $nb2 % $nb1;

	if ($result == 0) {
		return true;
	}
	else {
		return false;
	}

}

my_is_multiple(2, 4);

my_is_multiple(2, 5);

?>