<?php

require('connectDatabaseObject.php');
  
  if(isset($_GET["package"]) && $_GET["package"] != "") {
    $sql_query = "SELECT `package`.`Name`, `package`.`Description`, `package`.`ImageLocation`, Price, Stock FROM package Where `package`.`Name` = ?";
    $stmt_object = $db_link -> prepare($sql_query);
    $stmt_object -> bind_param("s", $_GET["package"]);
    $stmt_object -> execute();
    $result = $stmt_object -> get_result();
    if(!($row_result = $result -> fetch_row())) {
      die("Package does not exist");
    }
  } else {
    die("Package does not exist");
  }
// Include the main TCPDF library (search for installation path).
require_once('./TCPDF-master/config/tcpdf_config.php');
require_once('./TCPDF-master/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('QTA');
$pdf->SetTitle($row_result[0]);
$pdf->SetSubject($row_result[0]);
$pdf->SetKeywords($row_result[0]);

// set default header data PDF_HEADER_LOGO
$pdf->SetHeaderData("../images/logo.jpg", 40, $row_result[0], "QTA");

// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, $row_result[0], '', 0, 'C', 1, 0, false, false, 0);

$img = $row_result[2];
$pdf->SetFont('helvetica', '', 12);
//$img = '<img class="card-img-top img-fluid" style="height:350px; width:700px;" src="data:image/jpeg;base64,'.base64_encode( $row_result[2] ).'"/>';
$img = '<img class="card-img-top img-fluid" style="height:350px; width:700px;" src="'.$row_result[2].'"/>';
$pdf->writeHTML($img, true, 0, true, true);
$text = '<p>Description: '.$row_result[1].'</p>';

$pdf->writeHTML($text, true, 0, true, true);
$html = '<p>Stocks:'.$row_result[4].'</p><p>Price:$'.$row_result[3].'</p>';

$pdf->Ln();


$pdf->writeHTML($html, true, 0, true, true);
$pdf->lastPage();
// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output($row_result[0].'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
