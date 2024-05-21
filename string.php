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

// trim 
$text   = "\t\tThese are a few words :) ...  ";
$trimmed = trim($text);
var_dump($trimmed);
echo "\n";

$hello  = "Hello World";
$trimmedHello = trim($hello, "Hdle");
var_dump($trimmedHello);

echo "\n";

// string upper and lower
$myName = "FLavio";
echo strtoupper($myName);
echo "\n";
echo strtolower($myName);
echo "\n";
// First word is uppercase
echo ucfirst($myName);
echo "\n";

// finds the firsts occurrence of a substring in the string
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);
echo $pos;

echo "\n";

// Split a string into an array
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);

echo $pieces[0]; // piece1
echo "\n";
echo $pieces[1]; // piece2
echo "\n";
echo $pieces[2]; // piece3

echo "\n";

// join array elements in a string
$array = ['lastname', 'email', 'phone'];
echo (implode(",", $array));

?>