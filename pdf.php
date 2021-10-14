<?php  

require_once('assets/fpdf/fpdf.php'); 

class PDF extends FPDF{

    function header(){

        $this->Image('assets/imagenes/logo.png',15,6,25);
        $this->SetFont('Arial','B',15);
        $this->Cell(80);
        $this->Cell(30,10,'Diagnostico Detallado',0,0,'C');
        $this->Ln(20);

    }

}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Output();



?>