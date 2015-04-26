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
$d1=$_POST['d1'];
if($d1==0){echo "Debe seleccionar Liceo";}
else
{
$d2=$_POST['d2'];
if($d2==0){echo "Debe seleccionar Grupo";}
else
{
$d3=$_POST['d3'];
if($d3==0){echo "Debe seleccionar A&#241;o";}
else
{
// Select Con Carga en Tablas
require_once "./resurces/conexion.php";
$conn = dbConnect();
$consulta = "SELECT * FROM Alumnos where AnioA='$d3' AND LiceoFK='$d1' AND GrupoFK='$d2' ";
$result = $conn->query($consulta);
if (!$result) {
    echo"<p>Error en la consulta.</p></br>";
} 
else 
{
?>
<table border=1>
<tr><th colspan=13 algin=center><?php echo "Grupo Seleccionado";?></th></tr>
	<tr><th colspan=13 algin=center></br></th></tr>
<tr><td>Nombre</td><td>Apellido</td><td>Padre</td><td>Nivel de estudios</td><td>Madre</td><td>Nivel de estudios</td><td>Tutor</td><td>Nivel de estudios</td><td>Hermanos</td><td>Cantidad</td><td>Nivel de estudios</td><td>Trabaja</td><td>Ayudas</td></tr>
   <?php
    foreach ($result as $valor) {
	$padre=$valor['Padre'];
	if($padre==0){$padre="No";}else{$padre="Si";}
	$madre=$valor['Madre'];
	if($madre==0){$madre="No";}else{$madre="Si";}
	$tutor=$valor['Tutor'];
	if($tutor==0){$tutor="No";}else{$tutor="Si";}
	$hermanos=$valor['Hermanos'];
	if($hermanos==0){$hermanos="No";}else{$hermanos="Si";}
	$trabaja=$valor['Trabaja'];
	if($trabaja==0){$trabaja="No";}else{$trabaja="Si";}
	$npadre=$valor['NivPadre'];
	$nmadre=$valor['NivMadre'];
	$ntutor=$valor['Nivtutor'];
	$nhermanos=$valor['NivHermanos'];
	if($npadre==0){$npadre="-";}
	else{
		if($npadre==1){$npadre="Primaria";}
		else{
			if($npadre==2){$npadre="Ciclo Basico";}
			else{
				if($npadre==3){$npadre="Bachillerato";}
				else{$npadre="Terciario";}}}}
	if($nmadre==0){$nmadre="-";}
	else{
		if($nmadre==1){$nmadre="Primaria";}
		else{
			if($nmadre==2){$nmadre="Ciclo Basico";}
			else{
				if($nmadre==3){$nmadre="Bachillerato";}
				else{$nmadre="Terciario";}}}}
	if($ntutor==0){$ntutor="-";}
	else{
		if($ntutor==1){$ntutor="Primaria";}
		else{
			if($ntutor==2){$ntutor="Ciclo Basico";}
			else{
				if($ntutor==3){$ntutor="Bachillerato";}
				else{$ntutor="Terciario";}}}}
	if($nhermanos==0){$nhermanos="-";}
	else{
		if($nhermanos==1){$nhermanos="Primaria";}
		else{
			if($nhermanos==2){$nhermanos="Ciclo Basico";}
			else{
				if($nhermanos==3){$nhermanos="Bachillerato";}
				else{$nhermanos="Terciario";}}}}
        echo "<tr><td>$valor[Nombre]</td><td>$valor[Apellido]</td><td>$padre</td><td>$npadre</td><td>$madre</td><td>$nmadre</td><td>$tutor</td><td>$ntutor</td><td>$hermanos</td><td>$valor[CantHermanos]</td><td>$nhermanos</td><td>$trabaja</td><td>$valor[Ayuda]<td></tr>";
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
