<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENERSIGHT-ENERGÍAS</title>
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
                    <i class="lni lni-dashboard text-danger"></i>
                        <span class="text-danger">Energía</span>
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
                <a href="conf.php"class="sidebar-link">
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
    <h6 class="text-success">Energía-Activa(kWh)-Reactiva(kVARh)-Aparente(kVAh)</h6>
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
   <h2>Historial de Energía</h2>

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
            url: 'filtar_datos3.php', // Cambia esto a la ruta de tu script en el servidor
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
                    type: 'bar',
                    data: {
                        labels: response.tiempo,
                        datasets: [{
                            label: 'Activa',
                            data: response.energia_activa,
                            backgroundColor: 'rgba(10, 154, 168)',
                            borderColor: 'rgba(10, 154, 168)',
                            borderWidth: 1
                        }, {
                            label: 'Reactiva',
                            data: response.energia_reactiva,
                            backgroundColor: 'rgba(10, 99, 168)',
                            borderColor: 'rgba(10, 99, 168)',
                            borderWidth: 1
                        }, {
                            label: 'Aparente',
                            data: response.energia_aparente,
                            backgroundColor: 'rgba(3, 33, 76 )',
                            borderColor: 'rgba(3, 33, 76 )',
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
            client.subscribe('E_kwh1');
            client.subscribe('E_kvarh1');
            client.subscribe('E_kvah1');
  
            /**Transformador 2 */
            client.subscribe('E_kwh2');
            client.subscribe('E_kvarh2');
            client.subscribe('E_kvah2');
             /**Transformador 3 */
             client.subscribe('E_kwh3');
            client.subscribe('E_kvarh3');
            client.subscribe('E_kvah3');
              /**Transformador 4 */
              client.subscribe('E_kwh4');
            client.subscribe('E_kvarh4');
            client.subscribe('E_kvah4');
        });

        // Variables para almacenar los datos de los voltajes
        var EActiva_1 = 0;
        var EReactiva1 = 0;
        var EAparente1 = 0;
   
        /****Transformador 2 */
        var EActiva_2 = 0;
        var EReactiva2 = 0;
        var EAparente2 = 0;
  
        /**Transformador 3 */
        var EActiva_3 = 0;
        var EReactiva3 = 0;
        var EAparente3 = 0;
          /**Transformador 4 */
         var EActiva_4 = 0;
        var EReactiva4 = 0;
        var EAparente4 = 0;
  
        // Callback para manejar los mensajes MQTT recibidos
        client.on('message', function (topic, message) {
            // Asignar el valor recibido al voltaje correspondiente
            switch(topic) {
                case 'E_kwh1':
                    EActiva_1 = parseInt(message);
                    $("#E1").html(EActiva_1);
                     break;
                case 'E_kvah1':
                    EAparente1 = parseInt(message);
                    break;
                case 'E_kvarh1':
                     EReactiva1= parseInt(message);
                    break;
                
                
                    /*Trafo2 */
                    case 'E_kwh2':
                    EActiva_2 = parseInt(message);
                    $("#E2").html(EActiva_2);
                     break;
                case 'E_kvah2':
                    EAparente2 = parseInt(message);
                    break;
                case 'E_kvarh2':
                     EReactiva2= parseInt(message);
                    break;
                    /*Trafo 3 */
                    case 'E_kwh3':
                    EActiva_3 = parseInt(message);
                     break;
                case 'E_kvah3':
                    EAparente3 = parseInt(message);
                    break;
                case 'E_kvarh3':
                     EReactiva3= parseInt(message);
                     $("#E3").html(EActiva_3);
                    break;
                     /*Trafo 4 */
                     case 'E_kwh4':
                    EActiva_4 = parseInt(message);
                    $("#E4").html(EActiva_4);
                     break;
                case 'E_kvah4':
                    EAparente4 = parseInt(message);
                    break;
                case 'E_kvarh4':
                     EReactiva4= parseInt(message);
                    break;
            }

            // Actualizar los datos del gráfico
            myBarChart.data.datasets[0].data = [EActiva_1, EReactiva1, EAparente1];
            myBarChart1.data.datasets[0].data = [EActiva_2, EReactiva2, EAparente2];
            myBarChart2.data.datasets[0].data = [EActiva_3, EReactiva3, EAparente3];
            myBarChart3.data.datasets[0].data = [EActiva_4, EReactiva4, EAparente4];
 


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
                labels: ['Energía Activa', 'Energía Reactiva', 'Energía Aparente'],
                datasets: [{
                    label: 'Energía',
                    data: [0, 0, 0 ],
                    backgroundColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)' 
                    ],
                    borderColor: [
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
                labels: ['Energía Activa', 'Energía Reactiva', 'Energía Aparente'],
                datasets: [{
                    label: 'Energía',
                     data: [0, 0, 0],
                    backgroundColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)' 
                    ],
                    borderColor: [
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
                labels: ['Energía Activa', 'Energía Reactiva', 'Energía Aparente'],
                datasets: [{
                    label: 'Energía',
                    data: [0, 0, 0],
                    backgroundColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)' 
                    ],
                    borderColor: [
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
                labels: ['Energía Activa', 'Energía Reactiva', 'Energía Aparente'],
                datasets: [{
                    label: 'Energía',
                    data: [0, 0, 0],
                    backgroundColor: [
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)',
                        'rgba(9, 120, 175)' 
                    ],
                    borderColor: [
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