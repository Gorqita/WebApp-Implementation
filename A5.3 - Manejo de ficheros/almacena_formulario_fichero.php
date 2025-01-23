<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = htmlspecialchars($_POST['username']);
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Reseteo de datos
    $line = "$username;$name;$surname;$email;$password\n";

    // Ruta de almacenamiento de datos
    $filePath = 'usuarios_registrados.txt';

    // Escribir los datos en el archivo
    if (file_put_contents($filePath, $line, FILE_APPEND | LOCK_EX)) {
        echo "Los datos han sido almacenados correctamente.";
    } else {
        echo "Error al almacenar los datos.";
    }
} else {
    echo "Método no permitido.";
}
?>
