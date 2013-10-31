<?php	
	require_once("mvc/base/ViewHelper.php");
	//require_once("mvc/library/PHPTAL/PHPTAL.php");	
	$req = VH::getRequest();		
	$Title = $req->getProperty('Title');
	$Generate1 = $req->getProperty('Generate1');
	$Generate2 = $req->getProperty('Generate2');
	$Generate3 = $req->getProperty('Generate3');
	$strGenerate3 = $req->getProperty('strGenerate3');
	$EPs = $req->getObject('EPs');
	$ELs = $req->getObject('ELs');
			
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
	
	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
	$pdf->SetMargins(5, 15, 5);	
	$pdf->SetHeaderMargin(3);

	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	//$pdf->setLanguageArray($l);

	$pdf->AddPage();
	$pdf->Ln(3);
	$pdf->SetFont('freeserif', 'B', 16);
	//$pdf->Write(0, $Name, '', 0, 'C', true, 0, false, false, 0);
	$pdf->Write(0, $Title, '', 0, 'C', true, 0, false, false, 0);	
	$pdf->Ln(3);
	$pdf->SetFont('freeserif', 'N', 11);			
		
	$pdf->SetFont('freeserif', 'B', 13);
	$pdf->Write(0, '1. GIA CÔNG', '', 0, 'L', true, 0, false, false, 0);	
	$pdf->Ln(1);
	$pdf->SetFont('freeserif', 'N', 13);
	$tpl = new PHPTAL( "mvc/templates/PrintEmployeeProduce.html" );		
	$tpl->EPs  = $EPs;
	$html = $tpl->execute();
	$pdf->writeHTML($html, true, false, true, false, '');
		
	$pdf->SetFont('freeserif', 'B', 13);
	$pdf->Write(0, $Generate1, '', 0, 'R', true, 0, false, false, 0);	
		
	$pdf->SetFont('freeserif', 'B', 13);
	$pdf->Write(0, '2. TIỀN ỨNG', '', 0, 'L', true, 0, false, false, 0);	
	$pdf->Ln(1);
	if ($Generate2>0){
		$pdf->SetFont('freeserif', 'N', 13);				
		$tpl = new PHPTAL( "mvc/templates/PrintEmployeeLoan.html" );
		$tpl->ELs  = $ELs;
		$html = $tpl->execute();
		$pdf->writeHTML($html, true, false, true, false, '');
	}	
	$pdf->SetFont('freeserif', 'B', 13);
	$pdf->Write(0, $Generate2, '', 0, 'R', true, 0, false, false, 0);
	
	$pdf->SetFont('freeserif', 'B', 13);
	$pdf->Write(0, '3. TỔNG KẾT', '', 0, 'L', true, 0, false, false, 0);	
	$pdf->Ln(1);
	$pdf->SetFont('freeserif', 'B', 13);
	$pdf->Write(0, '(1) - (2) = '.$Generate1." - ".$Generate2." = ".$Generate3, '', 0, 'R', true, 0, false, false, 0);
	$pdf->SetFont('freeserif', 'BI', 13);
	$pdf->Write(0, "(".$strGenerate3."đồng)", '', 0, 'R', true, 0, false, false, 0);
	
	$pdf->SetFont('freeserif', 'B', 13);
	$pdf->Ln(6);
	$pdf->Cell(0, 15, 'Tiền Giang, ngày ....... tháng ....... năm ........', 0, false, 'R', 0, '', 0, false, 'M', 'M');	
	$pdf->Ln(6);	
	$pdf->SetX(30);
	$pdf->Cell(0, 15, 'Công nhân', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->SetX(150);
	$pdf->Cell(0, 15, 'Doanh nghiệp', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->Ln(6);
	$pdf->SetX(30);
	$pdf->Cell(0, 15, 'Ký tên', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->SetX(155);
	$pdf->Cell(0, 15, 'Ký tên', 0, false, 'L', 0, '', 0, false, 'M', 'M');
	$pdf->Ln(25);
	$pdf->SetFont('freeserif', 'bu', 12);
	$pdf->Write(0, 'Chú ý:', '', 0, 'L', true, 0, false, false, 0);
	$pdf->SetFont('freeserif', 'i', 10);	
	$pdf->Write(0, ' - Anh/chị vui lòng đọc kĩ trước khi kí xác nhận', '', 0, 'L', true, 0, false, false, 0);	
	$pdf->Write(0, ' - Nếu số lượng sản phẩm hoặc giá gia công không đúng với thực tế', '', 0, 'L', true, 0, false, false, 0);
	$pdf->Write(0, ' anh/chị ghi chú trực tiếp vào biên bản này và gửi lại cho A.Hoàng', '', 0, 'L', true, 0, false, false, 0);
	$pdf->lastPage();
	$pdf->Output('PrintEmployeeTracking.pdf', 'I');
?>