<?php

function my_str_search($character, $string) {

    $occurrences = 0;
    $index = 0;

    // While the index of $string has a value
    while (isset($string[$index])) {
        // If the character in $string is equal to the character $character, increment the occurrences variable
        if ($string[$index] === $character) {
          $occurrences++;
        }
        // Increase index of one
        $index++;
    }
    
    // Return the number of occurrences
    return $occurrences;
}

my_str_search('P', 'Runtrack PHP');

?>