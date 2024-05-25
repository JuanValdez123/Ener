<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENERSIGHT</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/mqtt@3.0.0/dist/mqtt.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    
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
                        <i class="lni lni-agenda text-danger"></i>
                        <span  class="text-danger">General</span>
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
                    <i class="lni lni-dashboard"></i>
                        <span >Energía</span>
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
                <h1>
                   
                </h1>
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-success">Parámetros fundamentales</h6>
                         
                      </div>
                       <div class="col-md-3"  >
                      <div class="card" id="transformador1" style="background: linear-gradient(to right, #0f1a24, #3498db);">
                          <div class="card-body text-white">
                            <h5 class="card-title text-center">Transformador1 </h5>
                             <p class="card-text text-center">Corriente(A): <span id="corriente_1">0</span></p>
                             <p class="card-text text-center">Frecuencia(Hz): <span id="f1">50</span></p>
                             <p class="card-text text-center">Factor de potencia: <span id="fp1">0.9</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card" id="transformador2" style="background: linear-gradient(to right, #0f1a24, #3498db);">
                        <div class="card-body text-white">
                            <h5 class="card-title text-center">Transformador2 </h5>
                             <p class="card-text text-center">Corriente(A): <span id="corriente_2">0</span></p>
                             <p class="card-text text-center">Frecuencia(Hz): <span id="f2">50</span></p>
                             <p class="card-text text-center">Factor de potencia: <span id="fp2">0.9</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                      <div class="card" id="transformador3"  style="background: linear-gradient(to right, #0f1a24, #3498db);">
                          <div class="card-body text-white">
                          <h5 class="card-title text-center">Transformador3</h5>
                           <p class="card-text text-center">Corriente(A): <span id="corriente_3">0</span></p>
                             <p class="card-text text-center">Frecuencia(Hz): <span id="f3">50</span></p>
                             <p class="card-text text-center">Factor de potencia: <span id="fp3">0.9</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                      <div class="card" id="transformador4"  style="background: linear-gradient(to right, #0f1a24, #3498db);" >
                          <div class="card-body text-white">
                          <h5 class="card-title text-center">Transformador4</h5>
                          <p class="card-text text-center">Corriente(A): <span id="corriente_4">0</span></p>
                             <p class="card-text text-center">Frecuencia(Hz): <span id="f4">50</span></p>
                             <p class="card-text text-center">Factor de potencia: <span id="fp4">0.9</span></p>
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="container mt-4">
                    <div class="row">
                      <h6 class="text-success text-center">Voltaje Linea-Linea(V)</h6>
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        // Conectarse al broker MQTT
        var client = mqtt.connect('ws://54.233.74.126:8093/mqtt');
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
            client.subscribe('vr1');
            client.subscribe('vs1');
            client.subscribe('vt1');
            client.subscribe('vpro1');
            client.subscribe('irst1');

            /**Transformador 2 */
            client.subscribe('vr2');
            client.subscribe('vs2');
            client.subscribe('vt2');
            client.subscribe('vpro2');
            client.subscribe('irst2');

             /**Transformador 3 */
             client.subscribe('vr3');
            client.subscribe('vs3');
            client.subscribe('vt3');
            client.subscribe('vpro3');
            client.subscribe('irst3');

              /**Transformador 4 */
            client.subscribe('vr4');
            client.subscribe('vs4');
            client.subscribe('vt4');
            client.subscribe('vpro4');
            client.subscribe('irst4');

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
                case 'irst1':
                    corriente1 = parseInt(message);
                    if (corriente1 > corrienteMaxima1 ) {
                      corrienteMaxima1  = corriente1;
            }
                   
                    $("#corriente_1").html(corriente1);

                    $("#corriente_max1").html(corrienteMaxima1);


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
                case 'irst2':
                    corriente2 = parseInt(message);
                    if (corriente2 > corrienteMaxima2 ) {
                      corrienteMaxima2  = corriente2;
            }
                   
                    $("#corriente_2").html(corriente2);

                    $("#corriente_max2").html(corrienteMaxima2);

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
                case 'irst3':
                    corriente3 = parseInt(message);
                    if (corriente3 > corrienteMaxima3 ) {
                      corrienteMaxima3  = corriente3;
            }
                   
                    $("#corriente_3").html(corriente3);

                    $("#corriente_max3").html(corrienteMaxima3);

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
<!-- Enlace a Bootstrap JS (opcional, solo si necesitas funcionalidades como el menú desplegable en dispositivos móviles) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
 
</body>

</html>