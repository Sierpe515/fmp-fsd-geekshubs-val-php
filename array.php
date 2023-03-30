<?php
    $abc = ["A", "B", "C", "D", "E", "F", "G", "H", "I"];
    
    // 1.1 CALCULAR LONGITUD ARRAY
    // echo count($abc)

    // 1.2 OBTENER POSICION ALEATORIA ARRAY
    // print_r(array_rand($abc));

    // 1.2.5 OBTENER ELEMENTO ALEATORIO ARRAY
    // var_export($abc);
    // echo $abc[array_rand($abc)]

    // 2. ARRAY PLANETAS Y SACAR LISTADO
    // $planetas = ["Mercurio", "Venus", "La Tierra", "Marte", "Júpiter", "Saturno", "Urano", "Neptuno"];
    // echo var_dump($planetas);

    // 3. CONVERTIR STRING EN ARRAY
    // $string1 = "A,B,C";
    // $array1 = explode(",",$string1);
    // var_dump(array_reverse($array1));

    // 4. JUNTAR DOS ARRAYS
    // $array1 = [1, 2, 3];
    // $array2 = [4, 5, 6];
    // $resultado = array_merge($array1, $array2);
    // print_r($resultado);

    // 5. SEPARAR ARRAY NºPARES E IMPARES
    // $arrayNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    // $arrayPares = [];
    // $arrayImpares = [];
    // foreach ($arrayNumeros as $n){
    //     if ($n % 2 === 0){
    //         $arrayPares[]=$n;
    //     }
    // }
    // foreach ($arrayNumeros as $n){
    //     if ($n % 2 !== 0){
    //         $arrayImpares[]=$n;
    //     }
    // }
    // print_r($arrayImpares);
    // print_r($arrayPares);

    // 6. ARRAY NUMEROS >5
    // $arrayNumeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    // $arrayMayor5 = [];
    // foreach ($arrayNumeros as $n){
    //     if ($n > 5){
    //         $arrayMayor5[]=$n;
    //     }
    // }
    // print_r($arrayMayor5);

    // 7. COMPROBAR SI SE REPITEN ELEMENTOS ARRAYS
    $php = ["php", "laravel", "Funciones", "Arrays"];
    $php2 = ["Objetos", "Arrays", "strings"];
    $php3 = array_merge($php, $php2);
    print_r(array_values(array_diff_assoc($php3, array_unique($php3))));

?>