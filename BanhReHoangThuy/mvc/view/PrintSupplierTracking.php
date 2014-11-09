<?php	
require_once("mvc/base/ViewHelper.php");
require_once("mvc/PublicFunction.php");

$req = VH::getRequest();

$Supplier = $req->getObject('Supplier');
$DateStart = date("d/m/Y", strtotime($req->getProperty('DateStart')));
$DateEnd = date("d/m/Y", strtotime($req->getProperty('DateEnd')));

$RIs = $req->getObject('RIs');
//echo $RIs->count();
$RIValue = @\PF::formatCurrency($req->getProperty('RIValue'));
	
$SDs = $req->getObject('SDs');
$SDValue = @\PF::formatCurrency($req->getProperty('SDValue'));

$DebtOld = $req->getProperty('DebtOld');
$DebtOld = @\PF::formatCurrency($DebtOld);

$DebtNew = $req->getProperty('DebtNew');
$DebtNewStr = @\PF::readDigit($DebtNew);
$DebtNew = @\PF::formatCurrency($DebtNew);

	
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
		$this->SetY(-15);
		$this->SetFont('freeserif', '', 8);
		$this->Cell(0, 10, 'Trang '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');	
	}
}
	
	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);	
	$pdf->setHeaderFont(Array('freeserif', '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array('freeserif', '', PDF_FONT_SIZE_DATA));
	
	$pdf->SetMargins(5, 15, 5);	
	$pdf->SetHeaderMargin(1);
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	//$pdf->setLanguageArray($l);

	$pdf->AddPage();	
	$pdf->Ln(2);	
	$pdf->SetFont('freeserif', 'B', 14);
	$pdf->Write(0, "TỔNG KẾT NHẬP NGUYÊN LIỆU TỪ ".$Supplier->getName(), '', 0, 'C', true, 0, false, false, 0);
	$pdf->SetFont('freeserif', '', 12);
	$pdf->Write(0, $Supplier->getPhone(). " ".$Supplier->getAddress(), '', 0, 'C', true, 0, false, false, 0);	
	$pdf->SetFont('freeserif', 'B', 12);
	$pdf->Write(0, 'từ '.$DateStart." đến ".$DateEnd, '', 0, 'C', true, 0, false, false, 0);
			
	$pdf->SetFont('freeserif', 'BU', 13);
	$pdf->Write(0, '1.DƯ NỢ CŨ', '', 0, 'L', true, 0, false, false, 0);
	$pdf->Ln(1);
	$pdf->SetFont('freeserif', '', 12);
	$pdf->Write(0, $DebtOld." VNĐ", '', 0, 'R', true, 0, false, false, 0);
	$pdf->Ln(5);
	
	$pdf->SetFont('freeserif', 'BU', 13);
	$pdf->Write(0, '2.NHẬP NGUYÊN LIỆU', '', 0, 'L', true, 0, false, false, 0);
	$pdf->Ln(1);
	if ($RIValue>0){
		//echo "co";
		$pdf->SetFont('freeserif', 'N', 11);
		$tpl = new PHPTAL( "mvc/templates/PrintSupplierRITracking.html" );
		$tpl->RIs  = $RIs;
		$html = $tpl->execute();
		$pdf->writeHTML($html, true, false, true, false, '');
	}
	$pdf->SetFont('freeserif', '', 12);
	$pdf->Write(0, $RIValue." VNĐ", '', 0, 'R', true, 0, false, false, 0);
	$pdf->Ln(5);
		
	$pdf->SetFont('freeserif', 'BU', 13);
	$pdf->Write(0, '3. ĐÃ TRẢ', '', 0, 'L', true, 0, false, false, 0);
	$pdf->Ln(1);
	
	if ($SDValue>0){
		$pdf->SetFont('freeserif', 'N', 11);
		$tpl = new PHPTAL( "mvc/templates/PrintSupplierSDTracking.html" );
		$tpl->SDs  = $SDs;
		$html = $tpl->execute();
		$pdf->writeHTML($html, true, false, true, false, '');
	}
	
	$pdf->SetFont('freeserif', '', 12);
	$pdf->Write(0, $SDValue." VNĐ", '', 0, 'R', true, 0, false, false, 0);
	$pdf->Ln(5);
	
	$pdf->SetFont('freeserif', 'BU', 13);
	$pdf->Write(0, '4. TỔNG KẾT', '', 0, 'L', true, 0, false, false, 0);
	$pdf->SetFont('freeserif', '', 12);
	$pdf->Write(0, 'DƯ NỢ MỚI = (1) + (2) - (3) = '.$DebtOld.' + '.$RIValue.' - '.$SDValue.' = '.
			$DebtNew.' VNĐ', '', 0, 'R', true, 0, false, false, 0);
	$pdf->SetFont('freeserif', 'I', 12);
	$pdf->Write(0, '('.$DebtNewStr.'đồng chẳn)', '', 0, 'R', true, 0, false, false, 0);
	$pdf->Ln(5);
	
	$pdf->SetFont('freeserif', 'N', 14);
	$pdf->Cell(0, 15, 'Tiền Giang, ngày ....... tháng ....... năm ........', 0, false, 'R', 0, '', 0, false, 'M', 'M');	
	$pdf->Ln(6);	
	$pdf->SetX(30);
	$pdf->Cell(0, 15, 'Khách hàng', 0, false, 'L', 0, '', 0, false, 'M', 'M');
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
	$pdf->Write(0, ' - khách hàng vui lòng đọc kĩ trước khi kí xác nhận', '', 0, 'L', true, 0, false, false, 0);
	$pdf->Write(0, ' - bản xác nhận sao thành 2 bản và có giá trị như nhau', '', 0, 'L', true, 0, false, false, 0);
	$pdf->Write(0, ' - khách hàng có thắc mắc về số liệu vui lòng liên hệ với A.Hoàng để biết thêm chi tiết', '', 0, 'L', true, 0, false, false, 0);
	
	$pdf->lastPage();
	$pdf->Output('PrintSupplierTracking.pdf', 'I');
?>