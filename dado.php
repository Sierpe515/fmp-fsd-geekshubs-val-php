<?php
    function dado($nDado = 1, $numMin =  1, $numMax = 1){
        $total = 0;
        $suma = [];
        for ($i = 0; $i < $nDado; $i++){
            $result = rand($numMin, $numMax);

            $suma[] = $result;
            $total += $result;
            $suma["suma"] = $total;
        };
        return $suma;
    }

    print_r (dado(2, 1, 6));
?>