<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;' name='viewport' />
</head>
<body bgcolor=#E1DEDE>
<?php
$fecha= date ("j-n-Y");
echo "<p align=right>Fecha Actual: $fecha</p></br>"; 
$g1=$_POST['g1'];
if($g1==0){echo "Debe seleccionar Liceo";}
else
{
// Select Con Carga en Tablas
require_once "./resurces/conexion.php";
$conn = dbConnect();
$consulta = "SELECT * FROM Grupos where FKliceo='$g1'";
$result = $conn->query($consulta);
if (!$result) {
    echo"<p>Error en la consulta.</p></br>";
} 
else 
{
?>
<table border=1>
<tr><th colspan=11 algin=center><?php echo "Grupo Seleccionado";?></th></tr>
	<tr><th colspan=11 algin=center></br></th></tr>
<tr><td>Id</td><td>Grado</td><td>Grupo</td></tr>
   <?php
    foreach ($result as $valor) {
	        echo "<tr><td>$valor[IdGrupo]</td><td>$valor[Grado]</td><td>$valor[Grupo]</td></tr>";
				}
			}
echo"</table>";
echo"<table>";
echo"<tr><td colspan=11></br></td></td>";
echo"<tr><td colspan=11><input type='button' value='Volver' algin='center' onclick='history.back()'></td></tr>";
$conn = dbClose();
		}
	

?>
</table>
</body>
</html>
