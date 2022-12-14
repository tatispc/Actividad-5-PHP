<!DOCTYPE html>
<!--
Realice un programa en PHP que implemente las siguientes funciones
a. Implementar la función mayor(x, y)

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Problema3a</title>
    </head>
    <body>
        <form method="POST" action="">
                Primer número:  <input type="text" name="n1"><br>
                Segundo número: <input type="text" name="n2"><br>
                <input type="submit" value="calcular mayor" name="calcular"><br>
        </form>
        <?php
    function getMayor($num_1=0, $num_2=0) {
        if ($num_1 > $num_2) {
        return $num_1;
    } else {
        return $num_2;
    }
}
 
/** @var type $_POST */
if (isset($_POST['n1']) && isset($_POST['n2'])) {
        $num_1 = ($_POST['n1']) ? $_POST['n1'] : 0;
        $num_2 = ($_POST['n2']) ? $_POST['n2'] : 0;
 
        if ($num_1 || $num_2) {
                echo "De los números {$num_1} y {$num_2} es mayor: ";
                echo getMayor($num_1, $num_2);
        }
}
        ?>
    </body>
</html>
