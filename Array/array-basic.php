<?php
// Define empty array
$emptylist = [];
$emptylist = array();

// An array can be initialized with values
$list = [1, 2];
$list = array(1, 2);
// array print by loop
foreach($list as $value){
    echo $value;
    echo " ";
}
echo "\n";
echo "Print element: \n ";

// print individual element 
echo $list[0];
echo " ";
echo $list[1];


// Append Values 
$list[] = 2;
$list[] = 4;
echo "\n";
echo "Append Values: 2, 4\n ";
foreach($list as $value){
    echo $value;
    echo " ";
}

// Append value at the begin 
array_unshift($list,0);
echo "\n";
echo "Append Value at Beginning: 0\n ";
foreach($list as $value){
    echo $value;
    echo " ";
}

echo "\n";
echo "Find has element in array: 2\n ";
// find element has in array 
echo in_array(2,$list); // true
// Search element has in array and its index
echo array_search(2,$list); // output: 2

// Remove duplicate element in array
$list = array_unique($list); // Store the result of array_unique back to $list
echo "\n";
echo "Remove duplicate from array: \n ";
foreach($list as $value){
    echo $value;
    echo " ";
}

// Reverse array
$list = array_reverse($list); 
echo "\n";
echo "Array reverse: \n ";
foreach($list as $value){
    echo $value;
    echo " ";
}

// Reduce an array to a single value using a callback
echo "\n";
echo "Array reduce: \n ";
echo array_reduce($list, function($a, $b) {
    return $a + $b;
});

echo "\n";
echo "Missing element: \n ";
$array1 = [1, 2, 3, 5, 6, 7];
$missingNumber = array_values(array_diff(range(min($array1), max($array1)), $array1))[0];

echo $missingNumber;

echo "\n";
echo "Maximum element: \n ";
// Get maximum Value of the array 
$maximumValue = max($array1);
echo $maximumValue;

echo "\n";
echo "Minimum element: \n ";
// Get minimum Value of the array 
$minimumValue = min($array1);
echo $minimumValue;

echo "\n";
echo "Total Individual element Count: \n ";
$result = array_count_values($array1);
print_r($result);


echo "\n";
echo "Array Filter (even number): \n ";
function is_even($value) {
    return $value % 2 == 0;
}

// Use array_filter() to filter the array
$result = array_filter($array1, 'is_even');
print_r($result);


echo "\n";
echo "Array to String: \n ";
// Use implode() to join the array elements into a string
$result = implode(", ", $array1);
echo $result;
?>