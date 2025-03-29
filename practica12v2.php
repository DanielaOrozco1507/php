<?php

$nombre = $_POST["nombre"];
$deportes = $_POST["deportes"];

$cantidadDeportes = count($deportes);

echo "<h1>$nombre, practicas $cantidadDeportes deportes.</h1>";

?>