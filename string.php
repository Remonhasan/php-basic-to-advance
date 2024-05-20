<?php

// Single and double quotes are used to define string
$name = 'Flavo';
$name = "Flavo";

$fullNameDoubleQuote = "My name is $name\n";
$fullNameSingleQuote = 'My name is $name';

echo $fullNameDoubleQuote;
echo $fullNameSingleQuote;
echo "\n";

// String concatenation
$firstName = "Kabir";
$lastName = "Hasan";

$fullName = $firstName . " " . $lastName;
echo $fullName;
echo "\n";

// string length
echo strlen($fullName);
echo "\n";

// string partition 
$sampleName = 'Flavio';
echo substr($sampleName, 3);  //"vio" - start at position 3, get all the rest
echo "\n";
echo substr($sampleName, 2, 2); //"av" - start at position 2, get 2 items
echo "\n";

// string replace
echo str_replace('avio', 'ower', $sampleName);
echo "\n";
?>