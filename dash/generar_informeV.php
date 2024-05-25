<?php

// Verificar si se han enviado los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $fecha_inicio = $_POST["fecha_inicio"];
    $fecha_fin = date('Y-m-d 23:59:59', strtotime($_POST["fecha_fin"]));
    $transformador = $_POST["transformador"];

    // Nombre del transformador
    $nombre_transformador = '';
    if ($transformador == 1) {
        $nombre_transformador = 'Transformador 1';
    }
    if ($transformador == 2) {
        $nombre_transformador = 'Transformador 4';
    }
    if ($transformador == 3) {
        $nombre_transformador = 'Transformador 4';
    }
    if ($transformador == 4) {
        $nombre_transformador = 'Transformador 4';
    }
    // Conectar a la base de datos
    $conexion = new mysqli("localhost", "root", "", "energia");
    if ($conexion->connect_error) {
        die("Error al conectar a la base de datos: " . $conexion->connect_error);
    }

    // Preparar la consulta SQL
    $consulta = "SELECT * FROM potencias WHERE tiempo BETWEEN '$fecha_inicio' AND '$fecha_fin' AND trafo = $transformador";

    // Ejecutar la consulta
    $resultado = $conexion->query($consulta);

    // Verificar si hay resultados
    if ($resultado->num_rows > 0) {
        // Importar la clase FPDF
        require('fpdf/fpdf.php');

        // Crear un nuevo objeto PDF
        $pdf = new FPDF();
        $pdf->AddPage();
   // Obtener el ancho de la página
   $ancho_pagina = $pdf->GetPageWidth();

   // Calcular la posición x para centrar la imagen
   $posicion_x = ($ancho_pagina - 45) / 2;

   // Agregar logo centrado en la parte superior
   $pdf->Image("../logo1.png", $posicion_x, 0, 45);    //$pdf->Image("images/im1.png", 228, 15, 30,18);


    $pdf->Ln(20);


        // Variables para calcular la suma de la energía activa
        $suma_energia_activa = 0;

        // Agregar título al informe
        $titulo = 'Informe de Voltajes y Corrientes';
        if (!empty($nombre_transformador)) {
            $titulo .= ' - ' . $nombre_transformador;
        }
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(0, 10, utf8_decode($titulo), 0, 1, 'C');
        $pdf->Ln(10);

        // Agregar títulos de las columnas
        $pdf->SetFont('Arial', 'B', 10);
         $pdf->Cell(28, 10, utf8_decode('VOLTAJE RS(V)'), 1, 0, 'C');
        $pdf->Cell(28, 10, utf8_decode('VOLTAJE ST(V)'), 1, 0, 'C');
        $pdf->Cell(28, 10, utf8_decode('VOLTAJE TR(V)'), 1, 0, 'C');
        $pdf->Cell(34, 10, utf8_decode('VOLTAJE PROM(V)'), 1, 0, 'C');
        $pdf->Cell(40, 10, utf8_decode('CORRIENTE PROM(A)'), 1, 0, 'C');
        $pdf->Cell(34, 10, 'Tiempo', 1, 1, 'C');

        // Agregar datos de la consulta
        $pdf->SetFont('Arial', 'B', 10);
        while ($fila = $resultado->fetch_assoc()) {
             $pdf->Cell(28, 10, $fila['VRS'], 1, 0, 'C');
            $pdf->Cell(28, 10, $fila['VST'], 1, 0, 'C');
            $pdf->Cell(28, 10, $fila['VTR'], 1, 0, 'C');
            $pdf->Cell(34, 10, $fila['VPROME'], 1, 0, 'C');
            $pdf->Cell(40, 10, $fila['IPROME'], 1, 0, 'C');
            $pdf->Cell(34, 10, $fila['tiempo'], 1, 0, 'C');

 
        }

       

        // Nombre del archivo PDF
        $nombre_archivo = 'Informe_Voltaje_Corriente';
        if (!empty($nombre_transformador)) {
            $nombre_archivo .= '_' . str_replace(' ', '_', $nombre_transformador);
        }
        $nombre_archivo .= '_' . date('Y-m-d') . '.pdf';

        // Generar el PDF en una ubicación temporal
        $pdf->Output('F', $nombre_archivo);

        // Descargar el archivo PDF
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $nombre_archivo . '"');
        readfile($nombre_archivo);

        // Eliminar el archivo temporal
        unlink($nombre_archivo);

        // Terminar el script después de enviar el archivo
        exit;
    } else {
        echo "No se encontraron resultados para el rango de fechas y transformador seleccionados.";
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>
