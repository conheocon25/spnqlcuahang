<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class PondSession extends Object{

    private $Id;
	private $IdPond;
	private $Type;
	private $DateStart;
	private $DateEnd;
	private $CountStart;
	private $ValueStart;
	private $SampleStart;
	private $ShipStart;
	private $CountExport;
	private $PriceExport;
	private $BankRate;
	private $CountWaste;
	private $PriceWaste;
	private $Name;
	private $EmployeeName;
	private $EmployeePhone;
	private $CountRemain;
	private $PriceRemain;
	private $Net;
	private $Tip;
	
	private $Orders;
	private $Paids;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id=null,
		$IdPond=null,
		$Type=Null,
		$DateStart=Null,
		$DateEnd=Null,
		$CountStart=Null,
		$ValueStart=Null,
		$SampleStart=Null,
		$ShipStart=Null,
		$CountExport=Null,
		$PriceExport=Null,
		$BankRate=Null,
		$CountWaste=Null,
		$PriceWaste=Null,
		$Name=Null,
		$EmployeeName=Null,
		$EmployeePhone=Null,
		$CountRemain=Null,
		$PriceRemain=Null,
		$Net=Null,
		$Tip=Null
	) 
	{
        $this->Id = $Id;
		$this->IdPond = $IdPond;
		$this->Type = $Type;
		$this->DateStart = $DateStart;
		$this->DateEnd = $DateEnd;
		$this->CountStart = $CountStart;
		$this->ValueStart = $ValueStart;
		$this->SampleStart = $SampleStart;
		$this->ShipStart = $ShipStart;
		$this->CountExport = $CountExport;
		$this->PriceExport = $PriceExport;
		$this->BankRate = $BankRate;
		$this->CountWaste = $CountWaste;
		$this->PriceWaste = $PriceWaste;
		$this->Name = $Name;
		$this->EmployeeName = $EmployeeName;
		$this->EmployeePhone = $EmployeePhone;
		$this->CountRemain = $CountRemain;
		$this->PriceRemain = $PriceRemain;
		$this->Net = $Net;
		$this->Tip = $Tip;
		
        parent::__construct( $Id );
    }
    function getId() {
        return $this->Id;
    }	
	function getIdPrint(){
        return "ps" . $this->getId();
    }	
	
    function setIdPond( $IdPond ) {
        $this->IdPond = $IdPond;
        $this->markDirty();
    }   
	function getIdPond( ) {
        return $this->IdPond;
    }
	function getPond( ) {
		if (!isset($this->Pond)){
			$mPond = new \MVC\Mapper\Pond();
			$this->Pond = $mPond->find($this->getIdPond());
		}
        return $this->Pond;
    }
	
	function setType( $Type ) {
        $this->Type= $Type;
        $this->markDirty();
    }   
	function getType( ) {
        return $this->Type;
    }	
	function getTypePrint( ) {
		if ($this->Type==1)
			return "THƯƠNG MẠI";
		else if ($this->Type==2)
			return "GIA CÔNG";
			
        return "CHƯA XÁC ĐỊNH";
    }
	
	function setDateStart( $DateStart ) {
        $this->DateStart = $DateStart;
        $this->markDirty();
    }   
	function getDateStart( ) {
        return $this->DateStart;
    }
	function getDateStartPrint( ) {
		$date = new \DateTime($this->DateStart);
		return $date->format('d/m/Y');
    }
	
	function setDateEnd( $DateEnd ) {
        $this->DateEnd = $DateEnd;
        $this->markDirty();
    }   
	function getDateEnd( ) {
        return $this->DateEnd;
    }
	function getDateEndPrint( ) {
		if (!isset($this->DateEnd))
			return "chưa kết thúc";
		$date = new \DateTime($this->DateEnd);
		return $date->format('d/m/Y');
    }
	
	function getTimes(){
		$D1 = @\MVC\Library\Date::getMonthsFromDate($this->getDateStart());
		$D2 = @\MVC\Library\Date::getMonthsFromDate($this->getDateEnd());
		return $D2-$D1;
	}
	function getTimesPrint(){
		$N = $this->getTimes();
		return $N." tháng";
	}
	
	function setCountStart( $CountStart ) {
        $this->CountStart = $CountStart;
        $this->markDirty();
    }   
	function getCountStart( ) {
        return $this->CountStart;
    }
	function getCountStartPrint( ) {
		$N = new \MVC\Library\Number($this->CountStart);
        return $N->formatCurrency()." con";
    }
	
	function setValueStart( $ValueStart ) {
        $this->ValueStart = $ValueStart;
        $this->markDirty();
    }   
	function getValueStart( ) {
        return $this->ValueStart;
    }
	function getValueStartPrint( ) {
		$N = new \MVC\Library\Number($this->ValueStart);
        return $N->formatCurrency()." đ";
    }
	
	//Tên 
	function setName( $Name ){
		$this->Name = $Name;
        $this->markDirty();
	}
	function getName(){
		return $this->Name;
	}
	
	function setEmployeeName( $EmployeeName ){
		$this->EmployeeName = $EmployeeName;
        $this->markDirty();
	}
	function getEmployeeName(){
		return $this->EmployeeName;
	}
	
	function setEmployeePhone( $EmployeePhone ){
		$this->EmployeePhone = $EmployeePhone;
        $this->markDirty();
	}
	function getEmployeePhone(){
		return $this->EmployeePhone;
	}
	
	//Sản lượng xuất ao	
	function setCountExport( $CountExport ) {
        $this->CountExport = $CountExport;
        $this->markDirty();
    }   
	function getCountExport( ) {
        return $this->CountExport;
    }
	function getCountExportPrint( ) {
		$N = new \MVC\Library\Number($this->CountExport);
        return $N->formatCurrency()." kg";
    }
	
	//Giá xuất định mức xuất	
	function setPriceExport( $PriceExport ) {
        $this->PriceExport = $PriceExport;
        $this->markDirty();
    }   
	function getPriceExport( ) {
        return $this->PriceExport;
    }
	function getPriceExportPrint( ) {
		$N = new \MVC\Library\Number($this->PriceExport);
        return $N->formatCurrency()." đ/kg";
    }
	
	//Tính tổng thu
	function getValueImport( ) {
        return $this->PriceExport*$this->CountExport;
    }
	function getValueImportPrint( ) {
		$N = new \MVC\Library\Number($this->getValueImport());
        return $N->formatCurrency()." đ";
    }
	
	
	//Tiền giống
	function getValueStart1( ) {
        return $this->ValueStart + $this->ShipStart;
    }
	function getValueStart1Print( ) {
		$N = new \MVC\Library\Number($this->getValueStart1( ));
        return $N->formatCurrency()." đ";
    }
	
	function getValueStart1Rate( ) {
        $D1 = new \DateTime( $this->DateStart );
		$D2 = new \DateTime( $this->DateEnd );
		$interval = $D1->diff($D2);
		$days = $interval->format('%a');
		$months = \round($days/30, 1);

		$Value = $this->getValueStart1()*(\pow( 1 + (double)$this->BankRate/100.0, $months) - 1.0);
		return $Value;
    }
	function getValueStart1RatePrint( ) {
		$N = new \MVC\Library\Number($this->getValueStart1Rate( ));
        return $N->formatCurrency()." đ";
    }
	
	function getValueStart2( ) {
        return $this->getValueStart1Rate() + $this->getValueStart1();
    }
	function getValueStart2Print( ) {
		$N = new \MVC\Library\Number($this->getValueStart2());
        return $N->formatCurrency()." đ";
    }
		
	function setSampleStart( $SampleStart ) {
        $this->SampleStart = $SampleStart;
        $this->markDirty();
    }   
	function getSampleStart( ) {
        return $this->SampleStart;
    }
	function getSampleStartPrint( ) {
		$N = new \MVC\Library\Number($this->SampleStart);
        return $N->formatCurrency();
    }
	
	//---------------------------------------------------------------------
	//Tiền vận chuyển
	function setShipStart( $ShipStart ){
        $this->ShipStart = $ShipStart;
        $this->markDirty();
    }  
	function getShipStart( ){
        return $this->ShipStart;
    }
	function getShipStartPrint( ){
		$N = new \MVC\Library\Number($this->ShipStart);
        return $N->formatCurrency()." đ";
    }
	
	//---------------------------------------------------------------------
	//Thiết lập lãi suất ngân hàng
	function setBankRate( $BankRate ){
        $this->BankRate = $BankRate;
        $this->markDirty();
    }  
	function getBankRate( ){
        return $this->BankRate;
    }
	function getBankRatePrint( ){
		return $this->BankRate."%";
    }
	
	//---------------------------------------------------------------------
	//Số lượng cá ngộp
	function setCountWaste( $CountWaste ){
        $this->CountWaste = $CountWaste;
        $this->markDirty();
    }  
	function getCountWaste( ){
        return $this->CountWaste;
    }
	function getCountWastePrint( ){
		$N = new \MVC\Library\Number($this->CountWaste);
        return $N->formatCurrency()." kg";
    }
	
	//Giá cá ngộp
	function setPriceWaste( $PriceWaste ){
        $this->PriceWaste = $PriceWaste;
        $this->markDirty();
    }  
	function getPriceWaste( ){
        return $this->PriceWaste;
    }
	function getPriceWastePrint( ){
		$N = new \MVC\Library\Number($this->PriceWaste);
        return $N->formatCurrency()." đ";
    }
	
	//Tiền cá ngộp
	function getValueWaste( ){
        return $this->PriceWaste*$this->CountWaste;
    }
	function getValueWastePrint( ){
		$N = new \MVC\Library\Number($this->getValueWaste());
        return $N->formatCurrency()." đ";
    }
	
	//---------------------------------------------------------------------
	//Số lượng cá vét
	function setCountRemain( $CountRemain ){
        $this->CountRemain = $CountRemain;
        $this->markDirty();
    }  
	function getCountRemain( ){
        return $this->CountRemain;
    }
	function getCountRemainPrint( ){
		$N = new \MVC\Library\Number($this->CountRemain);
        return $N->formatCurrency()." kg";
    }
	
	//Giá cá vét
	function setPriceRemain( $PriceRemain ){
        $this->PriceRemain = $PriceRemain;
        $this->markDirty();
    }  
	function getPriceRemain( ){
        return $this->PriceRemain;
    }
	function getPriceRemainPrint( ){
		$N = new \MVC\Library\Number($this->PriceRemain);
        return $N->formatCurrency()." đ";
    }
	
	//Tiền cá vét
	function getValueRemain( ){
        return $this->PriceRemain*$this->CountRemain;
    }
	function getValueRemainPrint( ){
		$N = new \MVC\Library\Number($this->getValueRemain());
        return $N->formatCurrency()." đ";
    }
	//---------------------------------------------------------------------
	//Công đoàn + Lưới
	function setNet( $Net ){
        $this->Net = $Net;
        $this->markDirty();
    }  
	function getNet( ){
        return $this->Net;
    }
	function getNetPrint( ){
		$N = new \MVC\Library\Number($this->Net);
        return $N->formatCurrency()." đ";
    }
	
	//---------------------------------------------------------------------
	//Tiền thưởng
	function setTip( $Tip ){
        $this->Tip = $Tip;
        $this->markDirty();
    }  
	function getTip( ){
        return $this->Tip;
    }
	function getTipPrint( ){
		$N = new \MVC\Library\Number($this->Tip);
        return $N->formatCurrency()." đ";
    }
	
	//---------------------------------------------------------------------
	//Tính tổng chi
	function getValueExportBase(){
		$Value = $this->getValueStart1() + $this->getOrdersValue2Base() + $this->getPaidsValue1();
		if ($this->getType()==1)
			$Value += $this->getOrdersValue1Base();
		return $Value;	
	}
	function getValueExportBasePrint( ){
		$N = new \MVC\Library\Number($this->getValueExportBase());
        return $N->formatCurrency()." đ";
    }
	
	function getValueExport(){
		$Value = $this->getValueStart2() + $this->getOrdersValue2() + $this->getPaidsValue() + $this->getTip() + $this->getNet();
		if ($this->getType()==1)
			$Value += $this->getOrdersValue1();
		
		return $Value;	
	}
	function getValueExportPrint( ){
		$N = new \MVC\Library\Number($this->getValueExport());
        return $N->formatCurrency()." đ";
    }
	
	//Tính lãi suất tiền đầu tư	
	function getValueExportBaseRate(){
		$Value = $this->getOrdersValue2Rate() + $this->getPaidsRateValue() + $this->getValueStart1Rate();
		if ($this->getType()==1)
			$Value += $this->getOrdersValue1Rate();
		return $Value;
	}
	function getValueExportBaseRatePrint( ){
		$N = new \MVC\Library\Number($this->getValueExportBaseRate());
        return $N->formatCurrency()." đ";
    }
		
	function getValue1(){
		return $this->getValueImport() + $this->getValueWaste() + $this->getValueRemain();
	}
	function getValue1Print(){
		$N = new \MVC\Library\Number($this->getValue1());
        return $N->formatCurrency()." đ";
	}
	
	//Tính lãi
	function getValue(){
		return $this->getValueImport() + $this->getValueWaste() + $this->getValueRemain() - $this->getValueExport();
	}
	function getValuePrint(){
		$N = new \MVC\Library\Number($this->getValue());
        return $N->formatCurrency()." đ";
	}
	function getValueStrPrint(){
		$N = new \MVC\Library\Number($this->getValue());
        return $N->readDigit()." đồng";
	}
					
	//-------------------------------------------------------------------------------
	//ĐƠN THUỐC
	//-------------------------------------------------------------------------------
	function getOrderTrackings(){
		$Start = @\MVC\Library\Date::getMonthsFromDate($this->getDateStart());
		$End = @\MVC\Library\Date::getMonthsFromDate($this->getDateEnd());
		//$OrderTrackings1[] = array();
		//echo $Start."---";
		//echo $End;
		for ($i = $Start; $i <= $End; $i++){
			$Arr = @\MVC\Library\Date::getDateFromMonths($i);
			$OrderTrackings1[] = new \MVC\Domain\OrderImportTracking(
				null,
				$this->getIdPond(),
				$Arr[0],
				$Arr[1],
				$this->getDateEnd(),
				$this->getBankRate()
			);
		}
		return $OrderTrackings1;
	}
	
	function getOrdersValue2(){
		$OTs = $this->getOrderTrackings();
		$Sum = 0;
		foreach ( $OTs as &$OT ){
			$Sum += $OT->getOrdersValue2();
		}
		return $Sum;
	}
	         
	function getOrdersValue2Print(){
		$N = new \MVC\Library\Number( $this->getOrdersValue2() );
		return $N->formatCurrency()." đ";
	}
	
	function getOrdersValue2Rate(){
		$OTs = $this->getOrderTrackings();
		$Sum = 0;
		foreach ( $OTs as &$OT ){
			$Sum += $OT->getOrdersValue2Rate();
		}
		return $Sum;
	}
	function getOrdersValue2RatePrint(){
		$N = new \MVC\Library\Number( $this->getOrdersValue2Rate() );
		return $N->formatCurrency()." đ";
	}
	
	function getOrdersValue2Base(){
		$OTs = $this->getOrderTrackings();
		$Sum = 0;
		foreach ( $OTs as &$OT ){
			$Sum += $OT->getOrdersValue2Base();
		}
		return $Sum;
	}
	function getOrdersValue2BasePrint(){
		$N = new \MVC\Library\Number( $this->getOrdersValue2Base() );
		return $N->formatCurrency()." đ";
	}
	
	//-------------------------------------------------------------------------------
	//THỨC ĂN
	//-------------------------------------------------------------------------------
	//AO THƯƠNG MẠI
	function getOrdersValue1(){
		$OTs = $this->getOrderTrackings();
		$Sum = 0;
		foreach ( $OTs as &$OT ){
			$Sum += $OT->getOrdersValue1();
		}
		return $Sum;
	}
	         
	function getOrdersValue1Print(){
		$N = new \MVC\Library\Number( $this->getOrdersValue1() );
		return $N->formatCurrency()." đ";
	}
	
	function getOrdersValue1Rate(){
		$OTs = $this->getOrderTrackings();
		$Sum = 0;
		foreach ( $OTs as &$OT ){
			$Sum += $OT->getOrdersValue1Rate();
		}
		return $Sum;
	}
	function getOrdersValue1RatePrint(){
		$N = new \MVC\Library\Number( $this->getOrdersValue1Rate() );
		return $N->formatCurrency()." đ";
	}
	
	function getOrdersValue1Base(){
		$OTs = $this->getOrderTrackings();
		$Sum = 0;
		foreach ( $OTs as &$OT ){
			$Sum += $OT->getOrdersValue1Base();
		}
		return $Sum;
	}
	function getOrdersValue1BasePrint(){
		$N = new \MVC\Library\Number( $this->getOrdersValue1Base() );
		return $N->formatCurrency()." đ";
	}
	
	//AO GIA CÔNG
	function getOrderTrackingsCount1(){
		$Start = @\MVC\Library\Date::getMonthsFromDate($this->getDateStart());
		$End = @\MVC\Library\Date::getMonthsFromDate($this->getDateEnd());
		$Sum = 0;		
		for ($i = $Start; $i <= $End; $i++) {
			$Arr = @\MVC\Library\Date::getDateFromMonths($i);
			$OT = new \MVC\Domain\OrderImportTracking(null, $this->getIdPond(), $Arr[0], $Arr[1]);
			$Sum += $OT->getOrdersCount1();
		}
		return $Sum;
	}
	
	function getOrderTrackingsCount1Print(){
		$N = new \MVC\Library\Number( $this->getOrderTrackingsCount1() );
		return $N->formatCurrency()." kg";
	}
		
	//----------------------------------------------------------------------------------
	//CHI PHÍ
	//----------------------------------------------------------------------------------
	function getPaidsValue(){
		$PTs = $this->getPaidTrackings();				
		$Sum = 0;
		foreach ( $PTs as &$PT ){
			$Sum += $PT->getValue();
		}
		return $Sum;
	}	
	function getPaidsValuePrint(){
		$N = new \MVC\Library\Number( $this->getPaidsValue() );
		return $N->formatCurrency()." đ";
	}
	
	function getPaidsRateValue(){
		$PTs = $this->getPaidTrackings();
		$Sum = 0;
		foreach ( $PTs as &$PT ){
			$Sum += $PT->getPaidsValueRate();
		}
		return $Sum;
	}
	function getPaidsRateValuePrint(){
		$N = new \MVC\Library\Number( $this->getPaidsRateValue() );
		return $N->formatCurrency()." đ";
	}
	
	function getPaidsValue1(){
		$PTs = $this->getPaidTrackings();
		$Sum = 0;
		foreach ( $PTs as &$PT ){
			$Sum += $PT->getPaidsValue();
		}
		return $Sum;
	}
	function getPaidsValue1Print(){
		$N = new \MVC\Library\Number( $this->getPaidsValue1() );
		return $N->formatCurrency()." đ";
	}
	
	function getPaidTrackings(){		
		$Start = @\MVC\Library\Date::getMonthsFromDate($this->getDateStart());
		$End = @\MVC\Library\Date::getMonthsFromDate($this->getDateEnd());
				
		for ($i = $Start; $i <= $End; $i++) {
			$Arr = @\MVC\Library\Date::getDateFromMonths($i);
			$PaidTrackings[] = new \MVC\Domain\PaidPondTracking(
				null,
				$this->getIdPond(),
				$Arr[0],
				$Arr[1],
				$this->getDateEnd(),
				$this->getBankRate()
			);			
		}
		return $PaidTrackings;
	}
	
	//----------------------------------------------------------------------------------
	//SO SÁNH TỈ LỆ LÃI
	//----------------------------------------------------------------------------------
	function getCompareRate(){
		return (double)$this->getValue()/(double)$this->getValueExportBaseRate();
	}
	function getCompareRatePrint(){
		return "1:".\round($this->getCompareRate(),1);
	}
	
	function getBusinessRate(){
		return $this->getCompareRate()*$this->getBankRate();
	}
	function getBusinessRatePrint(){
		return \round($this->getBusinessRate(), 2)."%";
	}
	
	//----------------------------------------------------------------------------------
	//Quản lý Log
	//----------------------------------------------------------------------------------
	function getLogTrackings(){
						
		$Start = \strtotime( date('d-m-Y', strtotime($this->getDateStart())) ); 
		$End = \strtotime( date('d-m-Y', strtotime($this->getDateEnd())) ); 
		
		//Xác định ngày đầu tiên của tuần tiếp theo
		$DTemp = strtotime('last sunday', $Start);
					
		for ($i = $DTemp; $i < $End; $i += 3600*24*7) {
			$D1 = date("Y-m-d", $i);
			$D2 = date("Y-m-d", $i + (3600*24*6));
				
			$Logs[] = new \MVC\Domain\WeekTracking(null, $this->getIdPond(), $D1, $D2);
		}
		return $Logs;
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL SETTING.POND.PONDSESSION
	//-------------------------------------------------------------------------------
	function getURLViewByWeek(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/report/pond/".$this->getIdPond()."/".$this->getId()."/view/week";
	}
	
	function getURLPrintGeneral(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/report/pond/".$this->getIdPond()."/".$this->getId()."/print/general";
	}
	
	function getURLPrintLog(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/report/pond/".$this->getIdPond()."/".$this->getId()."/print/log";
	}
	
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/pond/".$this->getIdPond()."/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();		
		return "/".$App."/setting/pond/".$this->getIdPond()."/".$this->getId()."/upd/exe";
	}
	
	function getURLDelLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();		
		return "/".$App."/setting/pond/".$this->getIdPond()."/".$this->getId()."/del/load";
	}
	function getURLDelExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();		
		return "/".$App."/setting/pond/".$this->getIdPond()."/".$this->getId()."/del/exe";
	}
					
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}

?>