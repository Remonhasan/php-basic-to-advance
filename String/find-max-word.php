<?php

$sentence = "This is a sample sentence";

// Split the sentence into words(array)
$words = explode(' ', $sentence);

// Use max() to find the longest word based on its length
$longestWord = max($words);

// Print the longest word
echo $longestWord . "\n";
// Print the longest
echo strlen($longestWord);

?>