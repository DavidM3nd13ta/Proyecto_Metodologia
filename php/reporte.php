<?php
    include("conexion.php");
    include("../pdf/fpdf.php");
    
    $cedula=$_POST['cedula'];

    $consulta="SELECT*FROM cliente WHERE Cedula='$cedula'";
    $resultadoConsulta=mysqli_query($conexion, $consulta);

    $reporte=new FPDF("L", "mm", array(55, 345));
    $reporte->AddPage();
    $reporte->SetFont("Arial", "B", 12);
    $reporte->Cell(325, 8, "Factura Trabajo", 1, 0, "C");
    $reporte->Ln(8);
    $reporte->Cell(25, 8, "Cedula", 1, 0, "C");
    $reporte->Cell(25, 8, "Nombre", 1, 0, "C");
    $reporte->Cell(25, 8, "Apellido", 1, 0, "C");
    $reporte->Cell(30, 8, "Tipo Servicio", 1, 0, "C");
    $reporte->Cell(25, 8, "Telefono", 1, 0, "C");
    $reporte->Cell(25, 8, "Direccion", 1, 0, "C");
    $reporte->Cell(30, 8, "Fecha Inicio", 1, 0, "C");
    $reporte->Cell(30, 8, "Fecha Fin", 1, 0, "C");
    $reporte->Cell(30, 8, "Descripcion", 1, 0, "C");
    $reporte->Cell(30, 8, "ValorPrecio", 1, 0, "C");
    $reporte->Cell(25, 8, "Abono", 1, 0, "C");
    $reporte->Cell(25, 8, "Restante", 1, 1, "C");

    $reporte->SetFont("Arial", "B", 12);
    
    while($datos=mysqli_fetch_assoc($resultadoConsulta)){
        $reporte->Cell(25, 8, $datos['Cedula'], 1, 0, "C");
        $reporte->Cell(25, 8, $datos['Nombre'], 1, 0, "C");
        $reporte->Cell(25, 8, $datos['Apellido'], 1, 0, "C");
        $reporte->Cell(30, 8, $datos['TipoServicio'], 1, 0, "C");
        $reporte->Cell(25, 8, $datos['Telefono'], 1, 0, "C");
        $reporte->Cell(25, 8, $datos['Direccion'], 1, 0, "C");
        $reporte->Cell(30, 8, $datos['FechaInicio'], 1, 0, "C");
        $reporte->Cell(30, 8, $datos['FechaFin'], 1, 0, "C");
        $reporte->Cell(30, 8, $datos['Descripcion'], 1, 0, "C");
        $reporte->Cell(30, 8, $datos['ValorPrecio'], 1, 0, "C");
        $reporte->Cell(25, 8, $datos['Abono'], 1, 0, "C");
        $reporte->Cell(25, 8, $datos['Restante'], 1, 1, "C");
    }

    $reporte->Output();