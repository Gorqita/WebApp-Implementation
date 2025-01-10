<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Formulario</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST["nombre"]);
        $edad = (int) $_POST["edad"];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Edad: $edad</p>";

        if ($edad >= 18) {
            echo "<p>$nombre, eres mayor de edad.</p>";
        } else {
            echo "<p>$nombre, eres menor de edad.</p>";
        }
    } else {
        echo "<p>No se han enviado datos.</p>";
    }
    ?>
</body>
</html>