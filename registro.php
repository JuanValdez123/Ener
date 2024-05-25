<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse - Sistema de Reporte de Medidores</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos CSS personalizados -->
  <style>
    body {
      background-color: #f2eddb;
      height: 100vh;
      margin: 0;
      padding-top: -20vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .container {
      max-width: 400px;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
      background-color: #007bff;
      color: #fff;
      text-align: center;
      border-radius: 10px 10px 0 0;
    }

    .form-control {
      border-radius: 0;
      border-bottom: 1px solid #ced4da;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: none;
    }

    .btn-primary {
      border-radius: 5px;
      background-color: #043014;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    #responseMessage {
      margin-top: 10px;
    }

    /* Estilos para la imagen */
    .logo {
      position: absolute;
      top: 10px; /* Ajusta esta propiedad para cambiar la distancia del logo hacia arriba */
      left: 50%;
      transform: translateX(-50%);
      width: 240px;
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="img/logo.png" alt="Logo de tu empresa" class="logo">

    <div class="card">
      <div class="card-header bg-success">Registrarse</div>
      <div class="card-body">
        <form id="registerForm">
          <div class="mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contraseña" required>
          </div>
          <div class="mb-3">
            <select class="form-control" id="role" name="role" required>
              <option value="">Seleccionar Rol</option>
              <option value="admin">Administrador</option>
              <option value="user">Usuario</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success btn-block">Registrarse</button>
          <div class="text-center">
            <a href="index.php" class="btn btn-link text-dark">¿Ya tienes una cuenta? Inicia sesión aquí</a>
          </div>
        </form>
        <!-- Aquí se mostrará el mensaje de respuesta -->
        <div id="responseMessage" class="mt-3"></div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Script para enviar el formulario mediante AJAX -->
  <script>
    $(document).ready(function(){
      $("#registerForm").submit(function(e) {
        e.preventDefault(); // Evitar el envío por defecto del formulario

        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();

        // Verificar si las contraseñas coinciden
        if (password !== confirm_password) {
          $("#responseMessage").html("<div class='alert alert-danger'>Las contraseñas no coinciden.</div>");
          return;
        }

        // Obtener los datos del formulario
        var formData = {
          email: $("#email").val(),
          password: password,
          role: $("#role").val()
        };

        // Enviar los datos mediante AJAX
        $.ajax({
          url: "register.php", // Ruta al archivo PHP para el registro
          type: "POST",
          data: formData,
          success: function(response) {
            // Mostrar la respuesta del servidor en el elemento #responseMessage
            $("#responseMessage").html(response);
          },
          error: function(xhr, status, error) {
            // Manejar errores aquí
            console.error(error);
          }
        });
      });
    });
  </script>
</body>
</html>
