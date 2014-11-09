<?php	
require_once("mvc/base/ViewHelper.php");
//require_once("mvc/library/PHPTAL/PHPTAL.php");	
$req = VH::getRequest();		

//require_once('mvc/library/tcpdf/config/lang/eng.php');
//require_once('mvc/library/tcpdf/tcpdf.php');	
class MYPDF extends TCPDF {
	//Page header
	public function Header() {
	}
	// Page footer
	public function Footer() {	
	}
}
	$pdf = new MYPDF("L", PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);				
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
	$pdf->SetMargins(1, 3, 1);
		
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);	
	$pdf->setLanguageArray($l);
	
	$pdf->AddPage();
	$pdf->SetFont('freeserif', 'N', 16);
	$tpl = new PHPTAL( "mvc/templates/PrintProductLabel.html" );			
	$tpl->FullName = $req->getProperty('FullName');
	$tpl->Quantity = $req->getProperty('Quantity');
	$html = $tpl->execute();
	$pdf->writeHTML($html, true, false, true, false, '');	
	$pdf->Output('PrintProductLabel.pdf', 'I');
?>