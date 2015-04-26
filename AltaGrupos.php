<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;' name='viewport' />
</head>
<body bgcolor=#E1DEDE>
<?php
$fecha= date ("j-n-Y");
echo "<p align=right>Fecha Actual: $fecha</p></br>";
?> 
	<form action="./InsertGrupos.php" method="POST">
        <table>
            <tr><th colspan=2 algin=center>Registro de Grupos</th></tr>
            <tr><th colspan=2 algin=center></br></th></tr>
	    <tr><td>Grado:</td><td><input type="text" name="grado"></td></tr>
	    <tr><td>Grupo:</td><td><input type="text" name="grupo"></td></tr>
	    <tr><td>Liceo:</td><td><?php
                require_once './resurces/conexion.php';
                $result = "";
                $conn = dbConnect();
                $combobox;
                $row2;
                $sql2 = 'SELECT * FROM Liceos';
                $stmt = $conn->query($sql2);
                $rows2 = $stmt->fetchAll();
                if (empty($rows2)) {
                    $result = "No se encontraron resultados !!";
                    }
                ?>
                <?php echo $result;?><select name="e1"><option value=0>Seleccione</option>
                <?php foreach ($rows2 as $row2) {
                echo '<option value='.$row2['idLiceo'].'>'.$row2['Localidad'].'-'.$row2['Nombre'].'</option>';
                }mysql_close($conexion); ?></select></td></tr>
		<tr><td>Tipo de Curso:</td><td><select name="e2" size="1"><option value="0">Seleccione</option><option Value="1">Ciclo Basico</option><option Value="2">Bachillerato</option><option Value="3">Terciario</option></select></td></tr>
	    <tr><th colspan=2 algin=center></br><input type="submit" name="terminar" ><input type="button" value="Volver" onclick="history.back()" "></th></tr>
	</table>
</form>
</body>
</html>
