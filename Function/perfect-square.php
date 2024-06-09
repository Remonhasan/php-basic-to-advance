<?php
function perfectSquare (int $n){
    if($n < 0) return false;
    $sqrt_n = sqrt($n);

    return $sqrt_n * $sqrt_n == $n;
}

if(perfectSquare(5)){
    echo "Perfect Square";
}else{
    echo "Not Perfect Square";
}

?>