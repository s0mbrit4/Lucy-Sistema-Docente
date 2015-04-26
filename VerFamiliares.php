<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;' name='viewport' />
</head>
<body bgcolor=#E1DEDE>
<form action="./SelectFamiliares.php" method="POST">
<?php
$fecha= date ("j-n-Y");
echo "<p align=right>Fecha Actual: $fecha</p></br>";
$a8=$_POST['a8'];
?> 
 <table>
	<tr><th colspan=2 algin=center>Seleccione Liceo y Grupo</th></tr>
	<tr><th colspan=2 algin=center></br></th></tr>
	<tr><td>Liceo:</td><td><?php
                require_once './resurces/conexion.php';
                $result = "";
                $conn = dbConnect();
                $combobox;
                $row2;
                $sql2 = "SELECT * FROM Liceos where idLiceo='$a8'";
                $stmt = $conn->query($sql2);
                $rows2 = $stmt->fetchAll();
                if (empty($rows2)) {
                    $result = "No se encontraron resultados !!";
                    }
                ?>
                <?php echo $result;?><select name="d1">
                <?php foreach ($rows2 as $row2) {
                echo '<option value='.$a8.'>'.$row2['Nombre'].'</option>';
                }mysql_close($conexion); ?></select></td></tr>
            <tr><td>Grupo:</td><td><?php
                require_once './resurces/conexion.php';
                $result = "";
                $conn = dbConnect();
                $combobox;
                $row2;
                $sql2 = "SELECT * FROM Grupos where FKliceo='$a8'";
                $stmt = $conn->query($sql2);
                $rows2 = $stmt->fetchAll();
                if (empty($rows2)) {
                    $result = "No se encontraron resultados !!";
                    }
                ?>
                <?php echo $result;?><select name="d2"><option value=0>Seleccione</option>
                    <?php foreach ($rows2 as $row2) {
                        echo '<option value='.$row2['IdGrupo'].'>'.$row2['Grado'].'-'.$row2['Grupo'].'</option>';
                    }mysql_close($conexion);?></select></td></tr>
	<tr><td>A&#241;o</td><td><input type="text" name="d3"></td></tr>
<tr><th colspan=2 algin=center></br><input type="submit" name="terminar" ><input type="button" value="Volver" onclick="history.back()" "></th></tr>
</table>
</form>
</body>
</html>
