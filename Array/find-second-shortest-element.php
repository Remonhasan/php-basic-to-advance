<?php

$myArray = [5,2,8,1,7];
sort($myArray);
// print the shorted array
foreach($myArray as $value){
    // echo $value;
}
// print the second largest element
echo $myArray[1];
echo "\n";
// print the largest element
echo $myArray[count($myArray)-1];
?>