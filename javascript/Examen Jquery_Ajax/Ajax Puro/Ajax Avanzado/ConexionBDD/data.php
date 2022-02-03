<?php
$mysqli = new mysqli("localhost", "root","sa", "ajax");
if($mysqli->connect_error) {
 exit('Could not connect');
}

$q = $_GET["q"];
$alumnos = $mysqli->query("SELECT * FROM alumnos WHERE nacionalidad = '$q'");
if($alumnos && $alumnos->num_rows>0){
    $alumnos->fetch_all(MYSQLI_ASSOC);
}
echo "<table>";

foreach($alumnos as $alumno){
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<td>" . $alumno['id'] . "</td>";
    echo "<th>Nombre</th>";
    echo "<td>" . $alumno['nombre'] . "</td>";
    echo "<th>Apellido</th>";
    echo "<td>" . $alumno['apellidos'] . "</td>";
    echo "<th>Nacionalidad</th>";
    echo "<td>" . $alumno['nacionalidad'] . "</td>";
    echo "</tr>";
}

echo "</table>";
