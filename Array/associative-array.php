<?php
$list = ['first' => 'b', 'second' => 'a'];

echo $list['first']; //'a'
echo $list['second']; //'b'

echo "\n";
echo "Array Values: \n ";
// Use array_values() to get the values of the array
$values = array_values($list);
print_r($values);


echo "\n";
echo "Array Keys: \n ";
// Use array_values() to get the values of the array
$keys = array_keys($list);
print_r($keys);

echo "\n";
echo "Sorted Array by Values: \n ";
// Use asort() to sort the array by values in ascending order
asort($list);
print_r($list);

echo "\n";
echo "Sorted Array by Values (decending order): \n ";
// Use arsort() to sort the array by values in decending order
arsort($list);
print_r($list);


echo "\n";
echo "Sorted Array by Keys (ascending order): \n ";
// Use ksort() to sort the array by keys in ascending order
ksort($list);
print_r($list);


echo "\n";
echo "Sorted Array by Keys (decending order): \n ";
// Use krsort() to sort the array by keys in decending order
krsort($list);
print_r($list);

?>