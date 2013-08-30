<?php
	require_once("mvc/base/ViewHelper.php");	
	class MYPDF extends TCPDF {
		//Page header
		public function Header() {
			//Logo		        
			//setfont
			$this->SetFont('freeserif', '',10);
			//title		
		}
		// Page footer
		public function Footer() {
			//$this->SetY(-5);
			//$this->SetFont('freeserif', '', 8);		
		}
				
	}
	
	$request = VH::getRequest();
	$Resource = $request->getObject('Resource');
	
	$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);	
	$pdf->setHeaderFont(Array('freeserif', '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array('freeserif', '', PDF_FONT_SIZE_DATA));
	
	$pdf->SetMargins(3, 3, 3);
	$pdf->SetAutoPageBreak(TRUE, 0);	
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
	
	$pdf->AddPage();
	$pdf->Ln(1);
	$pdf->SetFont('freeserif', 'N', 12);
	$style = array(
		'position' => '',
		'align' => 'C',
		'stretch' => false,
		'fitwidth' => true,
		'cellfitalign' => '',
		'border' => false,
		'hpadding' => 'auto',
		'vpadding' => 'auto',
		'fgcolor' => array(0,0,0),
		'bgcolor' => false, //array(255,255,255),
		'text' => true,
		'font' => 'helvetica',
		'fontsize' => 8,
		'stretchtext' => 4
	);
	$width 	= 40;
	$height = 16;
	$ratio 	= 0.4;
	
	$posX = 1;
	$posY = 1;
	
	$i = 0;
	while ($i <= 9){
				
		//Mã vạch
		$pdf->write1DBarcode($Resource->getBarcode(), 'EAN13', 	$posX + $width*0, 	$posY+$height*$i+$i*12, $width, $height, $ratio, $style, 'N');
		$pdf->write1DBarcode($Resource->getBarcode(), 'EAN13', 	$posX + $width*1, 	$posY+$height*$i+$i*12, $width, $height, $ratio, $style, 'N');
		$pdf->write1DBarcode($Resource->getBarcode(), 'EAN13', 	$posX + $width*2, 	$posY+$height*$i+$i*12, $width, $height, $ratio, $style, 'N');
		$pdf->write1DBarcode($Resource->getBarcode(), 'EAN13', 	$posX + $width*3, 	$posY+$height*$i+$i*12, $width, $height, $ratio, $style, 'N');	
		$pdf->write1DBarcode($Resource->getBarcode(), 'EAN13', 	$posX + $width*4, 	$posY+$height*$i+$i*12, $width, $height, $ratio, $style, 'N');
		
		//Giá
		$pdf->MultiCell($width, 4, $Resource->getNameShort()." ".$Resource->getPriceExportPrint(), 0, 'C', 0, 0);
		$pdf->MultiCell($width, 4, $Resource->getNameShort()." ".$Resource->getPriceExportPrint(), 0, 'C', 0, 0);
		$pdf->MultiCell($width, 4, $Resource->getNameShort()." ".$Resource->getPriceExportPrint(), 0, 'C', 0, 0);
		$pdf->MultiCell($width, 4, $Resource->getNameShort()." ".$Resource->getPriceExportPrint(), 0, 'C', 0, 0);
		$pdf->MultiCell($width, 4, $Resource->getNameShort()." ".$Resource->getPriceExportPrint(), 0, 'C', 0, 1);
		
		$i++;
	}
	
	//$pdf->write1DBarcode($Resource->getBarcode(), 'EAN13', 	$posX + $width*0, 	$posY+$height*1+1*8, $width, $height, $ratio, $style, 'N');
	//$pdf->MultiCell($width, 4, $Resource->getPriceExportPrint(), 0, 'C', 0, 1);

	$pdf->Output('Barcode.pdf', 'I');
	
?>
