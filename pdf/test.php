<?php

require_once('tcpdf/tcpdf.php');
date_default_timezone_set('Europe/Paris');
$pdf = new TCPDF();


// Configuration du document PDF
$pdf->SetCreator('Mon Application');
$pdf->SetLineStyle(array('width' => 0, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 255, 255)));
$pdf->SetAuthor('Moi');
$pdf->SetTitle('Programme');
$pdf->SetSubject('Facture générée avec TCPDF');
$pdf->SetKeywords('Facture, PDF, exemple');

// Ajout d'une nouvelle page
$pdf->setPrintHeader(false);
$pdf->AddPage();

// logo et entete
$pdf->Image('logo0.png', $x=10, $y=5, $w=60, $h=15, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false);
$pdf->SetXY(12, 19);
$pdf->Cell(1, 2, 'SLIJE Regime', 0, 1);

// style ligne
$pdf->Ln(8);
$pdf->SetX(0);
$pdf->SetFillColor(0, 25, 0);
$pdf->Cell(125, 12, '', 1, 0, 'C', true); 
$pdf->SetFillColor(255, 255, 255); 
$pdf->SetFont('Helvetica', '', 20);
$pdf->Cell(55, 12, 'PROGRAMME', 1, 0, 'C', true); 
$pdf->SetFillColor(123, 68, 144);
$pdf->Cell(30, 12, '', 1, 0, 'C', true); 

// info sur client
$pdf->SetXY(12,55);
$pdf->SetFont('Helvetica', '', 15);
$pdf->Cell(0, 10, 'Sport approprie:', 0, 1);
// 
$pdf->SetXY(12,62);
$pdf->SetFont('Helvetica', '', 12);
$pdf->Cell(0, 10, 'Natation', 0, 1);
// 
$pdf->SetXY(12,68);
$pdf->SetFont('Helvetica', '', 11);
$pdf->Cell(0, 10, '2 fois/semaine', 0, 1);
// 
$pdf->SetXY(12,73);
$pdf->SetFont('Helvetica', '', 11);
$pdf->Cell(0, 10, '2 heures', 0, 1);


// numero
$pdf->SetXY(127,67);
$pdf->SetFont('Helvetica', '', 12);
$pdf->Cell(0, 10, 'Regime:', 0, 1);

$pdf->SetXY(180,67);
$pdf->SetFont('Helvetica', '', 12);
$pdf->Cell(0, 10, 'XXXXX', 0, 1);
// DATE
$pdf->SetXY(127,74);
$pdf->SetFont('Helvetica', '', 12);
$pdf->Cell(0, 10, 'Duree:', 0, 1);

$pdf->SetXY(160,74);
$pdf->SetFont('Helvetica', '', 12);
$pdf->Cell(0, 10, ' ' . date('d/m/Y'), 0, 1);


// tableau 

$pdf->Ln(18);
// Tableau des produits
for ($j=1; $j < 5; $j++) { 
    
    $pdf->SetFont('Helvetica', 'B', 20);
    $pdf->SetX(44);
    $pdf->Cell(40, 30, 'SEMAINE '.$j, 1, 1, 'C');

    $pdf->SetFont('Helvetica', 'B', 12);
    $pdf->SetX(44);
    $pdf->SetFillColor('#ded369');
    $pdf->SetTextColor(255, 255, 255);
    $pdf->Cell(40, 10, 'Petit-déjeuner', 1, 0, 'C',true);
    $pdf->Cell(40, 10, 'Déjeuner', 1, 0, 'C',true);
    $pdf->Cell(40, 10, 'Diner', 1, 0, 'C',true);
    $pdf->Cell(40, 10, 'Collation', 1, 1, 'C',true);
    
    $pdf->SetX(4);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->SetTextColor(0, 0, 0);
    
    $x = $pdf->getX();
    for ($i=1; $i <8 ; $i++) { 
        $pdf->SetDrawColor(128,128,128);
        $pdf->SetX($x);
        $pdf->SetFont('Helvetica', 'B', 12);
        $pdf->Cell(40, 15, 'Jour '. $i, 1, 0, 'C',true);
        $pdf->SetFont('Helvetica', '', 9);
        for ($z=0; $z < 4; $z++) { 
            if ($z==3) {
                $pdf->Cell(40, 15, 'Cereale fotsiny', 1, 1, 'C',true);
            } else {
                
                $pdf->Cell(40, 15, 'Cereales et fruits rouges ', 1, 0, 'C',true);
            }
      
        }
        $pdf->SetDrawColor(128,128,128);
        $pdf->Line(5, $pdf->getY(), 205,$pdf->getY());
        // $pdf->SetDrawColor(250,250,25);
    }
    $pdf->AddPage();
    $pdf->Ln(30);
    $pdf->SetDrawColor(250,250,250);
    $pdf->SetFont('Helvetica', 'B', 20);
    $pdf->SetXY(44,10);
    // $pdf->Cell(40, 10, 'SEMAINE '.$j, 1, 1, 'C',true);
    
}





// Enregistrement et téléchargement du fichier PDF*
$pdf->Output('facture.pdf', 'I');


?>