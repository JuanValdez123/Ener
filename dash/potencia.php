<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENERSIGHT-POTENCIAS</title>
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
                    <i class="lni lni-safari text-danger"></i>
                         <span  class="text-danger">Potencias</span>
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
            <div class="">
              
                <div class="row">
    <h6 class="text-success text-center">Potencia-Activa(W)-Reactiva(VAR)-Aparente(VA)</h6>
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
   <h2>Historial de potencias</h2>

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
            url: 'filtar_datos2.php', // Cambia esto a la ruta de tu script en el servidor
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
                            label: 'Activa',
                            data: response.potenciakw,
                            backgroundColor: 'rgba(228, 0, 0 )',
                            borderColor: 'rgba(228, 0, 0 )',
                            borderWidth: 1
                        }, {
                            label: 'Reactiva',
                            data: response.potenciakvar,
                            backgroundColor: 'rgba(4, 18, 137 )',
                            borderColor: 'rgba(4, 18, 137 )',
                            borderWidth: 1
                        }, {
                            label: 'Aparente',
                            data: response.potenciakva,
                            backgroundColor: 'rgba(42, 229, 9 )',
                            borderColor: 'rgba(42, 229, 9 )',
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
            client.subscribe('P_kw1');
            client.subscribe('P_kvar1');
            client.subscribe('P_kva1');
            client.subscribe('fp1');
 
            /**Transformador 2 */
            client.subscribe('P_kw2');
            client.subscribe('P_kvar2');
            client.subscribe('P_kva2');
            client.subscribe('fp2');
             /**Transformador 3 */
             client.subscribe('P_kw3');
            client.subscribe('P_kvar3');
            client.subscribe('P_kva3');
            client.subscribe('fp3');

              /**Transformador 4 */
              client.subscribe('P_kw4');
            client.subscribe('P_kvar4');
            client.subscribe('P_kva4');
            client.subscribe('fp4');

        });

        // Variables para almacenar los datos de los voltajes
        var PActiva_1 = 0;
        var PReactiva1 = 0;
        var PAparente1 = 0;
        var Fp1 = 0;
  
        /****Transformador 2 */
        var PActiva_2 = 0;
        var PReactiva2 = 0;
        var PAparente2 = 0;
        var Fp2 = 0;
 
        /**Transformador 3 */
        var PActiva_3 = 0;
        var PReactiva3 = 0;
        var PAparente3 = 0;
        var Fp3 = 0;
         /**Transformador 4 */
         var PActiva_4 = 0;
        var PReactiva4 = 0;
        var PAparente4 = 0;
        var Fp4 = 0;
 
        // Callback para manejar los mensajes MQTT recibidos
        client.on('message', function (topic, message) {
            // Asignar el valor recibido al voltaje correspondiente
            switch(topic) {
                case 'P_kw1':
                    PActiva_1 = parseInt(message);
                     break;
                case 'P_kva1':
                    PAparente1 = parseInt(message);
                    break;
                case 'P_kvar1':
                     PReactiva1= parseInt(message);
                    break;
                case 'fp1':
                    Fp1 = parseFloat(message);
                    $("#Fp1").html(Fp1);
                    break;
                
                    /*Trafo2 */
                    case 'P_kw2':
                    PActiva_2 = parseInt(message);
                     break;
                case 'P_kva2':
                    PAparente2 = parseInt(message);
                    break;
                case 'P_kvar2':
                     PReactiva2= parseInt(message);
                    break;
                case 'fp2':
                    Fp2 = parseFloat(message);
                    $("#Fp2").html(Fp2);
                    break;
                    /*Trafo 3 */
                    case 'P_kw3':
                    PActiva_3 = parseInt(message);
                     break;
                case 'P_kva3':
                    PAparente3 = parseInt(message);
                    break;
                case 'P_kvar3':
                     PReactiva3= parseInt(message);
                    break;
                case 'fp3':
                    Fp3 = parseFloat(message);
                    $("#Fp3").html(Fp3);
                    break;
                     /*Trafo 4 */
                     case 'P_kw4':
                    PActiva_4 = parseInt(message);
                     break;
                case 'P_kva4':
                    PAparente4 = parseInt(message);
                    break;
                case 'P_kvar4':
                     PReactiva4= parseInt(message);
                     
                    break;
                case 'fp4':
                    Fp4 = parseFloat(message);
                    $("#Fp4").html(Fp4);
                    break;
            }

            // Actualizar los datos del gráfico
            myBarChart.data.datasets[0].data = [PActiva_1, PReactiva1, PAparente1];
            myBarChart1.data.datasets[0].data = [PActiva_2, PReactiva2, PAparente2];
            myBarChart2.data.datasets[0].data = [PActiva_3, PReactiva3, PAparente3];
            myBarChart3.data.datasets[0].data = [PActiva_4, PReactiva4, PAparente4];
 


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
                labels: ['Potencia Activa', 'Potencia Reactiva', 'Potencia Aparente'],
                datasets: [{
                    label: 'Potencias',
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
                labels: ['Potencia Activa', 'Potencia Reactiva', 'Potencia Aparente'],
                datasets: [{
                    label: 'Potencias',                    data: [0, 0, 0],
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
                labels: ['Potencia Activa', 'Potencia Reactiva', 'Potencia Aparente'],
                datasets: [{
                    label: 'Potencias',
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
                labels: ['Potencia Activa', 'Potencia Reactiva', 'Potencia Aparente'],
                datasets: [{
                    label: 'Potencias',
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