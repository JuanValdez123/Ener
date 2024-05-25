<?php
// Conexión a la base de datos (debes completar con tus propios detalles de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "energia";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$transformador = $_POST['transformador'];

// Consulta SQL para obtener los datos de la base de datos
$sql = "SELECT tiempo, VRS, VST, VTR,VPROME FROM potencias WHERE tiempo BETWEEN '$fecha_inicio' AND '$fecha_fin' AND Trafo = $transformador";

$result = $conn->query($sql);

// Crear un array para almacenar los datos de la consulta
$data = array(
    'tiempo' => array(),
    'vrs' => array(),
    'vst' => array(),
    'vtr' => array(),
    'vpro' => array()
);

// Verificar si se obtuvieron resultados de la consulta
if ($result->num_rows > 0) {
    // Guardar los datos en el array
    while ($row = $result->fetch_assoc()) {
        $data['tiempo'][] = $row['tiempo'];
        $data['vrs'][] = $row['VRS'];
        $data['vst'][] = $row['VST'];
        $data['vtr'][] = $row['VTR'];
        $data['vpro'][] = $row['VPROME'];
    }
}

// Cerrar la conexión a la base de datos
$conn->close();

// Devolver los datos como JSON
echo json_encode($data);
?>
