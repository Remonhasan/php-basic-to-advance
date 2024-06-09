<?php 

function duplicateNumbersXOR($nums) {
    $countArray = array_count_values($nums);
    $xorResult = 0;
    foreach ($countArray as $value => $count) {
        if ($count === 2) {
            $xorResult ^= $value;
        }
    }

    return $xorResult;
}

?>