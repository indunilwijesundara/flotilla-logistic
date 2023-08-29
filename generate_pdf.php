<?php
require_once('tcpdf/tcpdf.php'); // Include the TCPDF library

// Create a new TCPDF instance
$pdf = new TCPDF();

// Set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Generated Invoice PDF');

// Add a page
$pdf->AddPage();

// Get the HTML content from the POST request
$htmlContent = $_POST['invoiceHtml'];

// Convert HTML content to PDF
$pdf->writeHTML($htmlContent, true, false, true, false, '');

// Define the file path where you want to save the PDF
$filePath = 'generated_invoice.pdf'; // Update with the correct path

// Save the PDF to the file location
$pdf->Output($filePath, 'F'); // 'F' means file

// Send a response to indicate success
echo json_encode(array('success' => true));
?>