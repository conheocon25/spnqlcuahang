<?php	
	require_once("mvc/base/ViewHelper.php");
	//require_once("mvc/library/PHPTAL/PHPTAL.php");	
	$req = VH::getRequest();		
	$Title = $req->getProperty('Title');	
	$PITs = $req->getObject('PITs');
	$SPIT = $req->getObject('SPIT');
	$DateStart = $req->getProperty('DateStart');
	$DateEnd = $req->getProperty('DateEnd');
	$D1 = new DateTime($DateStart);
	$D2 = new DateTime($DateEnd);
	$diff = $D2->diff($D1);
	$nDays = ($diff->y * 365.25 + $diff->m * 30 + $diff->d + $diff->h/24 + $diff->i / 60) + 1;
	
	$Count = $PITs->count();
	//print_r($SPIT);
	$SP16 = $SPIT[0][15];
	$SP17 = $SPIT[0][16];
	$SP02 = $SPIT[0][1];
	$SP04 = $SPIT[0][3];
	$SP06 = $SPIT[0][5];
	$SP10 = $SPIT[0][9];
	$SP18 = $SPIT[0][17];
	$SP08 = $SPIT[0][7];
	$SP11 = $SPIT[0][10];
	$SP13 = $SPIT[0][12];
	$SP15 = $SPIT[0][14];
	$SP19 = $SPIT[0][18];
	$SP20 = $SPIT[0][19];
	$SP21 = $SPIT[0][20];
	$SP21 = $SPIT[0][21];
	
	$SUM = $SP16 + $SP17 + $SP02 + $SP04 + $SP06 + $SP10 + $SP18 + $SP08 + $SP11 + $SP13 + $SP15 + $SP19 + $SP20 + $SP21+ $SP22;
	
	$PSP16 = \PF::formatCurrency(($SP16/$SUM)*100)."%";
	$PSP17 = \PF::formatCurrency(($SP17/$SUM)*100)."%";
	$PSP02 = \PF::formatCurrency(($SP02/$SUM)*100)."%";
	$PSP04 = \PF::formatCurrency(($SP04/$SUM)*100)."%";
	$PSP06 = \PF::formatCurrency(($SP06/$SUM)*100)."%";
	$PSP10 = \PF::formatCurrency(($SP10/$SUM)*100)."%";
	$PSP18 = \PF::formatCurrency(($SP18/$SUM)*100)."%";
	$PSP08 = \PF::formatCurrency(($SP08/$SUM)*100)."%";
	$PSP11 = \PF::formatCurrency(($SP11/$SUM)*100)."%";
	$PSP13 = \PF::formatCurrency(($SP13/$SUM)*100)."%";
	$PSP15 = \PF::formatCurrency(($SP15/$SUM)*100)."%";
	$PSP19 = \PF::formatCurrency(($SP19/$SUM)*100)."%";
	$PSP20 = \PF::formatCurrency(($SP20/$SUM)*100)."%";
	$PSP21 = \PF::formatCurrency(($SP21/$SUM)*100)."%";
		
	$Rate1 = $SUM/$Count;
	$Rate2 = $SUM/$nDays;
	$Rate3 = $SUM/$nDays/$Count;
	
	$SP16 = \PF::formatCurrency($SP16);
	$SP17 = \PF::formatCurrency($SP17);
	$SP02 = \PF::formatCurrency($SP02);
	$SP04 = \PF::formatCurrency($SP04);
	$SP06 = \PF::formatCurrency($SP06);
	$SP10 = \PF::formatCurrency($SP10);
	$SP18 = \PF::formatCurrency($SP18);
	$SP08 = \PF::formatCurrency($SP08);
	$SP11 = \PF::formatCurrency($SP11);
	$SP13 = \PF::formatCurrency($SP13);
	$SP15 = \PF::formatCurrency($SP15);
	$SP19 = \PF::formatCurrency($SP19);
	$SP20 = \PF::formatCurrency($SP20);
	$SP21 = \PF::formatCurrency($SP21);
	$SP22 = \PF::formatCurrency($SP22);
	$SUM = \PF::formatCurrency($SUM);
	$Rate1 = \PF::formatCurrency($Rate1);
	$Rate2 = \PF::formatCurrency($Rate2);
	$Rate3 = \PF::formatCurrency($Rate3);
		
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
		$this->SetY(-15);
		$this->SetFont('freeserif', '', 8);
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
	$pdf->SetFont('freeserif', 'N', 10);
	$tpl = new PHPTAL( "mvc/templates/PrintProductImportTrackings.html" );
		
	$tpl->PITs = $PITs;
	$tpl->SP16 = $SP16;
	$tpl->SP17 = $SP17;
	$tpl->SP02 = $SP02;
	$tpl->SP04 = $SP04;
	$tpl->SP06 = $SP06;
	$tpl->SP10 = $SP10;
	$tpl->SP18 = $SP18;
	$tpl->SP08 = $SP08;
	$tpl->SP11 = $SP11;
	$tpl->SP13 = $SP13;
	$tpl->SP15 = $SP15;
	$tpl->SP19 = $SP19;
	$tpl->SP20 = $SP20;
	$tpl->SP21 = $SP21;
	$tpl->SP22 = $SP22;
	
	$tpl->PSP16 = $PSP16;
	$tpl->PSP17 = $PSP17;
	$tpl->PSP02 = $PSP02;
	$tpl->PSP04 = $PSP04;
	$tpl->PSP06 = $PSP06;
	$tpl->PSP10 = $PSP10;
	$tpl->PSP18 = $PSP18;
	$tpl->PSP08 = $PSP08;
	$tpl->PSP11 = $PSP11;
	$tpl->PSP13 = $PSP13;
	$tpl->PSP15 = $PSP15;
	$tpl->PSP19 = $PSP19;
	$tpl->PSP20 = $PSP20;
	$tpl->PSP21 = $PSP21;
	$tpl->PSP22 = $PSP22;
	
	$tpl->SUM = $SUM;
	
	$html = $tpl->execute();			
	$pdf->writeHTML($html, true, false, true, false, '');
	$pdf->SetFont('freeserif', 'B', 14);
	$pdf->Write(0, 'TỔNG '.$SUM.' GÓI', '', 0, 'R', true, 0, false, false, 0);
	$pdf->Write(0, 'VỚI '.$Count.' LÒ ', '', 0, 'R', true, 0, false, false, 0);
	$pdf->Write(0, 'LÀM TRONG '.$nDays.' NGÀY', '', 0, 'R', true, 0, false, false, 0);
	$pdf->Write(0, 'VỚI 11 LOẠI', '', 0, 'R', true, 0, false, false, 0);
	$pdf->Write(0, $Rate2.' GÓI/NGÀY', '', 0, 'R', true, 0, false, false, 0);
	$pdf->Write(0, $Rate1.' GÓI/LÒ', '', 0, 'R', true, 0, false, false, 0);	
	$pdf->Write(0, $Rate3.' GÓI/LÒ/NGÀY', '', 0, 'R', true, 0, false, false, 0);
		
	$pdf->lastPage();
	$pdf->Output('PrintProductImportTrackings.pdf', 'I');
?>