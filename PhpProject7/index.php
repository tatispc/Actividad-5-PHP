<!DOCTYPE html>
<!--
La tienda online comprasweb.com quiere realizar una mejora en el código de su web.
Necesita que la web, según lo almacenado en su carro de compras, muestre un mensaje u
otro al usuario. En concreto quiere que:
Si la compra es inferior a 30000 pesos se le muestre un mensaje en negrita diciendo:
'Compra más o te cobraremos 10000 de gastos de envío'.
Si la compra es superior a 30000 pesos pero inferior a 90000 pesos deberemos mostrar
un número indicando cuanto le falta para llegar a 90000 pesos y tener gastos de envío
gratuitos. Ejemplo: '¡¡¡Con solo 33.00 pesos más podrás tener gastos de envío gratis!!!'
Si la compra alcanza los 90000 pesos indicaremos un mensaje en negrita: 'Gastos de
envío incluidos ¡Vuelve pronto!'.
Para este problema disponemos de los siguientes datos:
La compra total viene en una variable $total_compra
Los mensajes en negrita deben utilizar la etiqueta <strong><\strong>
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Problema7</title>
    </head>
    <body>
<form action="" method="get">
 Ingrese el valor de la compra: <input type="number" id="total_compra" name="total_compra" placeholders=""><br>
 <input type="submit" value="Calcular"/>
</form>
               
        <?php
        $total_compra;
        
        /** @var type $_GET */
        $total_compra = $_GET['total_compra'];
        echo 'Valor total de la compra es:   ' ,$total_compra ;
       if ($total_compra  < 30000){
   echo '<strong><br>Compra más o te cobraremos 10000 pesos de gastos de envío';
} else if ($total_compra >= 30000 && $total_compra < 90000){
   $importe_faltante = 90000 - $total_compra;
   echo '<strong><br>¡¡¡Con solo ' . $importe_faltante . 'pesos más podrás tener gastos de envío gratis !!! ';
} else { //ha comprado 90000 pesos o más 
   echo '<strong><br>¡Gastos de envío incluídos ¡Vuelve pronto!' ;
  } 
    ?>
    </body>
</html>
