<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;' name='viewport' />
</head>
<body bgcolor=#E1DEDE>
<?php
$fecha= date ("j-n-Y");
echo "<p align=right>Fecha Actual: $fecha</p></br>";
?> 
	<form action="./AltaTolerancias.php" method="POST">
        <table>
            <tr><th colspan=2 algin=center>Registro de Tolerancias</th></tr>
            <tr><th colspan=2 algin=center></br></th></tr>
	    <tr><td>Id del Alumno:</td><td><input type="text" name="c1"></td></tr>
	    <tr><td>Adaptacion Circular:</td><td><input type="checkbox" name="c2"></td></tr>
	    <tr><th colspan=2 algin=center></br><input type="submit" name="terminar" ><input type="button" value="Volver" onclick="history.back()" "></th></tr>
</body>
</html>
