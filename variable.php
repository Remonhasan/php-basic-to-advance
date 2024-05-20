
<?php

/* 
1. Local Variable

Defination: A variable declared in a function is considered local.
*/

echo "1. Local Variable:\n";
$x = 65;
function localVariable()
{
    $x = 10;
    echo "Local Scope Value: $x\n";
    echo "=============================\n";
}
echo "Global Scope Value: $x\n";
localVariable();

/*
2. Functional Parameters

Defination: A function is a small unit of program which can take some input in the
form of parameters and does some processing and may return a value.
*/

echo "2. Functional Parameters:\n";
function addMultiply($value)
{
    $value = $value * 10;
    return $value;
}

$result = addMultiply(10);
echo "Functional Parameter Value: $result\n";
echo "=================================\n";


/*
3. Global Variable

Defination: A global variable can be accessed in any part of the program.
By placing the keyword GLOBAL in front of the variable that should be recognized as global.
*/

echo "3. Global Variable:\n";
$y = 25;
function showGlobal()
{
    global $y;
    $y++;
    echo "Global Variable Value: $y\n";
}

showGlobal();
echo "=================================\n";


/*
4. Static Variable

Defination: The values which are destroyed on the function's exit, 
a static variable will not lose its value when the function exits 
and will still hold that value should the function be called again.
*/

echo "4. Static Variable:\n";

function showStatic()
{
    static $count = 0;
    $count++;
    echo "Static Variable Value: $count\n";
}

showStatic();
showStatic();

echo "======= Constants==========\n";
define("MINSIZE", 50);
echo MINSIZE;
echo "\n";

echo "======= All Variables==========\n";
$intNum = 472;
$doubleNum = 29.3;
$boolean = true;
$string = 'Web Code Geeks';
$array = array("Pineapple", "Grapefruit", "Banana");

echo "integer: $intNum\n";
echo "float: $doubleNum\n";
echo "boolean: $boolean\n";
echo "string: $string\n";
echo "======= Array==========\n";
foreach ($array as $value) {
    echo $value . "\n";
}

?>





