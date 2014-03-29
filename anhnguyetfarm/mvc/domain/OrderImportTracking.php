<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class OrderImportTracking extends Object{

    private $Id;
	private $IdPond;
	private $DateStart;
    private $DateEnd;
	private $DateEnd1;
	private $BankRate;

	private $Orders;
	private $Dates;
	
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct(
		$Id=null,		
		$IdPond=null,
		$DateStart=null,
		$DateEnd=null,
		$DateEnd1=null,
		$BankRate=null
	) {
        $this->Id = $Id;
		$this->IdPond = $IdPond;
		$this->DateStart = $DateStart;
		$this->DateEnd = $DateEnd;
		$this->DateEnd1 = $DateEnd1;
		$this->BankRate = $BankRate;
		
        parent::__construct( $Id );
    }
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
    function getId( ) {
        return $this->Id;
    }
				
    function setIdPond( $IdPond ) {
        $this->IdPond = $IdPond;
        $this->markDirty();
    }
    function getIdPond( ) {
        return $this->IdPond;
    }
    		
	function setDateStart( $DateStart ) {
        $this->DateStart = $DateStart;
        $this->markDirty();
    }
	function getDateStart( ) {
        return $this->DateStart;
    }
	function getDateStartPrint( ){
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
	function getDateEndPrint( ){
		$date = new \DateTime($this->DateEnd);
		return $date->format('d/m/Y');
    }
	
	//Ngày kết thúc tính lãi kép
	function setDateEnd1( $DateEnd1 ) {
        $this->DateEnd1 = $DateEnd1;
        $this->markDirty();
    }
	function getDateEnd1( ) {
        return $this->DateEnd1;
    }
	
	//Lãi suất
	function setBankRate( $BankRate ) {
        $this->BankRate = $BankRate;
        $this->markDirty();
    }
	function getBankRate( ) {
        return $this->BankRate;
    }
	
	function getMonthPrint( ){
		$date = new \DateTime($this->DateStart);
		return "THÁNG ".$date->format('m/Y');
		//$d1 = new \DateTime($this->DateStart);
		//$d2 = new \DateTime($this->DateEnd);
		//return $this->getPond()->getName()."-".$d1->format('d/m/Y')."-".$d2->format('d/m/Y');
    }
	
	function getIdMonth( ){
		$date = new \DateTime($this->DateStart);
		return "T".$date->format('mY');
    }
		
	function getPond(){
		$mPond = new \MVC\Mapper\Pond();
		$Pond = $mPond->find($this->IdPond);
		return $Pond;
    }
	
	//Lấy về danh sách ngày
	function getDates(){
		$start = \strtotime($this->getDateStart());
		$end = \strtotime($this->getDateEnd());

		$times = array();
		for ($i = $start; $i <= $end; $i += 24*3600){
			$D = \date("Y-m-d", $i);
			$DT = new \MVC\Domain\DateTracking(
				null,
				$this->getIdPond(),
				$D
			);
			$times[]= $DT;
		}
		return $times;
	}
	
	//Lấy thức ăn + thuốc
	function getOrders(){
		$mOrder = new \MVC\Mapper\OrderImport();
		$Orders = $mOrder->findByTracking1(
			array(
				$this->getIdPond(),
				$this->getDateStart(),
				$this->getDateEnd()
			)
		);
		return $Orders;
	}
		
	function getOrdersValue(){
		$Orders = $this->getOrders();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getValue();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getOrdersValuePrint(){
		$N = new \MVC\Library\Number( $this->getOrdersValue() );
		return $N->formatCurrency()." đ";
	}
	
	//Chỉ lấy thức ăn
	function getOrders1(){
		$mOrder = new \MVC\Mapper\OrderImport();
		$Orders = $mOrder->findByTracking2(
			array(
				$this->getIdPond(),
				$this->getDateStart(),
				$this->getDateEnd()
			)
		);
		return $Orders;
	}
	
	function getOrdersValue1Base(){
		$Orders = $this->getOrders1();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getValue();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getOrdersValue1BasePrint(){
		$N = new \MVC\Library\Number( $this->getOrdersValue1Base() );
		return $N->formatCurrency()." đ";
	}
	
	function getOrdersValue1Rate(){
		$D1 = new \DateTime( $this->DateStart );
		$D2 = new \DateTime( $this->DateEnd1 );
		$interval = $D1->diff($D2);
		$days = $interval->format('%a');
		$months = \round($days/30, 1);

		$Value = $this->getOrdersValue1Base()*(\pow( 1 + (double)$this->BankRate/100.0, $months) - 1.0);
		return $Value;
	}
	function getOrdersValue1RatePrint(){
		$N = new \MVC\Library\Number( $this->getOrdersValue1Rate() );
		return $N->formatCurrency()." đ";
	}
	
	function getOrdersValue1(){
		return $this->getOrdersValue1Rate() + $this->getOrdersValue1Base();
	}	         
	function getOrdersValue1Print(){
		$N = new \MVC\Library\Number( $this->getOrdersValue1() );
		return $N->formatCurrency()." đ";
	}
	
	function getOrdersCount1(){
		$Orders = $this->getOrders1();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getCount();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getOrdersCount1Print(){
		$N = new \MVC\Library\Number( $this->getOrdersCount1() );
		return $N->formatCurrency()." kg";
	}
	
	//Chỉ lấy thuốc
	function getOrders2(){
		$mOrder = new \MVC\Mapper\OrderImport();
		$Orders1 = $mOrder->findByTracking3(
			array(
				$this->getIdPond(),
				$this->getDateStart(),
				$this->getDateEnd()
			)
		);
		return $Orders1;
	}
	
	function getOrdersValue2Base(){
		$Orders = $this->getOrders2();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getValue();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getOrdersValue2BasePrint(){
		$N = new \MVC\Library\Number( $this->getOrdersValue2Base() );
		return $N->formatCurrency()." đ";
	}
	
	function getOrdersValue2Rate(){
		$D1 = new \DateTime( $this->DateStart );
		$D2 = new \DateTime( $this->DateEnd1 );
		$interval = $D1->diff($D2);
		$days = $interval->format('%a');
		$months = \round($days/30, 1);

		$Value = $this->getOrdersValue2Base()*(\pow( 1 + (double)$this->BankRate/100.0, $months) - 1.0);
		return $Value;
	}
	function getOrdersValue2RatePrint(){
		$N = new \MVC\Library\Number( $this->getOrdersValue2Rate() );
		return $N->formatCurrency()." đ";
	}
	
	//Tổng giá trị tiền thuốc
	function getOrdersValue2(){
		return $this->getOrdersValue2Rate() + $this->getOrdersValue2Base();
	}
	function getOrdersValue2Print(){
		$N = new \MVC\Library\Number( $this->getOrdersValue2() );
		return $N->formatCurrency()." đ";
	}
	
	/*--------------------------------------------------------------------*/
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
		
}
?>