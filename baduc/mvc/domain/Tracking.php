<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Tracking extends Object{
    private $Id;
	private $DateStart;
	private $DateEnd;
	private $CustomerRate;
	private $CustomerRatePaid;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $DateStart=null, $DateEnd=null, $CustomerRate=null, $CustomerRatePaid=null) {$this->Id = $Id; $this->DateStart = $DateStart; $this->DateEnd = $DateEnd;  $this->CustomerRate = $CustomerRate; $this->CustomerRatePaid = $CustomerRatePaid; parent::__construct( $Id );}
    
	function getId() {return $this->Id;}	
	function getIdPrint(){return "u" . $this->getId();}	
	function getName(){$Name = 'THÁNG '.\date("m/Y", strtotime($this->getDateStart()));return $Name;}
	
    function setDateStart( $DateStart ) {$this->DateStart = $DateStart;$this->markDirty();}   
	function getDateStart( ) {return $this->DateStart;}	
	function getDateStartPrint( ) {$D = new \MVC\Library\Date($this->DateStart);return $D->getDateFormat();}
	
	function setDateEnd( $DateEnd ) {$this->DateEnd= $DateEnd;$this->markDirty();}   
	function getDateEnd( ) {return $this->DateEnd;}	
	function getDateEndPrint( ) {$D = new \MVC\Library\Date($this->DateEnd);return $D->getDateFormat();}
	
	function setCustomerRate( $CustomerRate ) {$this->CustomerRate= $CustomerRate;$this->markDirty();}   
	function getCustomerRate( ) {return $this->CustomerRate;}	
	function getCustomerRatePrint( ) {
		return $this->getCustomerRate()."%";
	}
	
	function setCustomerRatePaid( $CustomerRate ) {$this->CustomerRatePaid = $CustomerRatePaid; $this->markDirty();}
	function getCustomerRatePaid( ) {return $this->CustomerRatePaid;}
	function getCustomerRatePaidPrint( ){
		$N = new \MVC\Library\Number($this->getCustomerRatePaid());
		return $N->formatCurrency();
	}
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	function getPre(){
		$mTracking = new \MVC\Mapper\Tracking();
		$T = $mTracking->findPre(array($this->getDateStart()));
		return $T;
	}
	function getTCT($IdCT){
		$mTCT 	= new \MVC\Mapper\TrackingCT();
		$TCTAll = $mTCT->findBy( array($IdCT, $this->getId()) );
		return $TCTAll;
	}
	function getOrderRating($IdCT){
		$T 			= $this->getPre();
		$mOrder 	= new \MVC\Mapper\OrderExport();
		$OrderAll 	= $mOrder->findByTracking( array($IdCT, $T->getDateStart(), $T->getDateEnd()) );
		return $OrderAll;
	}
	
	function getNDay(){		
		$Value = strtotime($this->getDateEnd()) - strtotime($this->getDateStart());
		return round($Value/84600,0);
	}
	
	//--------------------------------------------------------------------------------
	//KHÁCH HÀNG > GIAO DỊCH > ĐƠN HÀNG XUẤT
	//--------------------------------------------------------------------------------
	function getCustomerTrackingOrderAll($IdCustomerTracking){
		$mOrder = new \MVC\Mapper\OrderExport();
		$OrderAll = $mOrder->findByTracking(array($IdCustomerTracking, $this->getDateStart(), $this->getDateEnd()));
		return $OrderAll;
	}
	function getCustomerTrackingOrderAllValue($IdCustomerTracking){
		$Value = 0;
		$OrderAll = $this->getCustomerTrackingOrderAll($IdCustomerTracking);
		while ($OrderAll->valid()){
			$Order = $OrderAll->current();
			$Value += $Order->getValue();
			$OrderAll->next();
		}
		return $Value;
	}
	function getCustomerTrackingOrderAllValuePrint($IdCustomerTracking){
		$N = new \MVC\Library\Number($this->getCustomerTrackingOrderAllValue($IdCustomerTracking));
		return $N->formatCurrency()." đ";
	}
	
	//Lọc dữ liệu bán hàng: THUỐC - BÌNH THƯỜNG - THỨC ĂN
	function getCustomerTrackingOrderAllByTag($IdCustomerTracking, $Tag){
		$mOrder = new \MVC\Mapper\OrderExport();
		$OrderAll = $mOrder->findByTracking1(array($IdCustomerTracking, $Tag, $this->getDateStart(), $this->getDateEnd()));
		return $OrderAll;
	}
	function getCustomerTrackingOrderAllByTagValue($IdCustomerTracking, $Tag){
		$Value = 0;
		$OrderAll = $this->getCustomerTrackingOrderAllByTag($IdCustomerTracking, $Tag);
		while ($OrderAll->valid()){
			$Order = $OrderAll->current();
			$Value += $Order->getValue();
			$OrderAll->next();
		}
		return $Value;
	}
	function getCustomerTrackingOrderAllByTagValuePrint($IdCustomerTracking, $Tag){
		$N = new \MVC\Library\Number($this->getCustomerTrackingOrderAllByTagValue($IdCustomerTracking, $Tag));
		return $N->formatCurrency()." đ";
	}
	//--------------------------------------------------------------------------------
	//KHÁCH HÀNG > GIAO DỊCH > ỨNG TIỀN
	//--------------------------------------------------------------------------------
	function getCustomerTrackingPaidAll($IdCustomerTracking){
		$mPaid = new \MVC\Mapper\PaidCustomer();
		$PaidAll = $mPaid->findByTracking(array($IdCustomerTracking, $this->getDateStart(), $this->getDateEnd()));
		return $PaidAll;
	}
	function getCustomerTrackingPaidAllValue($IdCustomerTracking){
		$Value = 0;
		$PaidAll = $this->getCustomerTrackingPaidAll($IdCustomerTracking);
		while ($PaidAll->valid()){
			$Paid = $PaidAll->current();
			$Value += $Paid->getValue();
			$PaidAll->next();
		}
		return $Value;
	}
	function getCustomerTrackingPaidAllValuePrint($IdCustomerTracking){
		$N = new \MVC\Library\Number($this->getCustomerTrackingPaidAllValue($IdCustomerTracking));
		return $N->formatCurrency()." đ";
	}
	
	//--------------------------------------------------------------------------------
	//KHÁCH HÀNG > GIAO DỊCH > TRẢ TIỀN
	//--------------------------------------------------------------------------------
	function getCustomerTrackingCollectAll($IdCustomerTracking){
		$mCollect = new \MVC\Mapper\CollectCustomer();
		$CollectAll = $mCollect->findByTracking(array($IdCustomerTracking, $this->getDateStart(), $this->getDateEnd()));
		return $CollectAll;
	}
	function getCustomerTrackingCollectAllValue($IdCustomerTracking){
		$Value = 0;
		$CollectAll = $this->getCustomerTrackingCollectAll($IdCustomerTracking);
		while ($CollectAll->valid()){
			$Collect = $CollectAll->current();
			$Value += $Collect->getValue();
			$CollectAll->next();
		}
		return $Value;
	}
	function getCustomerTrackingCollectAllValuePrint($IdCustomerTracking){
		$N = new \MVC\Library\Number($this->getCustomerTrackingCollectAllValue($IdCustomerTracking));
		return $N->formatCurrency()." đ";
	}
	
	//-------------------------------------------------------------------------------------
	//KHÁCH HÀNG > GIAO DỊCH > DƯ NỢ CŨ
	//-------------------------------------------------------------------------------------
	
	
	//-------------------------------------------------------------------------------------
	//KHÁCH HÀNG > GIAO DỊCH > DƯ NỢ MỚI
	//-------------------------------------------------------------------------------------	
	function getCustomerTrackingNewDebt($IdCustomerTracking){
		$Value = 	$this->getCustomerTrackingOrderAllValue($IdCustomerTracking,2) 		+ 
					$this->getCustomerTrackingOrderAllValue($IdCustomerTracking,1)		+
					$this->getCustomerTrackingPaidAllValuePrint($IdCustomerTracking)	+
					0																	-
					$this->getCustomerTrackingCollectAllValuePrint($IdCustomerTracking)
		;
		return $Value;
	}
	function getCustomerTrackingNewDebtPrint($IdCustomerTracking){
		$N = new \MVC\Library\Number($this->getCustomerTrackingNewDebt($IdCustomerTracking));
		return $N->formatCurrency()." đ";
	}
	
	//LẤY VỀ DANH SÁCH NGÀY
	function getURLDayAll(){
		$Data = array();
		$Date = $this->getDateStart();
		$EndDate = $this->getDateEnd();
		while (strtotime($Date) <= strtotime($EndDate)){
			$Data[] = array(
						\date("d/m", strtotime($Date)),
						"/report/selling/".$Date."/detail",
						"/report/log/".$Date,
						"/payroll/".$this->getId()."/absent/".$Date,
						"/payroll/".$this->getId()."/late/".$Date,
						$Date
					);
			$Date = \date("Y-m-d", strtotime("+1 day", strtotime($Date)));
		}
		return $Data;
	}
	
	//-------------------------------------------------------------------------------
	//LƯƠNG NHÂN VIÊN
	//-------------------------------------------------------------------------------
	function getPayRollEmployee( $IdEmployee){ 
		$mPPR = new \MVC\Mapper\PayRoll(); 
		$PPRAll = $mPPR->findByTracking( array( $IdEmployee, $this->getDateStart(), $this->getDateEnd() )); 
		return $PPRAll;
	}
	
	function getPayRollEmployeeValue( $IdEmployee){
		$mEmployee 		= new \MVC\Mapper\Employee();
		$mConfig 		= new \MVC\Mapper\Config();
		
		$Employee 		= $mEmployee->find($IdEmployee);
		$Config5Minutes = $mConfig->findByName('EVERY_5_MINUTES');
		
		$PRAll = $this->getPayRollEmployee($IdEmployee);
		$Extra = 0;
		$Late = 0;
		$Absent = 0;
		$DayValue = $Employee->getSalaryBase()/30;
		while ($PRAll->valid()){
			$PR = $PRAll->current();
			$Extra += $PR->getExtra();
			$Absent += $PR->getState()==0?1:0;
			$Late += $PR->getLate();
			$PRAll->next();
		}
		//Tính thời gian trễ
		$LateValue = ($Late/5)*$Config5Minutes->getValue();
					
		//Tính làm thêm
		$ExtraValue = $Extra*$DayValue;
					
		//Tính nghỉ ca
		$AbsentValue = $Absent*$DayValue;
					
		//Tổng lương
		$Salary = $Employee->getSalaryBase() + $ExtraValue - $AbsentValue - $LateValue;
		
		return $Salary;
	}
	function getPayRollEmployeeValuePrint( $IdEmployee){
		$N = new \MVC\Library\Number( $this->getPayRollEmployeeValue($IdEmployee) );
		return $N->formatCurrency()." đ";
	}
	
	function getPayRollValue(){
		$mEmployee 		= new \MVC\Mapper\Employee();
		$EmployeeAll 	= $mEmployee->findAll();
		$Sum = 0;
		while($EmployeeAll->valid()){
			$Employee = $EmployeeAll->current();
			$Sum += $this->getPayRollEmployeeValue($Employee->getId());
			$EmployeeAll->next();
		}
		return $Sum;		
	}
	function getPayRollValuePrint( ){
		$N = new \MVC\Library\Number( $this->getPayRollValue() );
		return $N->formatCurrency(). " đ";
	}
	
	function toJSON(){
		$json = array(
			'Id' 				=> $this->getId(),
			'DateStart'			=> $this->getDateStart(),
			'DateEnd'			=> $this->getDateEnd(),
			'CustomerRate'		=> $this->getCustomerRate(),
			'CustomerRatePaid'	=> $this->getCustomerRatePaid()
		);		
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 				= $Data[0];
		$this->DateStart 		= $Data[1];
		$this->DateEnd	 		= $Data[2];		
		$this->CustomerRate		= $Data[3];
		$this->CustomerRatePaid	= $Data[4];
    }
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLView(){return "/report/".$this->getId();}
	
	function getURLCustomer(){return "/report/customer/".$this->getId();}	
	function getURLCustomerTracking($IdCustomer){return "/report/customer/".$this->getId()."/".$IdCustomer;}
	function getURLCustomerTrackingDetail($IdCustomer, $IdCT){return "/report/customer/".$this->getId()."/".$IdCustomer."/".$IdCT;}
	function getURLCustomerTrackingDetailDebt($IdCustomer, $IdCT){return "/report/customer/".$this->getId()."/".$IdCustomer."/".$IdCT."/debt";}
	function getURLCustomerTrackingDetailDebtPrint($IdCustomer, $IdCT){return "/report/customer/".$this->getId()."/".$IdCustomer."/".$IdCT."/debt/print";}
	function getURLCustomerTrackingDetailSave($IdCustomer, $IdCT){return "/report/customer/".$this->getId()."/".$IdCustomer."/".$IdCT."/save";}
	function getURLCustomerTrackingDetailPrint($IdCustomer, $IdCT){return "/report/customer/".$this->getId()."/".$IdCustomer."/".$IdCT."/print";}
	
	function getURLPaidGeneral(){return "/report/paid/".$this->getId();}	
	function getURLPaidGeneralSave(){return "/report/paid/".$this->getId();}	
	function getURLCollectGeneral(){return "/report/collect/".$this->getId();}
	function getURLCollectGeneralSave(){return "/report/collect/".$this->getId();}
	function getURLImportGeneral(){return "/report/import/".$this->getId()."/general";}			
	function getURLImportGeneralSave(){return "/report/import/".$this->getId()."/general";}			
	function getURLEvalStore(){return "/report/store/".$this->getId()."/eval";}
	
	function getURLStore(){return "/report/store/".$this->getId();}
	function getURLStoreSave(){return "/report/store/".$this->getId();}
	function getURLStoreInit(){return "/report/store/".$this->getId()."/init";}
	function getURLStoreEvaluate(){return "/report/store/".$this->getId()."/evaluate";}
	function getURLStoreEmpty(){return "/report/store/".$this->getId()."/empty";}
	
	function getURLCourse(){return "/report/course/".$this->getId();}
	function getURLResource(){return "/report/resource/".$this->getId();}
	function getURLHours(){return "/report/hours/".$this->getId();}
	function getURLGeneral(){return "/report/general/".$this->getId();}
			
	function getURLPayRoll(){return "/payroll/".$this->getId();}
	function getURLPayRollEmployee( $Employee ){return "/payroll/".$this->getId()."/".$Employee->getId();}
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}
?>