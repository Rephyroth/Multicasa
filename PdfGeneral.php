<?php

    require 'libraries/database.php';
    require 'fpdf/fpdf.php';
    

    $pdf = new FPDF();
    $pdf->addpage();
    $conexion=mysqli_connect('localhost','root','','Multicasa');
    //encabezado del pdf

    $pdf->setFont('Arial','I','20');
    $pdf->image('public/img/logotipo.png',160,5,20);
    $pdf->image('public/img/logotipo.png',30,5,20);
    $pdf->cell(190,20,'BIENES RAICES MULTICASA',0,1,'C');
    $pdf->setFont('arial','B','20');
    $pdf->cell(190,10,'TU MEJOR OPCION EN AGENCIA DE BIENES RAICES',0,'C',0);
    $pdf->Setx(70);
    $pdf->setFont('arial','B','10');
    $pdf->cell(180,20,'Reporte de casas dadas de alta en nuestra pagina web',0,'C',0);


    //base de datos del PDF
    $pdf->Setx(3);
    $pdf->SetFillColor(200,220,255);
	$pdf->SetFont('Arial','B',12);

	$pdf->Cell(33,6,'Calle y Numero',1,0,'C',1);
	$pdf->Cell(40,6,'Colonia',1,0,'C',1);
	$pdf->Cell(20,6,'Ciudad',1,0,'C',1);
	$pdf->Cell(20,6,'Estado',1,0,'C',1);
	$pdf->Cell(10,6,'CP',1,0,'C',1);
	$pdf->Cell(25,6,'Recamaras',1,0,'C',1);
	$pdf->Cell(15,6,utf8_decode('Baños'),1,0,'C',1);
	$pdf->Cell(20,6,'Precio',1,0,'C',1);
	$pdf->Cell(22,6,'Disponible',1,1,'C',1);
	$pdf->SetFont('Arial','B',10);
    

    
    $consulta = "SELECT CalleYNumero, Colonia, Ciudad, Estado, CP, recamaras, banos, Precio, disponible FROM casa";
	$resultado = mysqli_query($conexion, $consulta);

    for ($i=0; $i<=1000 ; $i++) { 
        $pdf->Setx(3);
		while ($row = mysqli_fetch_assoc($resultado)){
            $pdf->Setx(3);
			$pdf->Cell(33,6,$row['CalleYNumero'],1,0,'C',0);
			$pdf->Cell(40,6,$row['Colonia'],1,0,'C',0);
			$pdf->Cell(20,6,$row['Ciudad'],1,0,'C',0);
			$pdf->Cell(20,6,$row['Estado'],1,0,'C',0);
			$pdf->Cell(10,6,$row['CP'],1,0,'C',0);
			$pdf->Cell(25,6,$row['recamaras'],1,0,'C',0);
			$pdf->Cell(15,6,$row['banos'],1,0,'C',0);
			$pdf->Cell(20,6,$row['Precio'],1,0,'C',0);
			$pdf->Cell(22,6,$row['disponible'],1,1,'C',0);
		}
	}
	$pdf->Output();//creamos el pdf
?>