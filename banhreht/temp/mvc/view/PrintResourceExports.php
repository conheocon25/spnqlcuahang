<?php	
	require_once("mvc/base/ViewHelper.php");
	//require_once("mvc/library/PHPTAL/PHPTAL.php");	
	$req = VH::getRequest();		
	$Title = $req->getProperty('Title');
	
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
			$this->SetY(-10);
			$this->SetFont('freeserif', '', 8);
			$this->Cell(0, 5, 'Trang '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
		}
	}
	$pdf = new MYPDF("L", PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetHeaderData();
	$pdf->setHeaderFont(Array('freeserif', '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array('freeserif', '', PDF_FONT_SIZE_DATA));
		
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);	
	$pdf->SetMargins(3, 10, 3);
	$pdf->SetHeaderMargin(3);

	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	$pdf->setLanguageArray($l);

	$pdf->AddPage();	
	$pdf->Ln(1);
	$pdf->SetFont('freeserif', 'B', 14);
	$pdf->Write(0, $Title, '', 0, 'C', true, 0, false, false, 0);	
	$pdf->Ln(2);
	$pdf->SetFont('freeserif', 'N', 12);
	$tpl = new PHPTAL( "mvc/templates/PrintResourceExports.html" );		
	$tpl->fToday = $req->getProperty('fToday', $fToday);
	
	$html = $tpl->execute();			
	$pdf->writeHTML($html, true, false, true, false, '');	
	$pdf->SetFont('freeserif', 'N', 11);
	$pdf->Cell(0, 10, 'Tiền Giang, ngày ....... tháng ....... năm 2011', 0, false, 'R', 0, '', 0, false, 'M', 'M');	
	$pdf->Ln(6);	
	$pdf->SetX(30);
	$pdf->Cell(0, 10, 'Quản lý lò', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->SetX(230);
	$pdf->Cell(0, 10, 'Doanh nghiệp', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->Ln(6);
	$pdf->SetX(30);
	$pdf->Cell(0, 10, 'Ký tên', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->SetX(235);
	$pdf->Cell(0, 10, 'Ký tên', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	
	$pdf->lastPage();
	$pdf->Output('PrintProductImportTrackings.pdf', 'I');		
?>
