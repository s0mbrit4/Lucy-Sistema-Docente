<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;' name='viewport' />
</head>
<body bgcolor=#E1DEDE>
<?php
$fecha= date ("j-n-Y");
echo "<p align=right>Fecha Actual: $fecha</p></br>";
$cont1=0;
$cont2=0;
$cont3=0;
$cont4=0;
$cont5=0;
$cont6=0;
$cont7=0;
$cont8=0;
$cont9=0;
$cont10=0;
$cont11=0;
$f1=$_POST['f1'];
if($f1==0){echo "Debe seleccionar Liceo";}
else
{
$f2=$_POST['f2'];
if($f2==0){echo "Debe seleccionar Grupo";}
else
{
$f3=$_POST['f3'];
if($f3==0){echo "Debe seleccionar A&#241;o";}
else
{
// Select Con Carga en Tablas
require_once "./resurces/conexion.php";
$conn = dbConnect();
$consulta = "SELECT * FROM Alumnos where AnioA=$f3 AND LiceoFK=$f1 AND GrupoFK=$f2";
$result = $conn->query($consulta);
if (!$result) {
    echo"<p>Error en la consulta.</p></br>";
} 
else 
{
?>
<table border=1>
<tr><th colspan=2 algin=center><?php echo "Grupo Seleccionado";?></th></tr>
	<tr><th colspan=2 algin=center></br></th></tr>
<tr><td>Nombre</td><td>Distancia (km)</td></tr>
   <?php
    foreach ($result as $valor) {
				$dist=$valor[14];
				if($dist>10)
        			{$cont1++;}
				else{
				if($dist>5)
        			{$cont2++;}
				else{
				if($dist>1)
        			{$cont3++;}
				}
				$tran=$valor[13];
				if($tran==5)
        			{$cont4++;}
				}
				$padre=$valor[16];
				if($padre==0){$padre=0;}else{$padre=1;}
				$madre=$valor[18];
				if($madre==0){$madre=0;}else{$madre=1;}
				$tutor=$valor[20];
				if($tutor==0){$tutor=0;}else{$tutor=1;}
				if ($padre==1 && $madre==1 && $tutor==0)
				{$cont5++;}
				else{
				if (padre==1 && $madre==0 && $tutor==0)
				{$cont6++;}
				else{
				if ($padre==0 && $madre==1 && $tutor==0)
				{$cont7++;}
				else{
				if ($padre==0 && $madre==0 && $tutor==1)
				{$cont8++;}}}}
				$npadre=$valor[17];
				if($npadre>=3){$cont9++;}				
				$nmadre=$valor[19];
				if($nmadre>=3){$cont10++;}
				$ntutor=$valor[21];
				if($ntutor>=3){$cont11++;}
				}}
echo"<tr><td>Viven a mas de 10km</td><td>$cont1</td></td>";
echo"<tr><td>Viven a mas de 5km</td><td>$cont2</td></td>";
echo"<tr><td>Viven a mas de 1km</td><td>$cont3</td></td>";
echo"<tr><td>Viajan</td><td>$cont4</td></td>";
echo"<tr><td>Viven con sus dos padres</td><td>$cont5</td></td>";
echo"<tr><td>Viven con el padre</td><td>$cont6</td></td>";
echo"<tr><td>Viven con la madre</td><td>$cont7</td></td>";
echo"<tr><td>Viven con un tutor legal</td><td>$cont8</td></td>";
echo"<tr><td>Padre con secundaria completa</td><td>$cont9</td></td>";
echo"<tr><td>Madre con secundaria completa</td><td>$cont10</td></td>";
echo"<tr><td>Tutor con secundaria completa</td><td>$cont11</td></td>";
echo"</table>";
echo"<table>";
echo"<tr><td colspan=2></br></td></td>";
echo"<tr><td colspan=2><input type='button' value='Volver' algin='center' onclick='history.back()'></td></tr>";
$conn = dbClose();
		}
	}
}
?>
</table>
</body>
</html>
