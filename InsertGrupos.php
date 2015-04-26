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
$grado = $_POST['grado'];
if($grado=="" || !is_numeric($grado) || $grado < 1 || $grado > 6){echo"Ingrese datos correctamente</br>";}
else{
	$grupo = $_POST['grupo'];
	if($grupo=="" || !is_numeric($grupo) || $grado < 1){echo"Ingrese datos correctamente</br>";}
	else
		{
		$e1=$_POST['e1'];
		if ($e1=="" || $e1==0){echo"Seleccione liceo";}
		else
		{
		$e2=$_POST['e2'];
		if ($e2=="" || $e2==0){echo"Seleccione tipo de curso";}
		else
		{
		$comp = $grado.$grupo.$e1.$e2;
		$consulta = "SELECT Grado, Grupo, FKliceo, TipoCurso FROM Grupos where Grado=$grado AND Grupo=$grupo AND FKliceo=$e1 AND TipoCurso=$e2";
		$result = $conn->query($consulta);
    		foreach ($result as $elemento)
			{
				$comp2 = $elemento[0].$elemento[1].$elemento[2].$elemento[3];      			
				if ($comp == $comp2)
				{
					echo "Error grupo ya ingresado</br>";
					echo "<input type=button value= Volver onclick=history.back() style=font-family: Verdana; font-size: 10 pt>";
					die;
				}
			}
		require_once "./resurces/conexion.php";
		$conn = dbConnect();
		$consulta2 = "INSERT INTO Grupos set Grado=$grado, Grupo=$grupo, FKliceo=$e1, TipoCurso=$e2";
 		$conn->query($consulta2);
		echo "Grupo ingresado correctamente </br>";
		}
	}}}
?>
<input type="button" value="Volver" onclick="history.back()" style="font-family: Verdana; font-size: 10 pt">
</body>
</html>
