<?php	
	require_once("mvc/base/ViewHelper.php");
	//require_once("mvc/library/PHPTAL/PHPTAL.php");	
	$req = VH::getRequest();		
	$Title = $req->getProperty('Title');
	$RETs = $req->getObject('RETs');
	$SRETs = $req->getObject('SRETs');
	
	$SR01 = number_format($SRETs[0][0], 1, '.', '');
	$SR02 = number_format($SRETs[0][1], 1, '.', '');
	$SR03 = number_format($SRETs[0][2], 1, '.', '');
	$SR04 = number_format($SRETs[0][3], 1, '.', '');
	$SR05 = number_format($SRETs[0][4], 1, '.', '');
	$SR06 = number_format($SRETs[0][5], 1, '.', '');
	$SR07 = number_format($SRETs[0][6], 1, '.', '');
	$SR08 = number_format($SRETs[0][7], 1, '.', '');
	$SR09 = number_format($SRETs[0][8], 1, '.', '');
	
//require_once('mvc/library/tcpdf/config/lang/eng.php');
//require_once('mvc/library/tcpdf/tcpdf.php');
	
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		//Logo
		$image_file = K_PATH_IMAGES.'logobanhre.png';
        $this->Image($image_file, 0, 0, 13, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		//setfont
		$this->SetFont('freeserif', '',10);
		//title
		$this->SetX(14);
		$this->Write(0, 'CSSX Bánh Rế Hoàng Thúy', '', 0, 'L', true, 0, false, false, 0);
		$this->SetX(14);
		$this->Write(0, 'QL1A,Cái Bè,Tiền Giang', '', 0, 'L', true, 0, false, false, 0);
		$this->SetX(14);
		$this->Write(0, '(0733) 746 026', '', 0, 'L', true, 0, false, false, 0);
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
	$pdf = new MYPDF("L", PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetHeaderData();
	$pdf->setHeaderFont(Array('freeserif', '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array('freeserif', '', PDF_FONT_SIZE_DATA));
		
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);	
	$pdf->SetMargins(5, 15, 5);	
	$pdf->SetHeaderMargin(3);

	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	$pdf->setLanguageArray($l);

	$pdf->AddPage();	
	$pdf->Ln(1);
	$pdf->SetFont('freeserif', 'B', 14);
	$pdf->Write(0, $Title, '', 0, 'C', true, 0, false, false, 0);	
	$pdf->Ln(2);
	$pdf->SetFont('freeserif', 'N', 11);
	$tpl = new PHPTAL( "mvc/templates/PrintResourceExportTrackings.html" );	
	
	$tpl->RETs = $RETs;	
	$tpl->SR01 = $SR01;	
	$tpl->SR02 = $SR02;	
	$tpl->SR03 = $SR03;	
	$tpl->SR04 = $SR04;	
	$tpl->SR05 = $SR05;	
	$tpl->SR06 = $SR06;	
	$tpl->SR07 = $SR07;	
	$tpl->SR08 = $SR08;	
	$tpl->SR09 = $SR09;
	
	$html = $tpl->execute();
	$pdf->writeHTML($html, true, false, true, false, '');	
	$pdf->SetFont('freeserif', 'N', 11);
		
	$pdf->lastPage();
	$pdf->Output('PrintResourceExportTrackings.pdf', 'I');
?>