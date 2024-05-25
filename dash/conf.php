<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENERSIGHT-CONFIGURACIÓN</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                    <i class="lni lni-cogs text-danger"></i>
                   <span class="text-danger">Configuración</span>
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
        <form id="filtroForm" class="row g-3" method="post">
        <label for="tipo_medida" class="form-label">Configuración de voltaje(V)</label>

    <div class="col-md-2">
        <label for="tipo_medida" class="form-label">Tipo de Medida</label>
        <select class="form-select" id="tipo_medida" name="tipo_medida" required>
            <option value="voltaje">Voltaje RS</option>
            <option value="corriente">Voltaje ST</option>
            <option value="potencia">Voltaje TR</option>
         </select>
    </div>
    <div class="col-md-2">
        <label for="valor" class="form-label">Valor</label>
        <input type="text" class="form-control" id="valor" name="valor" required>
    </div>
    <div class="col-md-2">
        <label for="operador" class="form-label">Operador</label>
        <select class="form-select" id="operador" name="operador" required>
            <option value="mayor">Mayor</option>
            <option value="menor">Menor</option>
            <option value="mayor_igual">Mayor o Igual</option>
            <option value="menor_igual">Menor o Igual</option>
            <option value="igual">Igual</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="valor_operador" class="form-label">Valor Operador</label>
        <input type="text" class="form-control" id="valor_operador" name="valor_operador" required>
    </div>
    <div class="col-md-2">
        <label for="transformador" class="form-label">Transformador</label>
        <select class="form-select" id="transformador" name="transformador" required>
            <option value="trafo1">Trafo 1</option>
            <option value="trafo2">Trafo 2</option>
            <option value="trafo3">Trafo 3</option>
            <option value="trafo4">Trafo 4</option>
        </select>
    </div>
    <div class="col-md-4">
        <div class="row">
         
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</form>

<form id="filtroForm" class="row g-3" method="post">
        <label for="tipo_medida" class="form-label">Configuración de corriente(A)</label>

    <div class="col-md-2">
        <label for="tipo_medida" class="form-label">Tipo de Medida</label>
        <select class="form-select" id="tipo_medida" name="tipo_medida" required>
            <option value="corriente">Corriente media</option>
            
         </select>
    </div>
    <div class="col-md-2">
        <label for="valor" class="form-label">Valor</label>
        <input type="text" class="form-control" id="valor" name="valor" required>
    </div>
    <div class="col-md-2">
        <label for="operador" class="form-label">Operador</label>
        <select class="form-select" id="operador" name="operador" required>
            <option value="mayor">Mayor</option>
            <option value="menor">Menor</option>
            <option value="mayor_igual">Mayor o Igual</option>
            <option value="menor_igual">Menor o Igual</option>
            <option value="igual">Igual</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="valor_operador" class="form-label">Valor Operador</label>
        <input type="text" class="form-control" id="valor_operador" name="valor_operador" required>
    </div>
    <div class="col-md-2">
        <label for="transformador" class="form-label">Transformador</label>
        <select class="form-select" id="transformador" name="transformador" required>
            <option value="trafo1">Trafo 1</option>
            <option value="trafo2">Trafo 2</option>
            <option value="trafo3">Trafo 3</option>
            <option value="trafo4">Trafo 4</option>
        </select>
    </div>
    <div class="col-md-4">
        <div class="row">
         
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</form>
<form id="filtroForm" class="row g-3" method="post">
        <label for="tipo_medida" class="form-label">Configuración de Potencia</label>

    <div class="col-md-2">
        <label for="tipo_medida" class="form-label">Tipo de Medida</label>
        <select class="form-select" id="tipo_medida" name="tipo_medida" required>
            <option value="pactiva">Potencia activa(kW)</option>
            <option value="corriente">Potencia reactiva(kvar)</option>
            <option value="potencia">Potencia aparente(kva)</option>
            <option value="fp">Factor de potencia</option>

         </select>
    </div>
    <div class="col-md-2">
        <label for="valor" class="form-label">Valor</label>
        <input type="text" class="form-control" id="valor" name="valor" required>
    </div>
    <div class="col-md-2">
        <label for="operador" class="form-label">Operador</label>
        <select class="form-select" id="operador" name="operador" required>
            <option value="mayor">Mayor</option>
            <option value="menor">Menor</option>
            <option value="mayor_igual">Mayor o Igual</option>
            <option value="menor_igual">Menor o Igual</option>
            <option value="igual">Igual</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="valor_operador" class="form-label">Valor Operador</label>
        <input type="text" class="form-control" id="valor_operador" name="valor_operador" required>
    </div>
    <div class="col-md-2">
        <label for="transformador" class="form-label">Transformador</label>
        <select class="form-select" id="transformador" name="transformador" required>
            <option value="trafo1">Trafo 1</option>
            <option value="trafo2">Trafo 2</option>
            <option value="trafo3">Trafo 3</option>
            <option value="trafo4">Trafo 4</option>
        </select>
    </div>
    <div class="col-md-4">
        <div class="row">
         
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</form>
<form id="filtroForm" class="row g-3" method="post">
        <label for="tipo_medida" class="form-label">Configuración de energía </label>

    <div class="col-md-2">
        <label for="tipo_medida" class="form-label">Tipo de Medida</label>
        <select class="form-select" id="tipo_medida" name="tipo_medida" required>
            <option value="voltaje">Energía activa(kWh)</option>
            <option value="corriente">Energía reactiva(kvarh)</option>
            <option value="potencia">Energía aparente(kvah)</option>
         </select>
    </div>
    
    <div class="col-md-2">
        <label for="operador" class="form-label">Operador</label>
        <select class="form-select" id="operador" name="operador" required>
            <option value="mayor">Mayor</option>
            <option value="menor">Menor</option>
            <option value="mayor_igual">Mayor o Igual</option>
            <option value="menor_igual">Menor o Igual</option>
            <option value="igual">Igual</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="valor_operador" class="form-label">Valor Operador</label>
        <input type="text" class="form-control" id="valor_operador" name="valor_operador" required>
    </div>
    <div class="col-md-2">
        <label for="transformador" class="form-label">Transformador</label>
        <select class="form-select" id="transformador" name="transformador" required>
            <option value="trafo1">Trafo 1</option>
            <option value="trafo2">Trafo 2</option>
            <option value="trafo3">Trafo 3</option>
            <option value="trafo4">Trafo 4</option>
        </select>
    </div>
    <div class="col-md-4">
        <div class="row">
         
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        // Definir variables globales para almacenar los valores del formulario
        let tipoMedida = '';
         let operador = '';
        let valorOperador = '';
        let transformador = '';

        // Capturar el evento submit del formulario
        document.getElementById('filtroForm').addEventListener('submit', function (event) {
            // Prevenir el envío del formulario al servidor
            event.preventDefault();

            // Obtener los valores de los campos del formulario
            tipoMedida = document.getElementById('tipo_medida').value;
             operador = document.getElementById('operador').value;
            valorOperador = document.getElementById('valor_operador').value;
            transformador = document.getElementById('transformador').value;

            // Aquí puedes realizar cualquier acción que necesites con los valores capturados,
            // como enviarlos a un servidor, mostrarlos en la consola, etc.
            
            // Ejemplo de cómo mostrar los valores en la consola
            console.log('Tipo de Medida:', tipoMedida);
            console.log('Valor:', valor);
            console.log('Operador:', operador);
            console.log('Valor Operador:', valorOperador);
            console.log('Transformador:', transformador);
        });
    </script>
</body>

</html>