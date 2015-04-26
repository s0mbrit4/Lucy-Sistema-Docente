<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;' name='viewport' />
</head>
<body bgcolor=#E1DEDE>
<?php
// Select Con Carga en Tablas
require_once "./resurces/conexion.php";
$conn = dbConnect();
$consulta = "SELECT * FROM Liceos";
$result = $conn->query($consulta);
if (!$result) {
    echo"<p>Error en la consulta.</p></br>";
} else {
?>
<table border=1 width=800>
<tr><td>Id</td><td>Nombre Liceo</td><td>Localidad</td></tr>
   <?php
    foreach ($result as $valor) {
        echo "<tr><td>$valor[idLiceo]</td><td>$valor[Nombre]</td><td>$valor[Localidad]</td></tr>";
    }
}
echo"</table>";
echo"<table>";
echo"<tr><td colspan=11></br></td></td>";
echo"<tr><td colspan=11><input type='button' value='Volver' algin='center' onclick='history.back()'></td></tr>";
$conn = dbClose();
?>
<tr><th colspan=3 algin=center></br><input type="button" value="Volver" onclick="history.back()"></th></tr>
</table>
</body>
</html>
