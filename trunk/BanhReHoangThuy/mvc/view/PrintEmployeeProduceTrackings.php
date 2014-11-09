<?php	
	require_once("mvc/base/ViewHelper.php");
	//require_once("mvc/library/PHPTAL/PHPTAL.php");	
	$req = VH::getRequest();		
	$Title = $req->getProperty('Title');
	$Title1 = $req->getProperty('Title1');
	$EmployeeProduceTrackings = $req->getObject('EmployeeProduceTrackings');	
	$Factory = $req->getObject('Factory');
	$Type = $Factory->getType();
	
	
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
		//$this->SetY(-15);		
		//$this->SetFont('freeserif', '', 8);		
		//$this->Cell(0, 10, 'Trang '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}
	
	$pdf = new MYPDF("L", PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);	
	$pdf->SetHeaderData();
	$pdf->setHeaderFont(Array('freeserif', '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array('freeserif', '', PDF_FONT_SIZE_DATA));
		
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);	
	$pdf->SetMargins(4, 12, 4);	
	$pdf->SetHeaderMargin(3);
				
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	$pdf->setLanguageArray($l);

	$pdf->AddPage();	
	
	$pdf->SetFont('freeserif', 'B', 11);
	$pdf->Write(0, $Title, '', 0, 'C', true, 0, false, false, 0);
	$pdf->Ln(1);
	$pdf->SetFont('freeserif', 'N', 10);
	if ($Type%10 ==1)
		$tpl = new PHPTAL( "mvc/templates/PrintEmployeeProduceTrackings1.html");
	else
		$tpl = new PHPTAL( "mvc/templates/PrintEmployeeProduceTrackings2.html");	
	$tpl->EmployeeProduceTrackings = $EmployeeProduceTrackings;	
	$html = $tpl->execute();
	$pdf->writeHTML($html, true, false, true, false, '');	
				
	$pdf->SetFont('freeserif', 'N', 10);
	$pdf->Cell(0, 15, 'Tiền Giang, ngày ....... tháng ....... năm 2011', 0, false, 'R', 0, '', 0, false, 'M', 'M');	
	$pdf->Ln(4);
	$pdf->SetX(30);
	$pdf->Cell(0, 15, 'Quản lý', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->SetX(230);
	$pdf->Cell(0, 15, 'Doanh nghiệp', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->Ln(4);
	$pdf->SetX(30);
	$pdf->Cell(0, 15, 'Ký tên', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->SetX(235);
	$pdf->Cell(0, 15, 'Ký tên', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	
	$pdf->lastPage();
	$pdf->Output('PrintResourceExportTrackings.pdf', 'I');
?>