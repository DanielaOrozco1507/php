<?php

$nombre = $_POST["nombre"];
$ingresos = $_POST["ingresos"];

if ($ingresos == ">3000") {
    echo "<h1>$nombre, debes pagar impuestos a las ganancias.</h1>";
} else {
    echo "<h1>$nombre, no debes pagar impuestos a las ganancias.</h1>";
}

?>