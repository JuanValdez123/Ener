<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $vr = $_POST["vr"];
    $vs = $_POST["vs"];
    $vt = $_POST["vt"];
    $ipromedio = $_POST["ipromedio"];
    $energia = $_POST["energia"];
    $fp1 = $_POST["fp1"];
    $fp2 = $_POST["fp2"];
    $fp3 = $_POST["fp3"];
    $fp4 = $_POST["fp4"];
    $transformador = $_POST["transformador"];

    // Conexión a la base de datos
    $conn = new mysqli("localhost", "usuario", "contraseña", "nombre_base_de_datos");

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO conf (C_VR, C_VS, C_VT, C_Ipromedio, fp1, fp2, fp3, fp4, trafo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros y ejecutar la consulta
    $stmt->bind_param("iiiiiiiii", $vr, $vs, $vt, $ipromedio, $energia, $fp1, $fp2, $fp3, $fp4, $transformador);
    if ($stmt->execute()) {
        echo "Los datos se han guardado correctamente.";
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
} else {
    // Si el formulario no ha sido enviado, redireccionar a la página del formulario
    header("Location: formulario.php");
    exit;
}
?>
