<html>
<head>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;' name='viewport' />
</head>
<body bgcolor=#E1DEDE>
	<form action="./InsertAlumno.php" method="POST">
<?php
$fecha= date ("j-n-Y");
echo "<p align=right>Fecha Actual: $fecha</p></br>";
$a8=$_POST['a8'];
?> 
	    <table>
            <tr><th colspan=2 algin=center>Registro de alumnos</th></tr>
            <tr><th colspan=2 algin=center></br></th></tr>
            <tr><th colspan=2 algin=center>Datos Personales</th></tr>
            <tr><th colspan=2 algin=center></br></th></tr>
            <tr><td>Nombre:</td><td><input type="text" name="a1"></td></tr>
            <tr><td>Apellido:</td><td><input type="text" name="a2"></td></tr>
            <tr><td>Ciudad:</td><td><input type="text" name="a3"></td></tr>
            <tr><td>Nacionalidad:</td><td><input type="text" name="a4"></td></tr>
            <tr><td>Fecha de Nacimiento:</td><td><input type="text" maxlength="2" size="2" name="a5"> - <input type="text" maxlength="2" size="2" name="a6"> - <input type="text" maxlength="4" size="4" name="a7"></td></tr>
	    <tr><td>e-mail:</td><td><input type="text" name="a15"></td></tr>
            <tr><th colspan=2 algin=center></br></th></tr>
            <tr><th colspan=2 algin=center>Datos Estudiantiles</th></tr>
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
                <?php echo $result;?><select name="a27">
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
                <?php echo $result;?><select name="a9"><option value=0>Seleccione</option>
                    <?php foreach ($rows2 as $row2) {
                        echo '<option value='.$row2['IdGrupo'].'>'.$row2['Grado'].'-'.$row2['Grupo'].'</option>';
                    }mysql_close($conexion);?></select></td></tr>
            <tr><td>Tiene computadora:</td><td><input name="a10" type="checkbox"></td></tr>
            <tr><td>Tiene equipo ceibal:</td><td><input name="a11" type="checkbox"></td></tr>
            <tr><td>Posee coneccion a internet:</td><td><input name="a12" type="checkbox"></td></tr>
            <tr><td>Medio de transporte:</td><td><select name="a13" size="1"><option value="0">Seleccione</option><option Value="1">Sin Transporte (A Pie)</option><option Value="2">Bicicleta</option><option Value="3">Moto</option><option Value="4">Automotor</option><option Value="5">Transporte Publico (Omnibus)</option></select></td></tr>
            <tr><td>Distancia en Km entre su hogar y la institucion:</td><td><input type="text" name="a14"></td></tr>
            <tr><th colspan=2 algin=center></br></th></tr>
            <tr><th colspan=2 algin=center>Situacion del Nucleo Familiar</th></tr>
            <tr><th colspan=2 algin=center></br></th></tr>
            <tr><td colspan=2 algin=center>Vive Con</td></tr>
            <tr><td>Padre</td><td><input name="a16" type="checkbox"></td></tr>
            <tr><td>Nivel de estudios:</td><td><select name="a17" size="1"><option value="0">Seleccione</option><option value="1">Primaria</option><option value="2">Ciclo Basico</option><option value="3">Bachillerato</option><option value="4">Terciario</option></select></td></tr>
            <tr><td>Madre</td><td><input name="a18" type="checkbox"></td></tr>
            <tr><td>Nivel de estudios:</td><td><select name="a19" size="1"><option value="0">Seleccione</option><option value="1">Primaria</option><option value="2">Ciclo Basico</option><option value="3">Bachillerato</option><option value="4">Terciario</option></select></td></tr>
            <tr><td>Tutor Legal</td><td><input name="a20" type="checkbox"></td></tr>
            <tr><td>Nivel de estudios:</td><td><select name="a21" size="1"><option value="0">Seleccione</option><option value="1">Primaria</option><option value="2">Ciclo Basico</option><option value="3">Bachillerato</option><option value="4">Terciario</option></select></td></tr>
            <tr><td>Hermanos</td><td><input name="a22" type="checkbox"></td></tr>
            <tr><td>Si tiene hermanos indique cuantos:</td><td><input name="a23" type="text"></td></tr>
            <tr><td>Nivel de estudios:</td><td><select name="a24" size="1"><option value="0">Seleccione</option><option value="1">Primaria</option><option value="2">Ciclo Basico</option><option value="3">Bachillerato</option><option value="4">Terciario</option></select></td></tr>
            <tr><td>Trabaja:</td><td><input name="a25" type="checkbox"></td></tr>
            <tr><td>Quien le ayuda a estudiar:</td><td><input type="text" name="a26"></td></tr>
	    <tr><td>Foto del alumno</td><td><form action="subir.php" method="POST" enctype="multipart/form-data">
	<label for="imagen">Imagen:</label>
	<input type="file" name="imagen" id="imagen" />
</form></td></tr>
	    </form> 
            <tr><th colspan=2 algin=center></br><input type="submit" name="terminar" value="Enviar Datos" ><input type="button" value="Volver" onclick="history.back()" "></th></tr>
</table>
</form>
</body>
</html>
