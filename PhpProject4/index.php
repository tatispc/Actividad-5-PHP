<!DOCTYPE html>
<!--
 Escribe un programa que muestre tu horario de clase mediante una tabla. Intercalar código
PHP y html
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Problema4</title>
    </head>
    <body>
        <h1 align="center">Horario escolar</h1>

    <table align="center" border="4" bordercolor="purple"
    cellpadding="10" cellspacing="20">
      <tr>
        <th bgcolor="yellow">Hora</th><th>Lunes</th><th>Martes</th><th>Mi&eacute;rcoles</th>
<th>Jueves</th><th>Viernes</th>
</tr>
<tr>
<td>8-10</td><td align="center" colspan="3">Electiva 1 Desarrollo de software</td><td>Analisis y diseño de sistemas</td><td>Metodos numericos</td>
</tr>
<tr>
<td>10-12</td><td>Mantenimiento de Software</td><td>Metodos numericos</td><td>Analisis y diseño de sistemas</td>
<td>Historia</td><td>Base de datos</td>
</tr>
<tr>
<td>12-14</td><td>Mantenimiento de Software</td><td>Electiva 2 Desarrollo de software</td><td>Metodos numericos</td><td align="center" rowspan="2">Analisis y diseño de sistemas<br>y<br>Calculo 1</td><td>F&iacute;sica</td>
</tr>
<tr>
<td>15-17</td><td>Electiva 1 Desarrollo de software</td><td>Metodos numericos</td><td>Analisis y diseño de sistemas</td><td>Fisica</td></tr>
</table>
</body>
        
    </body>
</html>
