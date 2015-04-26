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
// Insertar datos db
require_once "./resurces/conexion.php";
$conn = dbConnect();
$c1 = $_POST['c1'];
if($c1=="" || !is_numeric($c1)){echo"Ingrese datos correctamente</br>";}
else{
	$c2 = $_POST['c2'];
	if($c2==""){echo"Ingrese datos correctamente</br>";}
	else
		{
		$c2=1;
		$comp = $c2;
		$consulta = "SELECT Tolerancia FROM Alumnos where IdAlumno=$c1";
		$result = $conn->query($consulta);
    		foreach ($result as $elemento)
			{
				$comp2 = $elemento[0];      			
				if ($comp == $comp2)
				{
					echo "Adaptacion ya ingresada</br>";
					echo "<input type=button value= Volver onclick=history.back() style=font-family: Verdana; font-size: 10 pt>";
					die;
				}
			}
		require_once "./resurces/conexion.php";
		$conn = dbConnect();
		$consulta2 = "Update Alumnos set Tolerancia=$c2 where IdAlumno=$c1";
 		$conn->query($consulta2);
		echo "Adaptacion circular ingresada correctamente </br>";
		}
	}
?>
<input type="button" value="Volver" onclick="history.back()" style="font-family: Verdana; font-size: 10 pt">
</body>
</html>
