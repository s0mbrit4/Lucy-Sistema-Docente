<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;' name='viewport' />
</head>
<body bgcolor=#E1DEDE>
<?php
$fecha= date ("j-n-Y");
echo "<p align=right>Fecha Actual: $fecha</p></br>";
?> 
    <table>
        <tr>
           <th colspan="3">Funciones</th>
        </tr>
        <tr>
            <td colspan="3"></br></td>
        </tr>
        <tr>
           <td><a href="./AltaGrupos.php">Alta Grupos</a></td><td width=30></td><td><a href="./AltaLiceos.php">Alta Liceos</a></td>
        </tr>
	<tr>
           <td><a href="./VerGrupos.php">Ver Grupos</a></td><td width=30></td><td><a href="./SelectLiceos.php">Ver Liceos</a></td>
        </tr>
	<tr>
           <td><a href="./SelectLiceo2.php">Ver Alumnos</a></td></td><td width=30></td><td><a href="./SelectLiceo3.php">Ver Situaciones Familiares</a></td>
        </tr>
        <tr>
            <td><a href="./Tolerancias.php">Adaptacion Circular</a><td></td><td>Inasistencias(Proximamente)</td>
        </tr>
        <tr>
            <td><a href="./Estadisticas.php">Estadisticas</td><td></td><td>Conducta(Proximamente)</td>
        </tr>
        <tr>
            <td>Objetivos Grupales(Proximamente)</td><td></td><td>Objetivos Alumnos(Proximamente)</td>
        </tr>
	<tr>
	<th colspan=3 algin=center></br><input type="button" value="Volver" onclick="history.back()"></th>
	</tr>
    </table>
</body>
<html>
