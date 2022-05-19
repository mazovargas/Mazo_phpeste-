<?php
require "peliculas.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cine</title>
</head>

<body>
    <h1>Programación</h1>
    <table>
        <thead>
            <tr>
                <th>Película</th>
                <th>Sala</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Costo Boleta</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?= $pelicula = isset($_SESSION['codigo']) ? $_SESSION['codigo'] : []; ?>

                <!-- foreach ($pelicula as $value) {
                    <td>       </td>-->
            </tr>
        </tbody>

        <button type="submit">Comprobar Disponibilidad</button>

    </table>

</body>

</html>