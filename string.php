<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    
    $vowel_count = 0;
    
    foreach (str_split($string) as $char) {
        if (in_array($char, $vowels)) {
            $vowel_count++;
        }
    }
    
    $reversed_string = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed_string .= $string[$i];
    }
    
    echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string\n";
}
