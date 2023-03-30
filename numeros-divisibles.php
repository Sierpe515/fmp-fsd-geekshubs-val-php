<?php
    function nCountDivide($numI = 1){
        foreach (range(1, $numI) as $i){
            if ($i%3===0 && $i%5===0) {
                echo $i."fizzbuzz</br>";
            } elseif ($i%3===0){
                echo $i."fizz</br>";
            } elseif ($i%5===0) {
                echo $i."buzz</br>";
            } else {
                echo $i."</br>";
            }
        }
    }

    print_r (nCountDivide(100))
?>