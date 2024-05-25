<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENERSIGHT-REPORTES</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
                    <i class="lni lni-dashboard"></i>
                        <span>Energía</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="tabla.php" class="sidebar-link">
                    <i class="lni lni-warning"></i>
                        <span >Alarmas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="reporte.php" class="sidebar-link">
                    <i class="lni lni-clipboard text-danger"></i>
                        <span  class="text-danger">Reportes</span>
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
                   INFORMES
                </h1>
                <div class="row">
    <h6 class="text-success text-center">Generar Informe </h6>
    <div class="col-md-4"  >
    <h2>Energía</h2>
    <form action="generar_informe.php" method="post">
    <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Fecha de inicio:</label>
        <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
    </div>
    <div class="mb-3">
        <label for="fecha_fin" class="form-label">Fecha de fin:</label>
        <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
    </div>
    <div class="mb-3">
        <label for="transformador" class="form-label">Seleccione el transformador:</label>
        <select class="form-select" id="transformador" name="transformador">
            <option value="1">Transformador 1</option>
            <option value="2">Transformador 2</option>
            <option value="3">Transformador 3</option>
            <option value="4">Transformador 4</option>

            <!-- Agrega opciones para otros transformadores si es necesario -->
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Generar Informe</button>
</form>

    
    </div>

    <div class="col-md-4"  >
    <h2>Potencias</h2>
    <form action="generar_informeP.php" method="post">
    <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Fecha de inicio:</label>
        <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
    </div>
    <div class="mb-3">
        <label for="fecha_fin" class="form-label">Fecha de fin:</label>
        <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
    </div>
    <div class="mb-3">
        <label for="transformador" class="form-label">Seleccione el transformador:</label>
        <select class="form-select" id="transformador" name="transformador">
        <option value="1">Transformador 1</option>
            <option value="2">Transformador 2</option>
            <option value="3">Transformador 3</option>
            <option value="4">Transformador 4</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Generar Informe</button>
</form>

    
</div>
<div class="col-md-4" >
    <h2>Voltajes y Corrientes media</h2>
    <form action="generar_informeV.php" method="post">
    <div class="mb-3">
        <label for="fecha_inicio" class="form-label">Fecha de inicio:</label>
        <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
    </div>
    <div class="mb-3">
        <label for="fecha_fin" class="form-label">Fecha de fin:</label>
        <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
    </div>
    <div class="mb-3">
        <label for="transformador" class="form-label">Seleccione el transformador:</label>
        <select class="form-select" id="transformador" name="transformador">
        <option value="1">Transformador 1</option>
            <option value="2">Transformador 2</option>
            <option value="3">Transformador 3</option>
            <option value="4">Transformador 4</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Generar Informe</button>
</form>

    
</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>