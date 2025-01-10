<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor o Menor de Edad</title>
</head>
<body>
    <h1>
        <?php
        $nombre = "Jorge";
        $edad = 19;

        if ($edad >= 18) {
            echo "Hola $nombre, tienes $edad años. Eres mayor de edad.";
        } else {
            echo "Hola $nombre, tienes $edad años. Eres menor de edad.";
        }
        ?>
    </h1>
</body>
</html>