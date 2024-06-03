<?php
function containsDuplicate($nums) {
    $count = array_count_values($nums);
    foreach($count as $value){
        if($value > 1) return "Has Duplicate";
    }

    return "No Duplicate";
}

$result = containsDuplicate([1,2,3,1]);
echo $result;
?>