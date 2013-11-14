<?php
require_once("mvc/base/Library.php");
class Viewer {
	function __construct($Path=null){$this->Path = $Path;}
	
	//-------------------------------------------------
	//Hỗ trợ template xuất ra dưới dạng HTML    
	//-------------------------------------------------
	function html(){
		//Lấy các tham số toàn cục
		$Session = \MVC\Base\SessionRegistry::instance();		
						
		//Lấy các tham số đã được xử lí
		$request = \MVC\Base\RequestRegistry::getRequest();
		$objects = $request->getObjects();
		$properties = $request->getProperties();
		
		//Khởi tạo template và chuyển các thuộc tính và đối tượng sang
		$tpl = new PHPTAL($this->Path);				
		while (list($key, $val) = each($objects)){$tpl->$key = $val;}
		while (list($key, $val) = each($properties)){$tpl->$key = $val;}		
				
		//Kết xuất dữ liệu ra HTML
		$Html = $tpl->execute();
		
		//Giải phóng bộ nhớ
		unset($tpl);
		
		return $Html;
	}
	
	//-------------------------------------------------
	//Hỗ trợ template xuất ra dưới dạng HTML    
	//-------------------------------------------------
	function pdf(){		
		$html = $this->html();		
		$pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		$pdf->SetMargins(1, 2, 1);
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);		
		$pdf->AddPage();
		$pdf->SetFont('arial', 'N', 10);					
		$pdf->writeHTML($html, true, false, true, false, '');
		$Out = $pdf->Output("print_ba_duc.pdf", 'I');
		unset($pdf);
		return $Out;
	}
	
	function custompdf(){		
		$html = $this->html();
		$width = 73; 
		$height = 297;
		$pageLayout = array($width, $height); //  or array($height, $width) 
		$pdf = new \TCPDF('p', 'mm', $pageLayout, true, 'UTF-8', false);
						
		$pdf->setHeaderFont(Array('arial', '', '10'));
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
		$pdf->SetMargins(1, 2, 1);
		$pdf->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM);
				
		$pdf->AddPage();
		$pdf->SetFont('arial', 'N', 8);
		$pdf->writeHTML($html, true, false, true, false, '');
		$Out = $pdf->Output('a4_ba_duc.pdf', 'I');
		unset($pdf);
		
		return $Out;
	}
	
	function pdfA5() {
		
		$html = $this->html();		
		$pdf = new \CUSTOMPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		
		$pdf->reFormat("A5", "P");

		$pdf->setHeaderFont(Array('arial', '', '10'));
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
		$pdf->SetMargins(1, 2, 1);		
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);		
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		
		$pdf->AddPage();
		$pdf->SetFont('arial', 'N', 8);					
		$pdf->writeHTML($html, true, false, true, false, '');
		$Out = $pdf->Output("a5_ba_duc.pdf", 'I');
		unset($pdf);
		
		return $Out;
	}		
}
?>