<?php
    $frase = "la comida que más me gusta es el sushi";

    // 2. POSICIÓN PALABRA "GUSTA"
    // $buscarPalabra = "gusta";
    // echo $posicion_coincidencia = strrpos($frase, $buscarPalabra);

    // 3. REMPLAZAR PALABRA "MÁS" POR "MENOS"
    // echo $frase."</br>";
    // $reemplazar = str_replace("más", "menos", $frase);
    // echo $reemplazar;

    // 4. COMPROBAR SI CADENA CONTIENE PALABRA "PASTA"
    // $buscarPalabra = "pasta";
    // $posicion_coincidencia = strrpos($frase, $buscarPalabra);
    // if ($posicion_coincidencia === false) {
    //     echo "NO se ha encontrado la palabra deseada!!!!";
    //     } else {
    //             echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia;
    //             }

    // 5. INVERTIR ORDEN CADENA
    // echo strrev($frase)

    // 6. CONTAR LETRAS E
    // $letraE = 0;
    // foreach (count_chars($frase, 1) as $i=>$val){
    //     if(preg_match('/e/i',chr($i))){
    //         $letraE = $letraE + $val;
    //     }
    // }
    // echo "Letra E: ".$letraE

    // 7. CONVERTIR CADENA EN ARRAY
    $array = explode(" ",$frase);
    // echo count($array);
    var_dump($array);
?>