<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENERSIGHT-VOLTAJES</title>
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
                    <i class="lni lni-bolt text-danger"></i>
                    <span  class="text-danger">Voltajes</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="corriente.php" class="sidebar-link ">
                    <i class="lni lni-bolt-alt"></i>
                        <span>Corrientes</span>
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
                <h6 class="text-success text-center">Voltaje Linea-Linea (V)</h6>

  <div class="row align-items-center">
   
   
  </div> 
  <div class="col-md-3">
    <div class="card h-100">
            <div class="card-body text-dark">
          <h5 class="card-title text-center">Transformador1</h5>
          <canvas id="myChart" style="height: 250px; width: 100%;"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card h-100">
        <div class="card-body text-dark">
        <h5 class="card-title text-center">Transformador2</h5>
        <canvas id="myChart1" style="height: 250px; width: 100%;"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-3">
    <div class="card">
        <div class="card-body text-dark">
        <h5 class="card-title text-center">Transformador3</h5>
        <canvas id="myChart2" style="height: 250px; width: 100%;"></canvas>

        </div>
      </div>
    </div>
    <div class="col-md-3">
    <div class="card">
        <div class="card-body text-dark">
        <h5 class="card-title text-center">Transformador4</h5>
        <canvas id="myChart3" style="height: 250px; width: 100%;"></canvas>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="container mt-4">
   <div class="row">
   <h2>Historial de voltajes</h2>

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
            url: 'filtar_datos.php', // Cambia esto a la ruta de tu script en el servidor
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
                        datasets: [{
                            label: 'VRS',
                            data: response.vrs,
                            backgroundColor: 'rgba(228, 0, 0 )',
                            borderColor: 'rgba(228, 0, 0 )',
                            borderWidth: 1
                        }, {
                            label: 'VST',
                            data: response.vst,
                            backgroundColor: 'rgba(4, 18, 137 )',
                            borderColor: 'rgba(4, 18, 137 )',
                            borderWidth: 1
                        }, {
                            label: 'VTR',
                            data: response.vtr,
                            backgroundColor: 'rgba(42, 229, 9 )',
                            borderColor: 'rgba(42, 229, 9 )',
                            borderWidth: 1
                        }, {
                            label: 'VPROMEDIO',
                            data: response.vpro,
                            backgroundColor: 'rgba(12, 029, 9 )',
                            borderColor: 'rgba(12, 029, 9 )',
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
       
        // Suscribirse a los temas donde se enviarán los datos de los voltajes
        client.on('connect', function () {
            client.subscribe('vr1');
            client.subscribe('vs1');
            client.subscribe('vt1');
            client.subscribe('vpro1');
 
            /**Transformador 2 */
            client.subscribe('vr2');
            client.subscribe('vs2');
            client.subscribe('vt2');
            client.subscribe('vpro2');
 
             /**Transformador 3 */
             client.subscribe('vr3');
            client.subscribe('vs3');
            client.subscribe('vt3');
            client.subscribe('vpro3');
 
              /**Transformador 4 */
            client.subscribe('vr4');
            client.subscribe('vs4');
            client.subscribe('vt4');
            client.subscribe('vpro4');
 
        });

        // Variables para almacenar los datos de los voltajes
        var voltajeRS1 = 0;
        var voltajeST1 = 0;
        var voltajeTR1 = 0;
        var voltajepro1 = 0;
        var voltajepro1 = 0;
 
        /****Transformador 2 */
        var voltajeRS2 = 0;
        var voltajeST2 = 0;
        var voltajeTR2 = 0;
        var voltajepro2 = 0;
 
        /**Transformador 3 */
        var voltajeRS3 = 0;
        var voltajeST3 = 0;
        var voltajeTR3 = 0;
        var voltajepro3 = 0;
 
         /**Transformador 4 */
         var voltajeRS4 = 0;
        var voltajeST4 = 0;
        var voltajeTR4 = 0;
        var voltajepro4 = 0;
 
        // Callback para manejar los mensajes MQTT recibidos
        client.on('message', function (topic, message) {
            // Asignar el valor recibido al voltaje correspondiente
            switch(topic) {
                case 'vr1':
                    voltajeRS1 = parseInt(message);
                     break;
                case 'vs1':
                    voltajeST1 = parseInt(message);
                    break;
                case 'vt1':
                    voltajeTR1 = parseInt(message);
                    break;
                case 'vpro1':
                    voltajepro1 = parseInt(message);
                    break;
                 
                    /*Trafo2 */
                    case 'vr2':
                    voltajeRS2 = parseInt(message);
                    break;
                case 'vs2':
                    voltajeST2 = parseInt(message);
                    break;
                case 'vt2':
                    voltajeTR2 = parseInt(message);
                    break;
                case 'vpro2':
                    voltajepro2 = parseInt(message);
                    break;
               
                    /*Trafo 3 */
                    case 'vr3':
                    voltajeRS3 = parseInt(message);
                    break;
                case 'vs3':
                    voltajeST3 = parseInt(message);
                    break;
                case 'vt3':
                    voltajeTR3 = parseInt(message);
                    break;
                case 'vpro3':
                    voltajepro3 = parseInt(message);
                    break;
          
                     /*Trafo 4 */
                case 'vr4':
                    voltajeRS4 = parseInt(message);
                    break;
                case 'vs4':
                    voltajeST4 = parseInt(message);
                    break;
                case 'vt4':
                    voltajeTR4 = parseInt(message);
                    break;
                case 'vpro4':
                    voltajepro4 = parseInt(message);
                    break;
               

                default:
                    break;
            }

            // Actualizar los datos del gráfico
            myBarChart.data.datasets[0].data = [voltajeRS1, voltajeST1, voltajeTR1,voltajepro1];
            myBarChart1.data.datasets[0].data = [voltajeRS2, voltajeST2, voltajeTR2,voltajepro2];
            myBarChart2.data.datasets[0].data = [voltajeRS3, voltajeST3, voltajeTR3,voltajepro3];
            myBarChart3.data.datasets[0].data = [voltajeRS4, voltajeST4, voltajeTR4,voltajepro4];
 


            // Redibujar el gráfico
            myBarChart.update();
            myBarChart1.update();
            myBarChart2.update();
            myBarChart3.update();

        });

        // Configuración inicial del gráfico
        var ctx = document.getElementById('myChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Voltaje RS', 'Voltaje ST', 'Voltaje TR','Voltaje Promedio'],
                datasets: [{
                    label: 'Voltajes',
                    data: [0, 0, 0, 0],
                    backgroundColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)'
                    ],
                    borderColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        /**Transformador 2 */
         var ctx1 = document.getElementById('myChart1').getContext('2d');
        var myBarChart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Voltaje RS', 'Voltaje ST', 'Voltaje TR','Voltaje Promedio'],
                datasets: [{
                    label: 'Voltajes',
                    data: [0, 0, 0, 0],
                    backgroundColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)'
                    ],
                    borderColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

         /**Transformador 3 */
         var ctx2 = document.getElementById('myChart2').getContext('2d');
        var myBarChart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Voltaje RS', 'Voltaje ST', 'Voltaje TR','Voltaje Promedio'],
                datasets: [{
                    label: 'Voltajes',
                    data: [0, 0, 0, 0],
                    backgroundColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)'
                    ],
                    borderColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

   
         /**Transformador 4 */
         var ctx3 = document.getElementById('myChart3').getContext('2d');
        var myBarChart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: ['Voltaje RS', 'Voltaje ST', 'Voltaje TR','Voltaje Promedio'],
                datasets: [{
                    label: 'Voltajes',
                    data: [0, 0, 0, 0],
                    backgroundColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)'
                    ],
                    borderColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

 
    </script>
 
 </body>

</html>