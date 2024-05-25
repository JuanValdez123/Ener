<?php
session_start();

// Verificar si se ha enviado el formulario
if(isset($_POST['email']) && isset($_POST['password'])) {
    // Obtener los valores del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conexión a la base de datos
    $conn = mysqli_connect("localhost", "root", "", "energia");

    // Verificar la conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Preparar la consulta utilizando prepared statements
    $sql = "SELECT * FROM login WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // Vincular el parámetro y ejecutar la consulta
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    // Obtener el resultado de la consulta
    $result = mysqli_stmt_get_result($stmt);

    // Verificar si se encontró algún registro
    if(mysqli_num_rows($result) > 0) {
        // Obtener la fila de resultados como un array asociativo
        $row = mysqli_fetch_assoc($result);
        
        // Verificar la contraseña
        if(password_verify($password, $row['pass'])) {
            // Inicio de sesión exitoso
            echo "¡Inicio de sesión exitoso!";
            
            // Almacenar el correo electrónico en la variable de sesión
            $_SESSION['email'] = $email;
            
            // Redireccionar al usuario a index1.php después de 3 segundos
            echo "<script>setTimeout(function() { window.location.href = 'dash/index.php'; }, 3000);</script>";
        } else {
            // Correo electrónico o contraseña incorrectos
            echo "¡Correo electrónico o contraseña incorrectos!";
        }
    } else {
        // Correo electrónico o contraseña incorrectos
        echo "¡Correo electrónico o contraseña incorrectos!";
    }

    // Cerrar la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    // No se han recibido todos los datos del formulario
    echo "¡No se han recibido todos los datos del formulario!";
}
?>
