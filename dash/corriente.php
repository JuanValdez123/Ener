<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENERSIGHT-CORRIENTES</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mqtt@3.0.0/dist/mqtt.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
   
</head>

<body>
    <div class="wrapper">
    <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">ENERSIGHT</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                
                <li class="sidebar-item">
                    <a href="index.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>General</span>
                    </a>
                </li>
              
            
                <li class="sidebar-item">
                    <a href="voltaje.php" class="sidebar-link">
                    <i class="lni lni-bolt"></i>
                    <span>Voltajes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="corriente.php" class="sidebar-link">
                    <i class="lni lni-bolt-alt text-danger"></i>
                        <span  class="text-danger">Corrientes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="potencia.php" class="sidebar-link">
                    <i class="lni lni-safari"></i>
                         <span>Potencias</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="energia.php" class="sidebar-link">
                    <i class="lni lni-dashboard "></i>
                        <span  >Energía</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="tabla.php" class="sidebar-link">
                    <i class="lni lni-warning"></i>
                        <span class="">Alarmas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="reporte.php" class="sidebar-link">
                    <i class="lni lni-clipboard"></i>
                        <span>Reportes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                <a href="conf.php" class="sidebar-link">
                    <i class="lni lni-cogs"></i>
                   <span>Configuración</span>
                    </a>
                </li>
                <li class="sidebar-item">
                <a href="../index.php"  class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Cerrar sesión</span>
                </a>
                </li>
            </ul>
          
        </aside>
        <div class="main p-3">
            <div class="text-center">
                
                <div class="row">
                <h6 class="text-success text-center">Corriente Media(A)</h6>

  <div class="col-12 text-center">
  <div class="row align-items-center">
    
    <div class="col-auto">
  
    </div>
  </div>   
    </div>
     <div class="col-md-3">
    <div class="card" id="transformador1"   style="background: linear-gradient(to right, #0f1a24, #3498db);">
        <div class="card-body text-white">
          <h5 class="card-title text-center">Transformador1 </h5>
          <h5 class="card-title text-center" id="corriente_1">0</h5>
          <p class="card-text text-center">Valor máximo de lectura: <span id="corriente_max1">0</span></p>
          <p class="card-text text-center">Umbral configurado: <span>0</span></p>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" id="transformador2"   style="background: linear-gradient(to right, #0f1a24, #3498db);">
        <div class="card-body text-white">
        <h5 class="card-title text-center">Transformador2</h5>
        <h5 class="card-title text-center" id="corriente_2">0</h5>
        <p class="card-text text-center">Valor máximo de lectura: <span id="corriente_max2">0</span></p>
        <p class="card-text text-center">Umbral configurado: <span>0</span></p>

        </div>
      </div>
    </div>
    <div class="col-md-3">
    <div class="card" id="transformador3"   style="background: linear-gradient(to right, #0f1a24, #3498db);">
        <div class="card-body text-white">
        <h5 class="card-title text-center">Transformador3</h5>
        <h5 class="card-title text-center" id="corriente_3">0</h5>
          <p class="card-text text-center">Valor máximo de lectura: <span id="corriente_max3">0</span></p>
          <p class="card-text text-center">Umbral configurado: <span>0</span></p>

        </div>
      </div>
    </div>
    <div class="col-md-3">
    <div class="card" id="transformador4"   style="background: linear-gradient(to right, #0f1a24, #3498db);">
        <div class="card-body text-white">
        <h5 class="card-title text-center">Transformador4</h5>
        <h5 class="card-title text-center" id="corriente_4">1045A</h5>
        <p class="card-text text-center">Valor máximo de lectura: <span id="corriente_max3">0</span></p>
        <p class="card-text text-center">Umbral configurado: <span>0</span></p>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4">
   <div class="row">
   <h2>Historial de corriente media</h2>

   <div class="col-md-4">
    <form id="filtroFormFechaInicio" method="post">
        <div class="mb-3">
            <label for="fecha_inicio" class="form-label">Fecha Inicial</label>
            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
        </div>
    </form>
</div>
<div class="col-md-4">
    <form id="filtroFormFechaFin" method="post">
        <div class="mb-3">
            <label for="fecha_fin" class="form-label">Fecha Final</label>
            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
        </div>
    </form>
</div>
<div class="col-md-4">
    <form id="filtroFormTransformador" method="post">
        <div class="mb-3">
            <label for="transformador" class="form-label">Transformador</label>
            <select class="form-select" id="transformador" name="transformador" required>
                <option value="1">Transformador 1</option>
                <option value="2">Transformador 2</option>
                <option value="3">Transformador 3</option>
                <option value="4">Transformador 4</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>
</div>
</div>

    <div class="col-md-12">
      <h2>Gráfica</h2>
      <canvas id="myChart6"></canvas>
    </div>

  <hr>          </div>


          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        var myChart6;
$(document).ready(function(){
    $('#filtroFormTransformador').submit(function(e){
        e.preventDefault(); // Evitar que se envíe el formulario normalmente

        // Obtener los datos del formulario
        var formData = {
            fecha_inicio: $('#fecha_inicio').val(),
            fecha_fin: $('#fecha_fin').val(),
            transformador: $('#transformador').val()
        };
       
        // Enviar los datos al servidor
        $.ajax({
            type: 'POST',
            url: 'filtar_datos1.php', // Cambia esto a la ruta de tu script en el servidor
            data: formData,
            dataType: 'json',
            success: function(response) {
                // Aquí deberías procesar los datos recibidos y generar la gráfica con Chart.js
                // Por ejemplo:
                var ctx = document.getElementById('myChart6').getContext('2d');
                // Destruir la instancia existente de la gráfica si existe
                if (myChart6) {
                    myChart6.destroy();
                }
                myChart6 = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: response.tiempo,
                        datasets:  [{
            label: 'Corriente media',
            data: response.IPROME,
            backgroundColor: 'rgba(228, 0, 0 )',
            borderColor: 'rgba(228, 0, 0 )',
            borderWidth: 1
        }]
                    },
                    options: {
                        // Aquí puedes configurar opciones adicionales de la gráfica
                    }
                });
            },
            error: function(xhr, status, error) {
                // Manejar errores de la solicitud AJAX
                console.error(error);
            }
        });
    });
});
</script>
    <script>
        // Conectarse al broker MQTT
        var client = mqtt.connect('ws://localhost:8083/mqtt');
        var corriente1 = 0;
        var corriente2 = 0;
        var corriente3 = 0;
        var corriente4 = 0;
        // Variable para almacenar la corriente máxima
        var corrienteMaxima1 = 0;
        var corrienteMaxima2 = 0;
        var corrienteMaxima3 = 0;
        var corrienteMaxima4 = 0;
        // Suscribirse a los temas donde se enviarán los datos de los voltajes
        client.on('connect', function () {
          
            client.subscribe('irst1');

            /**Transformador 2 */
        
            client.subscribe('irst2');

             /**Transformador 3 */
            client.subscribe('irst3');

              /**Transformador 4 */
            client.subscribe('irst4');

        });
 
        // Callback para manejar los mensajes MQTT recibidos
        client.on('message', function (topic, message) {
            // Asignar el valor recibido al voltaje correspondiente
            switch(topic) {
               
                case 'irst1':
                    corriente1 = parseInt(message);
                    if (corriente1 > corrienteMaxima1 ) {
                      corrienteMaxima1  = corriente1;
            }
                   
                    $("#corriente_1").html(corriente1);

                    $("#corriente_max1").html(corrienteMaxima1);


                    break;
                    /*Trafo2 */
                   
                case 'irst2':
                    corriente2 = parseInt(message);
                    if (corriente2 > corrienteMaxima2 ) {
                      corrienteMaxima2  = corriente2;
            }
                   
                    $("#corriente_2").html(corriente2);

                    $("#corriente_max2").html(corrienteMaxima2);

                    /*Trafo 3 */
                   
                case 'irst3':
                    corriente3 = parseInt(message);
                    if (corriente3 > corrienteMaxima3 ) {
                      corrienteMaxima3  = corriente3;
            }
                   
                    $("#corriente_3").html(corriente3);

                    $("#corriente_max3").html(corrienteMaxima3);

                     /*Trafo 4 */
              
                case 'irst4':
                    corriente4 = parseInt(message);
                    if (corriente4 > corrienteMaxima4 ) {
                      corrienteMaxima4  = corriente4;
            }
                   
                    $("#corriente_4").html(corriente4);

                    $("#corriente_max4").html(corrienteMaxima4);

                default:
                    break;
            }

   
        });

        

 
    </script>
 </body>

</html>