<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Ingresos</title>
</head>
<body>

    <h2>Ingrese su nombre e ingresos anuales:</h2>

    <form action="practica13v2.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="ingresos">Ingresos anuales:</label><br>
        <select id="ingresos" name="ingresos">
            <option value="1-1000">1 - 1000</option>
            <option value="1001-3000">1001 - 3000</option>
            <option value=">3000">> 3000</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>