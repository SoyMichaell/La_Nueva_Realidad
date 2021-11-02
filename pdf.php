<?php

require_once 'views/session.php';
require_once 'assets/fpdf/fpdf.php';

class PDF extends FPDF{

function Header(){
  $this->Image('assets/imagenes/logo.png',20,10,20);
  $this->setFont('Arial','B',13);
  $this->Cell(75);
  $this->Cell(35,30,'Reporte diagnostico global',0,0,'C');
  $this->Ln();
}

function Footer(){
  $this->SetY(-15);
  $this->setFont('Arial','I',8);
  $this->Cell(0,10,'Pagina'.$this->PageNo().'{nb}',0,0,'C');
}
}

$consulta_diagnosticos = $conexion->prepare("SELECT * FROM diagnostico_global
                                            INNER JOIN empresas_2020 ON diagnostico_global.nit_empresa_d=empresas_2020.nit");
$consulta_diagnosticos->execute();
$datos = $consulta_diagnosticos->fetchAll();

$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial','',12);

foreach ($datos as $data) {
$pdf->Cell(35,0,'Nit empresa'.": ".$data['nit_empresa_d']);
$pdf->Ln();
$pdf->Cell(35,10,'Razon social'.": ".$data['razon_social']);
$pdf->Ln();

$w = array(50,50,50,50);
$pdf->Cell(50,12,'Crecimiento y desarrollo',1,0,'C');
$pdf->Cell(50,12,'Clientes',1,0,'C');
$pdf->Cell(50,12,'Procesos internos',1,0,'C');
$pdf->Cell(40,12,'Financiera',1,0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','',12);

$pdf->Cell($w[0],12,$data['perspectiva_c_d'],1,0,'C');
$pdf->Cell($w[1],12,$data['perspectiva_c'],1,0,'C');
$pdf->Cell($w[2],12,$data['perspectiva_p_i'],1,0,'C');
$pdf->Cell(40,12,$data['perspectiva_f'],1,0,'C');
$pdf->Ln();

$pdf->Cell(140,12,'Total puntajes perspectivas',1,0,'C');
$pdf->Cell(50,12,$data['total_perspectivas'],1,0,'C');
$pdf->Ln();
$pdf->Ln();
}

$pdf->Output();

?>
