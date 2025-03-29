<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Deportes</title>
</head>
<body>

    <h2>Ingrese su nombre y seleccione los deportes que practica:</h2>

    <form action="practica12v2.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br><br>

        <p>Deportes:</p>
        <input type="checkbox" id="futbol" name="deportes[]" value="futbol">
        <label for="futbol">Fútbol</label><br>

        <input type="checkbox" id="basket" name="deportes[]" value="basket">
        <label for="basket">Baloncesto</label><br>

        <input type="checkbox" id="tennis" name="deportes[]" value="tennis">
        <label for="tennis">Tenis</label><br>

        <input type="checkbox" id="voley" name="deportes[]" value="voley">
        <label for="voley">Voleibol</label><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>