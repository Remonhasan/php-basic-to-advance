<?php

$array = [1, 2, 3, 1];
$duplicateFound = false;

for ($i = 0; $i < sizeof($array); $i++) {
    for ($j = $i + 1; $j < sizeof($array); $j++) {
        if ($array[$i] == $array[$j]) {
            echo "Found duplicate\n";
            $duplicateFound = true;
            break 2; // Exit both loops since duplicate is found
        }
    }
}

if (!$duplicateFound) {
    echo "No duplicate\n";
}

?>
