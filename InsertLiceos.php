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
$nombre = $_POST['nombre'];
if($nombre=="")
{
echo"Ingrese datos correctamente</br>";
}
else
{
	$nombre = ucwords(strtolower($nombre));
	$localidad = $_POST['localidad'];
		if($localidad=="")
		{
			echo"Ingrese datos correctamente</br>";
		}
		else
		{
			$localidad = ucwords(strtolower($localidad));
			$comp = $nombre.$localidad;
			$consulta = "SELECT Nombre, Localidad FROM Liceos where Nombre='$nombre' AND Localidad='$localidad'";
			$result = $conn->query($consulta);
			foreach ($result as $elemento)
			{
				$comp2 = $elemento[0] . $elemento[1];    			
				if ($comp == $comp2)
				{
					echo "Error liceo ya ingresado </br>";
					echo "<input type=button value= Volver onclick=history.back() style=font-family: Verdana; font-size: 10 pt>";
					die;
				}
			}
			require_once "./resurces/conexion.php";
			$conn = dbConnect();
			$consulta2 = "INSERT INTO Liceos set Nombre='$nombre', Localidad='$localidad'";
		 	$conn->query($consulta2);
			echo "Liceo ingresado correctamente </br>";
		}
}
?>
<input type="button" value="Volver" onclick="history.back()" style="font-family: Verdana; font-size: 10 pt">
</body>
</html>
