<?php
$hora= date ("h:i:s");
$fecha= date ("j n Y");
echo "$hora</br>";
echo "$fecha</br>";
$fecha = substr($fecha,3,5);
echo $fecha;
?> 
<?php
$fecha= date ("j / n / Y");
echo "<p align=right>Fecha Actual: $fecha</p></br>";
$fecha = substr($fecha,7,8);
echo $fecha;
?> 
