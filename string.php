<?php

function getVowelCount($string){
    
    $count = 0;

    $string = strtolower($string);

    $stringLength = strlen($string);

    for($i = 0; $i < $stringLength; $i++){

        if($string[$i] == 'a' || $string[$i] == 'e' || $string[$i] == 'i' || $string[$i] == 'o' || $string[$i] == 'u'){

            $count++;
        
        }
    }

    return $count;
}



$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){

    $vowelCount = getVowelCount($string);

    $reverseString = strrev($string);

    printf("Original String: %s, Vowel Count: %d, Reversed String: %s\n", $string, $vowelCount, $reverseString);

}

?>