<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $platos = [
        "Carpaccio" => [
            "titulo" => "El primero",
            "numero_comensales" => "2",
            "tipo_plato" => "entrante",
            "precio" => 8.50
        ],
        "Arroz al horno" => [
            "titulo" => "El de toda la vida",
            "numero_comensales" => "1",
            "tipo_plato" => "primer plato",
            "precio" => 12.50
        ],
        "Hamburguesa angus" => [
            "titulo" => "La definitiva",
            "numero_comensales" => "1",
            "tipo_plato" => "segundo plato",
            "precio" => 18.50
        ]
    ];

    echo "<ol>";
    foreach ($platos as $key => $plato) {
        echo "<li>";
        echo "Título: ".$plato["titulo"];
        echo "<ul>";
        echo "<li>";
        echo "Número de comensales: ".$plato["numero_comensales"];
        echo "</li>";
        echo "<li>";
        echo "Tipo de plato: ".$plato["tipo_plato"];
        echo "</li>";
        echo "<li>";
        echo "Precio: ".$plato["precio"];
        echo "</li>";
        echo "</ul>";
        echo "</li>";
    }
    echo "</ol>"
    ?>

</body>

</html>