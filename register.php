<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "energia";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Recibir los datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

// Verificar si el correo electrónico ya está registrado
$sql = "SELECT * FROM login WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<div class='alert alert-danger'>El correo electrónico ya está registrado.</div>";
} else {
  // Insertar el nuevo usuario en la base de datos
  $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Encriptar la contraseña
  $insert_query = "INSERT INTO login (email, pass, rol) VALUES ('$email', '$hashed_password', '$role')";

  if ($conn->query($insert_query) === TRUE) {
    echo "<div class='alert alert-success'>Registro exitoso. ¡Bienvenido!</div>";
  } else {
    echo "<div class='alert alert-danger'>Error al registrar usuario: " . $conn->error . "</div>";
  }
}

// Cerrar la conexión
$conn->close();
?>
