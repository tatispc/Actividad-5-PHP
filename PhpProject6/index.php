<!DOCTYPE html>
<!--
Una empresa española de servicios tiene un pequeño problema, quiere que indiquemos en
su página de inicio el día de la semana, tarea sencilla de no ser porque el servidor nos
proporciona el día en inglés mediante la función date().
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Problema6</title>
    </head>
    <body>
        <?php
        $dia_ingles = date('D');
if ( $dia_ingles == 'Mon' ) {
    echo 'Lunes';
} else if ( $dia_ingles == 'Tue' ) {
   echo 'Martes';
} else if ( $dia_ingles == 'Wed' ) {
   echo 'Miércoles';
} else if ( $dia_ingles == 'Thu' ) {
   echo 'Jueves';
} else if ( $dia_ingles == 'Fri' ) {
   echo 'Viernes';
} else if ( $dia_ingles == 'Sat' ) {
   echo 'Sábado';
} else { //por descarte es domingo
   echo 'Domingo';
}
        ?>
    </body>
</html>
