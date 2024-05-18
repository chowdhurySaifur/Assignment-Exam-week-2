<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $countVowels = preg_match_all('/[aeiou]/i', $string, $matches);
    $rvrsdStrings = strrev($string);
    echo "Original String: $string, Vowel Count: $countVowels, Reversed String: $rvrsdStrings </br>" ;
}
?>