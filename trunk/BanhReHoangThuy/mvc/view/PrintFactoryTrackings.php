<?php	
	require_once("mvc/base/ViewHelper.php");
	//require_once("mvc/library/PHPTAL/PHPTAL.php");	
	$req = VH::getRequest();		
	$Title = $req->getProperty('Title');
	$FactoryTrackings = $req->getObject('FactoryTrackings');
	
	
//require_once('mvc/library/tcpdf/config/lang/eng.php');
//require_once('mvc/library/tcpdf/tcpdf.php');
	
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
		$image_file = K_PATH_IMAGES.'tcpdf_logo.jpg';
		$this->Image($image_file, 15, 05, 32, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
		$this->SetFont('freeserif', 'B', 16);
		// Title
		$this->SetX(70);		
		$this->Write(0, 'Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam', '', 0, 'C', true, 0, false, false, 0);
		$this->SetFont('freeserif', 'B',14);	
		$this->SetX(70);		
		$this->Write(0, 'Độc lập - Tự do - Hạnh phúc', '', 0, 'C', true, 0, false, false, 0);		
	}
	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('freeserif', '', 8);
		// Page number
		$this->Cell(0, 10, 'Trang '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}
	
	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, '', '');

	$pdf->setHeaderFont(Array('freeserif', '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array('freeserif', '', PDF_FONT_SIZE_DATA));

	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	$pdf->setLanguageArray($l);

	$pdf->AddPage();	
	$pdf->SetFont('freeserif', 'N', 13);			
	$tpl = new PHPTAL( "mvc/templates/PrintFactoryTrackings.html" );	
	
	$tpl->Title = $Title;
	$tpl->FactoryTrackings  = $FactoryTrackings;
	
	$html = $tpl->execute();			
	$pdf->writeHTML($html, true, false, true, false, '');
	
	$pdf->Ln(6);	
	$pdf->Cell(0, 15, 'Tiền Giang, ngày ....... tháng ....... năm ........', 0, false, 'R', 0, '', 0, false, 'M', 'M');	
	$pdf->Ln(6);	
	$pdf->SetX(30);
	$pdf->Cell(0, 15, 'Người lập bảng', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->SetX(150);
	$pdf->Cell(0, 15, 'Chủ cửa hàng', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->Ln(6);
	$pdf->SetX(30);
	//$pdf->Cell(0, 15, 'Ký tên đóng dấu', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->SetX(147);
	$pdf->Cell(0, 15, 'Ký tên đóng dấu', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	
	$pdf->lastPage();
	$pdf->Output('PrintFactoryTrackings.pdf', 'I');
?>