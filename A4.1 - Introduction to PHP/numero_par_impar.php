<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Par o Impar</title>
</head>
<body>
    <h1>Comprobación de números: par o impar</h1>
    <?php
    $numero = 1; // Valor inicial
    $limite = 10; // Número de iteraciones

    while ($numero <= $limite) {
        if ($numero % 2 == 0) {
            echo "<p>$numero es par.</p>";
        } else {
            echo "<p>$numero es impar.</p>";
        }
        $numero++; // Incrementar el valor de la variable
    }
    ?>
</body>
</html>