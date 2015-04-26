<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;' name='viewport' />
</head>
<body bgcolor=#E1DEDE>
<?php
$fecha= date ("j-n-Y");
echo "<p align=right>Fecha Actual: $fecha</p></br>";
?> 
<?php 
$b1=$_POST['b1'];
if($b1==0){echo "Debe seleccionar Liceo";}
else
{
$b2=$_POST['b2'];
if($b2==0){echo "Debe seleccionar Grupo";}
else
{
$b3=$_POST['b3'];
if($b3==0){echo "Debe seleccionar A&#241;o";}
else
{
// Select Con Carga en Tablas
require_once "./resurces/conexion.php";
$conn = dbConnect();
$consulta = "SELECT * FROM Alumnos where AnioA='$b3' AND LiceoFK='$b1' AND GrupoFK='$b2' ";
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
<tr><td>Id</td><td>Nombre</td><td>Apellido</td><td>Cuidad</td><td>Nacionalidad</td><td>FechaNac</td><td>PC</td><td>Ceibalita</td><td>Internet</td><td>Transporte</td><td>Distancia (km)</td></tr>
   <?php
    foreach ($result as $valor) {
	$pc=$valor['Computadora'];
	if($pc==0){$pc="No";}else{$pc="Si";}
	$ceibal=$valor['Ceibal'];
	if($ceibal==0){$ceibal="No";}else{$ceibal="Si";}
	$internet=$valor['Internet'];
	if($internet==0){$internet="No";}else{$internet="Si";}
	$transporte=$valor['Transporte'];
	if($transporte==1){$transporte="Sin Transporte (A Pie)";}
	else{
		if($transporte==2){$transporte="Bicicleta";}
		else{
			if($transporte==3){$transporte="Moto";}
			else{
				if($transporte==4){$transporte="Automotor";}
				else{$transporte="Omnibus";}}}}
        echo "<tr><td>$valor[IdAlumno]</td><td>$valor[Nombre]</td><td>$valor[Apellido]</td><td>$valor[Ciudad]</td><td>$valor[Nacionalidad]</td><td>$valor[FechaNac]</td><td>$pc</td><td>$ceibal</td><td>$internet</td><td>$transporte</td><td>$valor[Distancia]</td></tr>";
				}
			}
echo"</table>";
echo"<table>";
echo"<tr><td colspan=11></br></td></td>";
echo"<tr><td colspan=11><input type='button' value='Volver' algin='center' onclick='history.back()'></td></tr>";
$conn = dbClose();
		}
	}
}
?>
</table>
</body>
</html>
