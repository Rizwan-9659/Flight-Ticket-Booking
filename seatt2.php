<?php
require('fpdf/fpdf.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ticketNumber = $_POST['ticket_number'];
    $flightInfo = json_decode($_POST['flightInfo'], true);

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Airliness Ticket', 0, 1, 'C');
    $pdf->Ln(10);

    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 10, 'Ticket Number: ' . $ticketNumber);
    $pdf->Ln(8);
    foreach ($flightInfo as $key => $value) {
        $pdf->Cell(40, 10, ucfirst(str_replace('_', ' ', $key)) . ': ' . $value);
        $pdf->Ln(8);
    }

    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(40, 10, 'Total Price: ₹' . $flightInfo['total_price']);
    $pdf->Ln(8);
    
    $pdf->Output('D', 'ticket_' . $ticketNumber . '.pdf');
}
?>
