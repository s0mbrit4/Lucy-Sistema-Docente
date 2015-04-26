<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;' name='viewport' />
</head>
<body bgcolor=#E1DEDE>
<?php
$fecha= date ("j-n-Y");
echo "<p align=right>Fecha Actual:$fecha</p></br>";
$fecha = substr($fecha,4,5);
$fecha2 = $fecha-70;
$fecha3 = $fecha-12;
require_once "./resurces/conexion.php";
$conn = dbConnect();
?> 
<?php
    	$a1=$_POST['a1'];
	$a1 = ucwords(strtolower($a1));
	$a2=$_POST['a2'];
	$a2 = ucwords(strtolower($a2));
	$a3=$_POST['a3'];
	$a3 = ucwords(strtolower($a3));
	$a4=$_POST['a4'];
	$a4 = ucwords(strtolower($a4));
	$a5=$_POST['a5'];
    	$a6=$_POST['a6'];
	$a7=$_POST['a7'];
	$a9=$_POST['a9'];
    	$a10=$_POST['a10'];
    	$a11=$_POST['a11'];
    	$a12=$_POST['a12'];
	$a13=$_POST['a13'];
	$a14=$_POST['a14'];
	$a15=$_POST['a15'];
	$a16=$_POST['a16'];
    	$a17=$_POST['a17'];
	$a18=$_POST['a18'];
	$a19=$_POST['a19'];
	$a20=$_POST['a20'];
	$a21=$_POST['a21'];
	$a22=$_POST['a22'];
   	$a23=$_POST['a23'];
	$a24=$_POST['a24'];
	$a25=$_POST['a25'];
	$a26=$_POST['a26'];
	$a27=$_POST['a27'];
//Chequeo datos obligatorios sean ingresados.
if ($a1=="" || $a2=="" || $a3=="" || $a4=="" || $a5=="" ||$a6=="" || $a7=="" || $a8=="0" || $a9=="0" || $a13=="0" || $a14=="") {echo"Debe ingresar aun datos obligatorios <br>";}
else{
//Chequeo fecha correcta.
if (strlen($a7)!=4){echo"A&#241;o debe contener 4 caracteres</br>";}
else{
if (strlen($a6)!=2){echo"Mes debe contener 2 caracteres</br>";}
else{
if (strlen($a5)!=2){echo"Dia debe contener 2 caracteres</br>";}
else{
if (!is_numeric($a5) || !is_numeric($a6) || !is_numeric($a7)) {
echo "Ingrese una fecha valida DD-MM-AAAA <br>";}
{
if($a7<$fecha2 || $a7>$fecha3){echo"A&#241;o de nacimiento fuera del rango permitido</br>";}
else
{
if(checkdate($a6, $a5, $a7)!=1){echo"Fecha no valida</br>";}
else
{
//Combierto checkbox en datos bool .
if (isset($a10)) {
    $a10="1";
}
else
$a10="0";
if (isset($a11)) {
    $a11="1";
}
else
$a11="0";
if (isset($a12)) {
    $a12="1";
}
else
$a12="0";
if (isset($a16)) {
    $a16="1";
}
else
$a16="0";
if (isset($a18)) {
    $a18="1";
}
else
$a18="0";
if (isset($a20)) {
    $a20="1";
}
else
$a20="0";
if (isset($a22)) {
    $a22="1";
}
else
$a22="0";
if (isset($a25)) {
    $a25="1";
}
else
$a25="0";
//Chequeo ingreso de al menos un tutor legal.
if ($a16=="0" && $a18=="0" && $a20=="0"){echo "Usted debe ingresar al menos un adulto a cargo <br>";}
else{
//Chequeo que el alunmo no exista en la base de datos
	$comp = "$a1$a2$a7-$a6-$a5";
	$consulta = "select Nombre, Apellido, FechaNac from Alumnos Where Nombre='$a1' AND Apellido='$a2' AND FechaNac='$a7-$a6-$a5'";
	$result = $conn->query($consulta);
    	foreach ($result as $elemento)
		{
			$comp2 = $elemento[0] . $elemento[1] . $elemento[2];      			
			if ($comp == $comp2)
			{
				echo "Error alumno ya ingresado</br>";
				echo "<input type=button value= Volver onclick=history.back() style=font-family: Verdana; font-size: 10 pt>";
				die;
			}
		}
//Inserto datos
	require_once "./resurces/conexion.php";
	$conn = dbConnect();
	$consulta2 = "INSERT INTO Alumnos set AnioA='$fecha', Nombre='$a1', Apellido='$a2', FechaNac='$a7$a6$a5', Ciudad='$a3', Nacionalidad='$a4', email='$a15', LiceoFK='$a27', GrupoFK='$a9', Computadora='$a10', Ceibal='$a11', Internet='$a12', Transporte='$a13', Distancia='$a14', Padre='$a16', NivPadre='$a17', Madre='$a18', NivMadre='$a19', Tutor='$a20', NivTutor='$a21', Hermanos='$a22', CantHermanos='$a23', NivHermanos='$a24', Trabaja='$a25', Ayuda='$a26';";
	$conn->query($consulta2);
echo "Alumno ingresado</br>";

}}}}}}}}?>
<input type="button" value="Volver" onclick="history.back()"">
</body>
</html>
