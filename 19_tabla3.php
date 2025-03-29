<html>
    <head>
        <title>Tabla 3</title>
    </head>
    <body>
        <h1>Tabla condicional 3 variables globales</h1>
    <?php
    
        function muestra($valor){
            global $nrenglon;
            if($nrenglon%2)
            {
                $fondo="#ffff00";
            }else{
                $fondo="#ffffff";
            }
            if($valor<0.5)
            {
                $color="red";
            }else{
                $color="blue";
            }
            echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n";
        }
        echo"<table border='1'>";
        
        $nrenglon=0;
        for($x=0;$x<=2;$x+=.05)
        {
            echo"<tr>";
            muestra($x);
            muestra(sin($x));
            muestra(cos($x));
            echo"</tr>";
        }
    ?>
    </body>
</html>