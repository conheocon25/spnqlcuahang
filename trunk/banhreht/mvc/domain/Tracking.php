<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Tracking extends Object{
    private $Id;
	private $DateStart;
	private $DateEnd;
	private $EstateRate;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $DateStart=null, $DateEnd=null, $EstateRate=null) {$this->Id = $Id; $this->DateStart = $DateStart; $this->DateEnd = $DateEnd; $this->EstateRate = $EstateRate;  parent::__construct( $Id );}
    
	function getId() {return $this->Id;}	
	function getIdPrint(){return "u" . $this->getId();}	
	function getName(){$Name = 'THÁNG '.\date("m/Y", strtotime($this->getDateStart()));return $Name;}
	
    function setDateStart( $DateStart ) {$this->DateStart = $DateStart;$this->markDirty();}   
	function getDateStart( ) {return $this->DateStart;}	
	function getDateStartPrint( ) {$D = new \MVC\Library\Date($this->DateStart);return $D->getDateFormat();}
	
	function setDateEnd( $DateEnd ) {$this->DateEnd= $DateEnd;$this->markDirty();}   
	function getDateEnd( ) {return $this->DateEnd;}	
	function getDateEndPrint( ) {$D = new \MVC\Library\Date($this->DateEnd);return $D->getDateFormat();}
	
	function setEstateRate( $EstateRate ) {$this->EstateRate = $EstateRate;$this->markDirty();}   
	function getEstateRate( ) {return $this->EstateRate;}
	function getEstateRatePrint( ) {$N = new \MVC\Library\Number($this->EstateRate);return $N->formatCurrency();}
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	
	//-------------------------------------------------------------------------------	
	//TỔNG HỢP THU = TỔNG THU DOANH SỐ + TỔNG THU KHÁC + TỔNG THU KHÁCH HÀNG
	//-------------------------------------------------------------------------------
	function getCollectAll($IdTerm){$mCollect = new \MVC\Mapper\CollectGeneral();$CollectAll = $mCollect->findByTracking1(array($IdTerm, $this->getDateStart(), $this->getDateEnd()));return $CollectAll;}
	function getCollectAllValue($IdTerm){$CollectAll = $this->getCollectAll($IdTerm);$Value = 0;while ($CollectAll->valid()){$Collect = $CollectAll->current();$Value += $Collect->getValue();$CollectAll->next();}return $Value;}
	function getCollectAllValuePrint($IdTerm){$N = new \MVC\Library\Number($this->getCollectAllValue($IdTerm));return $N->formatCurrency()." đ";}
	function getCollectAllSum(){ $mCollect = new \MVC\Mapper\CollectGeneral(); $CollectAll = $mCollect->findByTracking(array($this->getDateStart(), $this->getDateEnd())); return $CollectAll; }
	
	function getCollectAllSumValue(){				
		$mCollect = new \MVC\Mapper\CollectGeneral();
		$CollectAll = $mCollect->findByTracking(array($this->getDateStart(), $this->getDateEnd()));		
		$Value = 0;
		while ($CollectAll->valid()){
			$Collect = $CollectAll->current();
			$Value += $Collect->getValue();
			$CollectAll->next();
		}				
		return $Value;
	}
	function getCollectAllSumValuePrint(){$N = new \MVC\Library\Number( $this->getCollectAllSumValue() );return $N->formatCurrency();}
	
	function getCollectGeneralValue(){return ($this->getCollectAllSumValue() + $this->getSessionAllValue() + $this->getCustomerCollectGeneralValue() );}
	function getCollectGeneralValuePrint(){$N = new \MVC\Library\Number($this->getCollectGeneralValue());return $N->formatCurrency()." đ";}
		
	//-------------------------------------------------------------------------------
	//TỔNG HỢP CHI = TỔNG CHI NHẬP HÀNG + TỔNG CHI KHÁC + TỔNG CHI LƯƠNG
	//-------------------------------------------------------------------------------
	function getPaidAll($IdTerm){$mPaid = new \MVC\Mapper\PaidGeneral();$PaidAll = $mPaid->findByTracking1(array($IdTerm, $this->getDateStart(), $this->getDateEnd()));return $PaidAll;}
	function getPaidAllValue($IdTerm){$PaidAll = $this->getPaidAll($IdTerm);$Value = 0;while ($PaidAll->valid()){$Paid = $PaidAll->current();$Value += $Paid->getValue();$PaidAll->next();}return $Value;}
	function getPaidAllValuePrint($IdTerm){$N = new \MVC\Library\Number($this->getPaidAllValue($IdTerm));return $N->formatCurrency()." đ";}
	function getPaidAllValueStrPrint($IdTerm){$N = new \MVC\Library\Number($this->getPaidAllValue($IdTerm));return $N->readDigit()."đồng";}	
	function getPaidAllSum(){$mPaid = new \MVC\Mapper\PaidGeneral();$PaidAll = $mPaid->findByTracking(array($this->getDateStart(), $this->getDateEnd()));return $PaidAll;}	
	function getPaidAllSumValue(){
		//Các khoản chi tổng quát
		$PaidAll = $this->getPaidAllSum();
		$Value = 0;
		while ($PaidAll->valid()){
			$Paid = $PaidAll->current();
			$Value += $Paid->getValue();
			$PaidAll->next();
		}				
		return $Value;
	}
	function getPaidAllSumValuePrint(){$N = new \MVC\Library\Number($this->getPaidAllSumValue());return $N->formatCurrency()." đ";}
	
	function getPaidGeneralValue(){
		return ($this->getPaidAllSumValue() + $this->getPaidPayRollAllValue() + $this->getOrderAllSumValue() );
	}
	function getPaidGeneralValuePrint(){$N = new \MVC\Library\Number($this->getPaidGeneralValue());return $N->formatCurrency()." đ";}
	
	//--------------------------------------------------------------------------------	
	//NHẬP HÀNG
	//--------------------------------------------------------------------------------
	function getOrderAll($IdSupplier){$mOrder = new \MVC\Mapper\OrderImport();$OrderAll = $mOrder->findByTracking1(array($IdSupplier, $this->getDateStart(), $this->getDateEnd()));return $OrderAll;}
	function getOrderAllValue($IdSupplier){$OrderAll = $this->getOrderAll($IdSupplier);$Value = 0;while ($OrderAll->valid()){$Order = $OrderAll->current();$Value += $Order->getValue();$OrderAll->next();}return $Value;}
	function getOrderAllValuePrint($IdSupplier){$N = new \MVC\Library\Number($this->getOrderAllValue($IdSupplier));return $N->formatCurrency()." d";}
	function getOrderAllValueStrPrint($IdSupplier){$N = new \MVC\Library\Number($this->getOrderAllValue($IdSupplier));return $N->readDigit()." đồng";}
	
	function getOrderAllSum(){$mOrder = new \MVC\Mapper\OrderImport();$OrderAll = $mOrder->findByTracking(array($this->getDateStart(), $this->getDateEnd()));return $OrderAll;}
	function getOrderAllSumValue(){$OrderAll = $this->getOrderAllSum();$Value = 0;while ($OrderAll->valid()){$Order = $OrderAll->current();$Value += $Order->getValue();$OrderAll->next();}return $Value;}
	function getOrderAllSumValuePrint(){$N = new \MVC\Library\Number($this->getOrderAllSumValue());return $N->formatCurrency()." đ";}
		
	//--------------------------------------------------------------------------------
	//BÁN HÀNG
	//--------------------------------------------------------------------------------
	function getSessionAll(){$mSession = new \MVC\Mapper\Session();$Date1 = \date("Y-m-d", strtotime($this->getDateStart()))." 8:0:0";$Date2 = \date("Y-m-d", strtotime("+1 day", strtotime($this->getDateEnd())))." 7:59:59";$SessionAll = $mSession->findByTracking( array($Date1, $Date2) );return $SessionAll;}	
	function getSessionAllValue(){		
		return $this->getSessionAllValue1() + $this->getSessionAllValue2();
	}
	function getSessionAllValue1(){
		$SessionAll = $this->getSessionAll();
		$Value = 0;
		while ($SessionAll->valid()){
			$Session = $SessionAll->current();
			if ($Session->getStatus()==1)
				$Value += $Session->getValue();
			$SessionAll->next();
		}
		return $Value;
	}
	function getSessionAllValue2(){
		$SessionAll = $this->getSessionAll();
		$Value = 0;
		while ($SessionAll->valid()){
			$Session = $SessionAll->current();
			if ($Session->getStatus()==2)
				$Value += $Session->getValue();
			$SessionAll->next();
		}
		return $Value;
	}
	function getSessionAllValue1Print(){$N = new \MVC\Library\Number($this->getSessionAllValue1());return $N->formatCurrency()." đ";}
	function getSessionAllValue2Print(){$N = new \MVC\Library\Number($this->getSessionAllValue2());return $N->formatCurrency()." đ";}
	function getSessionAllValuePrint(){$N = new \MVC\Library\Number($this->getSessionAllValue());return $N->formatCurrency()." đ";}
	
	
	//---------------------------------------------------------------------------------------------
	//TÍNH SỐ DƯ CUỐI CÙNG	
	//---------------------------------------------------------------------------------------------
	function getValue(){
		$Value = 
			$this->getCollectAllSumValue()
			+ $this->getTrackingStoreValue() 
			- $this->getOrderAllSumValue() 
			- $this->getPaidAllSumValue()
			- $this->getEstateRate();
		return $Value;
	}
	
	function getValuePrint(){ $N = new \MVC\Library\Number($this->getValue()); return $N->formatCurrency()." đ";}
	function getValueStrPrint(){ $N = new \MVC\Library\Number($this->getValue()); return $N->readDigit()." đồng";}
	
	//-------------------------------------------------------------------------------------
	//THEO DÕI SỐ TỒN KHO
	//-------------------------------------------------------------------------------------		
	function getCourseOld($IdCourse){
		$mTracking 		= new \MVC\Mapper\Tracking();
		$mTS 			= new \MVC\Mapper\TrackingStore();
		$TrackingAll 	= $mTracking->findByNearest(array($this->getDateStart()));
		
		if ($TrackingAll->count()==0)
			return -1;
		
		$IdTracking = $TrackingAll->current()->getId();
		$TSAll = $mTS->findByCourse( array($IdTracking, $IdCourse));
		if ($TSAll->count()==0)
			return -2;
		return $TSAll->current()->getCountRemain();
	}
	function getResourceOldPrint($IdResource){return \round( $this->getResourceOld($IdResource) ,1 );}
	function getResourceImport($IdResource){$mOD = new \MVC\Mapper\OrderImportDetail();$Count = $mOD->trackByCount( array($IdResource, $this->getDateStart(), $this->getDateEnd()) );return ($Count?$Count:0);}	
		
	function getTrackingStore(){
		$mTrackingStore = new \MVC\Mapper\TrackingStore();
		$TrackingStoreAll = $mTrackingStore->findBy(array($this->getId()));		
		return $TrackingStoreAll;
	}
	
	function getTrackingStoreValue(){
		$TrackingStoreAll = $this->getTrackingStore();
		$Value = 0;
		while($TrackingStoreAll->valid()){ 
			$TS = $TrackingStoreAll->current(); 
			$Value += $TS->getCountRemainValue();
			$TrackingStoreAll->next();
		}
		return $Value;
	}
	function getTrackingStoreValuePrint(){ $N = new \MVC\Library\Number( $this->getTrackingStoreValue() ); return $N->formatCurrency();}
	
	//-------------------------------------------------------------------------------------
	//THEO DÕI SỐ MÓN ĐÃ GỌI
	//-------------------------------------------------------------------------------------
	function getCountCategory($IdCategory){$mSD = new \MVC\Mapper\SessionDetail();$Count = $mSD->trackByCategory( array($IdCategory, $this->getDateStart(), $this->getDateEnd()) );return $Count;}
	function getCountCategoryPrint($IdCategory){$N = new \MVC\Library\Number($this->getCountCategory($IdCategory));return $N->formatCurrency();}	
	function getCountCourse($IdCourse){$mSD = new \MVC\Mapper\SessionDetail();$Count = $mSD->trackByCount( array($IdCourse, $this->getDateStart(), $this->getDateEnd()) );return $Count;}
	function getCountCoursePrint($IdCourse){$N = new \MVC\Library\Number($this->getCountCourse($IdCourse));return $N->formatCurrency();}
	
	//-------------------------------------------------------------------------------------
	//THEO DÕI CÔNG NỢ KHÁCH HÀNG
	//-------------------------------------------------------------------------------------
	//TÍNH NỢ CŨ
	function getCustomerOldDebt($IdCustomer){
		$mSession = new \MVC\Mapper\Session();
		$mCC = new \MVC\Mapper\CollectCustomer();
		$Date1 = \date("Y-m-d", strtotime("2013-1-1"));		
		$Date2 = \date("Y-m-d", strtotime($this->getDateStart()))." 7:59:0";
						
		//Tính phiếu nợ trước đó
		$SessionAll = $mSession->findByTrackingDebtCustomer( array($IdCustomer, $Date1, $Date2) );
		$ValueSessionAll = 0;
		while ($SessionAll->valid()){
			$Session = $SessionAll->current();
			if ($Session->getStatus()==2)
				$ValueSessionAll += $Session->getValue();
			$SessionAll->next();
		}
		
		//Tính tiền trả trước đó
		$Date11 = \date("Y-m-d", strtotime("2013-1-1"));
		$Date21 = \date("Y-m-d", strtotime("-1 day", strtotime($this->getDateStart())));
		$CollectAll = $mCC->findByTracking( array($IdCustomer, $Date11, $Date21) );				
		$ValueCollectAll = 0;
		while ($CollectAll->valid()){
			$Collect = $CollectAll->current();
			$ValueCollectAll += $Collect->getValue();
			$CollectAll->next();
		}
		
		$Value = $ValueSessionAll - $ValueCollectAll;
		return $Value;
	}
	function getCustomerOldDebtPrint($IdCustomer){$N = new \MVC\Library\Number( $this->getCustomerOldDebt($IdCustomer) );return $N->formatCurrency()." đ";}
	
	//CÁC GIAO DỊCH CỦA KHÁCH HÀNG TRONG KÌ
	function getCustomerSessionAll($IdCustomer){$mSession = new \MVC\Mapper\Session();$Date1 = \date("Y-m-d", strtotime($this->getDateStart()))." 8:0:0";$Date2 = \date("Y-m-d", strtotime("+1 day", strtotime($this->getDateEnd())))." 7:59:59";$SessionAll = $mSession->findByTrackingCustomer( array($IdCustomer, $Date1, $Date2) );return $SessionAll;}
	function getCustomerSessionAllValue($IdCustomer){$SessionAll = $this->getCustomerSessionAll($IdCustomer);$Value = 0;while ($SessionAll->valid()){$Session = $SessionAll->current();$Value += $Session->getValue();$SessionAll->next();}return $Value;}
	function getCustomerSessionAllValuePrint($IdCustomer){$N = new \MVC\Library\Number($this->getCustomerSessionAllValue($IdCustomer));return $N->formatCurrency()." đ";}
	
	//CÁC GIAO DỊCH NỢ CỦA KHÁCH HÀNG TRONG KÌ
	function getCustomerDebtSessionAll($IdCustomer){$mSession = new \MVC\Mapper\Session();$Date1 = \date("Y-m-d", strtotime($this->getDateStart()))." 8:0:0";$Date2 = \date("Y-m-d", strtotime("+1 day", strtotime($this->getDateEnd())))." 7:59:59";$SessionAll = $mSession->findByTrackingDebtCustomer( array($IdCustomer, $Date1, $Date2) );return $SessionAll;}
	function getCustomerDebtSessionAllValue($IdCustomer){$SessionAll = $this->getCustomerDebtSessionAll($IdCustomer);$Value = 0;while ($SessionAll->valid()){$Session = $SessionAll->current();$Value += $Session->getValue();$SessionAll->next();}return $Value;}
	function getCustomerDebtSessionAllValuePrint($IdCustomer){$N = new \MVC\Library\Number($this->getCustomerDebtSessionAllValue($IdCustomer));return $N->formatCurrency()." đ";}
	
	//CÁC GIAO DỊCH THANH TOÁN ĐỦ CỦA KHÁCH HÀNG TRONG KÌ
	function getCustomerFullSessionAll($IdCustomer){$mSession = new \MVC\Mapper\Session();$Date1 = \date("Y-m-d", strtotime($this->getDateStart()))." 8:0:0";$Date2 = \date("Y-m-d", strtotime("+1 day", strtotime($this->getDateEnd())))." 7:59:59";$SessionAll = $mSession->findByTrackingFullCustomer( array($IdCustomer, $Date1, $Date2) );return $SessionAll;}
	function getCustomerFullSessionAllValue($IdCustomer){$SessionAll = $this->getCustomerFullSessionAll($IdCustomer);$Value = 0;while ($SessionAll->valid()){$Session = $SessionAll->current();$Value += $Session->getValue();$SessionAll->next();}return $Value;}
	function getCustomerFullSessionAllValuePrint($IdCustomer){$N = new \MVC\Library\Number($this->getCustomerFullSessionAllValue($IdCustomer));return $N->formatCurrency()." đ";}	
	
	//CÁC GIAO DỊCH THU TIỀN KHÁCH HÀNG TRONG KÌ
	function getCustomerCollectAll($IdCustomer){$mCC = new \MVC\Mapper\CollectCustomer();$Date1 = \date("Y-m-d", strtotime($this->getDateStart() ));$Date2 = \date("Y-m-d", strtotime($this->getDateEnd()   ));$CollectAll = $mCC->findByTracking( array($IdCustomer, $Date1, $Date2) );return $CollectAll;}
	function getCustomerCollectAllValue($IdCustomer){$CollectAll = $this->getCustomerCollectAll($IdCustomer);$Value = 0;while ($CollectAll->valid()){$Collect = $CollectAll->current();$Value += $Collect->getValue();$CollectAll->next();}return $Value;}
	function getCustomerCollectAllValuePrint($IdCustomer){$N = new \MVC\Library\Number($this->getCustomerCollectAllValue($IdCustomer));return $N->formatCurrency()." đ";}
	
	function getCustomerCollectGeneral(){
		$mCC = new \MVC\Mapper\CollectCustomer();
		$Date1 = \date("Y-m-d", strtotime($this->getDateStart() ));
		$Date2 = \date("Y-m-d", strtotime($this->getDateEnd()   ));
		$CollectAll = $mCC->findByTracking1( array($Date1, $Date2) );
		return $CollectAll;
	}
	
	function getCustomerCollectGeneralValue(){
		$CollectAll = $this->getCustomerCollectGeneral();
		$Value = 0;
		while ($CollectAll->valid()){
			$Collect = $CollectAll->current();
			$Value += $Collect->getValue();
			$CollectAll->next();
		}
		return $Value;
	}
	function getCustomerCollectGeneralValuePrint(){$N = new \MVC\Library\Number( $this->getCustomerCollectGeneralValue() );return $N->formatCurrency()." đ";}	
	
	//NỢ MỚI
	function getCustomerNewDebt($IdCustomer){return \abs($this->getCustomerOldDebt($IdCustomer)) + $this->getCustomerDebtSessionAllValue($IdCustomer) - $this->getCustomerCollectAllValue($IdCustomer);}
	function getCustomerNewDebtPrint($IdCustomer){$N = new \MVC\Library\Number( $this->getCustomerNewDebt($IdCustomer) );return $N->formatCurrency()." đ";}	
	function getCustomerNewDebtStrPrint($IdCustomer){$N = new \MVC\Library\Number( $this->getCustomerNewDebt($IdCustomer) );return $N->readDigit();}
	
	//THỐNG KÊ PHÒNG/PHIẾU/GIỜ
	function getTableSession($IdTable){		
		$Date1 = \date("Y-m-d", strtotime($this->getDateStart()))." 8:0:0";
		$Date2 = \date("Y-m-d", strtotime("+1 day", strtotime($this->getDateEnd())))." 7:59:59";		
		$mSession = new \MVC\Mapper\Session();
		$SessionAll = $mSession->findByTableTracking(array($IdTable,$Date1,$Date2));
		return $SessionAll;
	}
	
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
			'Id' 			=> $this->getId(),			
			'DateStart'		=> $this->getDateStart(),
			'DateEnd'		=> $this->getDateEnd(),
			'EstateRate'	=> $this->getEstateRate()
		);		
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->DateStart 	= $Data[1];
		$this->DateEnd	 	= $Data[2];
		//$this->EstateRate = $Data[3];
		$this->EstateRate 	= 0;
    }
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLView(){return "/report/".$this->getId();}
	
	function getURLCustomer(){return "/report/customer/".$this->getId();}
	function getURLCustomerDetail($IdCustomer){return "/report/customer/".$this->getId()."/".$IdCustomer;}	
	function getURLPaidGeneral(){return "/report/paid/".$this->getId();}	
	function getURLCollectGeneral(){return "/report/collect/".$this->getId();}
	function getURLImportGeneral(){return "/report/import/".$this->getId()."/general";}			
	function getURLEvalStore(){return "/report/store/".$this->getId()."/eval";}
	
	function getURLStore(){return "/report/store/".$this->getId();}
	function getURLStoreInit(){return "/report/store/".$this->getId()."/init";}
	function getURLStoreEvaluate(){return "/report/store/".$this->getId()."/evaluate";}
	function getURLStoreEmpty(){return "/report/store/".$this->getId()."/empty";}
	
	function getURLCourse(){return "/report/course/".$this->getId();}
	function getURLResource(){return "/report/resource/".$this->getId();}
	function getURLHours(){return "/report/hours/".$this->getId();}
	function getURLGeneral(){return "/report/general/".$this->getId();}		
	function getURLUpdLoad(){return "/report/".$this->getId()."/upd/load";}
	function getURLUpdExe(){return "/report/".$this->getId()."/upd/exe";}	
	function getURLDelLoad(){return "/report/".$this->getId()."/del/load";}
	function getURLDelExe(){return "/report/".$this->getId()."/del/exe";}
		
	function getURLPayRoll(){return "/payroll/".$this->getId();}
	function getURLPayRollEmployee( $Employee ){return "/payroll/".$this->getId()."/".$Employee->getId();}
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}
?>