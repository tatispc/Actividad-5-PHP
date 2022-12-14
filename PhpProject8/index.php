<!DOCTYPE html>
<!--
Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe
mostrar en una tabla (<table> en HTML).
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Problema8</title>
    </head>
    <body>
    <center> 
        <h1>Tabla de Multiplicar</h1> 
        <form action=" " method="GET">
         <input type="number" min="1" name="cajanumero" required><br>   
         <input type="submit" value="Crear tabla"/>   
        </form>
   
        <?php
        if (isset($_GET ['cajanumero'] ))
            { $numeroingresado = $_GET ['cajanumero'];
            echo "<table border='1'><br>";
            echo "<h3> tabla del $numeroingresado</h3>";
            
            for($i=1; $i <= 12; $i++)
         { 
            $valor = $i * $numeroingresado;
            echo "<tr>";
            echo "<td> &nbsp; $i x $numeroingresado &nbsp;</td>";
            echo "<td> &nbsp; $valor &nbsp;</td>"; 
            echo "</tr>";
            }
           echo "</table>";   
            }  
        ?>
    </body>
</html>
