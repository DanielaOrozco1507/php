<html>
<head>
    <title>EJERCICIO 3_1:ANALISIS DE FORMULARIOS</title>
</head>
<body>
<h1>analisis de formularios (analsis php)</h1>

<?php
 if($_POST['gender']==0){
    echo"hola sr. ";
}else{
    echo"hola sra. ";
}

echo"br>{$_POST['Lastname']}</br>, encantado de saludarte.";
?>
</body>
</html>

