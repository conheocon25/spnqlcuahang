<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class WeekTracking extends Object{

    private $Id;
	private $IdPond;
	private $DateStart;
	private $DateEnd;
    	
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct(
		$Id=null,		
		$IdPond=null,
		$DateStart=null,
		$DateEnd=null
	) {
        $this->Id = $Id;
		$this->IdPond = $IdPond;
		$this->DateStart = $DateStart;
		$this->DateEnd = $DateEnd;
				
        parent::__construct( $Id );
    }
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
    function getId( ) {
        return $this->Id;
    }
	function getIdPrint( ) {
        return $this->DateStart;
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
		$DateStart = new \DateStartTime($this->DateStart);
		return $DateStart->format('d/m/Y');
    }
	
	function setDateEnd( $DateEnd ) {
        $this->DateEnd = $DateEnd;
        $this->markDirty();
    }
	function getDateEnd( ) {
        return $this->DateEnd;
    }
	function getDateEndPrint( ){
		$DateEnd = new \DateStartTime($this->DateEnd);
		return $DateEnd->format('d/m/Y');
    }
	
	function getDateRangePrint(){
		$DateStart = new \DateTime($this->DateStart);
		$DateEnd = new \DateTime($this->DateEnd);
		return $DateStart->format('d/m')." -> ".$DateEnd->format('d/m');
	}
	
	function getPond(){
		$mPond = new \MVC\Mapper\Pond();
		$Pond = $mPond->find($this->IdPond);
		return $Pond;
    }
	
	//XUẤT THUỐC
	function getOrders1(){
		$mOrder = new \MVC\Mapper\OrderExport();
		$Orders = $mOrder->findByTracking3(
			array(
				$this->getIdPond(),
				$this->getDateStart(),
				$this->getDateEnd()
			)
		);
		return $Orders;
	}
		
	//XUẤT THỨC ĂN XUẤT RA
	function getOrders(){
		$mOrder = new \MVC\Mapper\OrderExport();
		$Orders = $mOrder->findByTracking2(
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
	
	function getOrdersCount(){
		$Orders = $this->getOrders();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getCount();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getOrdersCountPrint(){
		$N = new \MVC\Library\Number( $this->getOrdersCount() );
		return $N->formatCurrency()." kg";
	}
	
	//XUẤT THỨC ĂN TỪ ĐẦU VỤ
	function getSOrders(){
		$Session = \MVC\Base\SessionRegistry::instance();
		$DateStart = $Session->getPondSessionDateStart( );

		$mOrder = new \MVC\Mapper\OrderExport();
		$Orders = $mOrder->findByTracking2(
			array(
				$this->getIdPond(),
				$DateStart,
				$this->getDateEnd()
			)
		);
		return $Orders;
	}
	
	function getSOrdersValue(){
		$Orders = $this->getSOrders();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getValue();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getSOrdersValuePrint(){
		$N = new \MVC\Library\Number( $this->getSOrdersValue() );
		return $N->formatCurrency()." đ";
	}
	
	function getSOrdersCount(){
		$Orders = $this->getSOrders();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getCount();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getSOrdersCountPrint(){
		$N = new \MVC\Library\Number( $this->getSOrdersCount() );
		return $N->formatCurrency()." kg";
	}
	
	//NHẬP THỨC ĂN
	function getOrderImports(){
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
	
	function getOrderImportsValue(){
		$Orders = $this->getOrderImports();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getValue();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getOrderImportsValuePrint(){
		$N = new \MVC\Library\Number( $this->getOrderImportsValue() );
		return $N->formatCurrency()." đ";
	}
	
	function getOrderImportsCount(){
		$Orders = $this->getOrderImports();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getCount();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getOrderImportsCountPrint(){
		$N = new \MVC\Library\Number( $this->getOrderImportsCount() );		
		return $N->formatCurrency()." kg";
	}
	
	//NHẬP THỨC ĂN TỪ ĐẦU VỤ
	function getSOrderImports(){
		$Session = \MVC\Base\SessionRegistry::instance();
		$DateStart = $Session->getPondSessionDateStart( );

		$mOrder = new \MVC\Mapper\OrderImport();
		$Orders = $mOrder->findByTracking2(
			array(
				$this->getIdPond(),
				$DateStart,
				$this->getDateEnd()
			)
		);
		return $Orders;
	}
	
	function getSOrderImportsValue(){
		$Orders = $this->getSOrderImports();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getValue();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getSOrderImportsValuePrint(){
		$N = new \MVC\Library\Number( $this->getSOrderImportsValue() );
		return $N->formatCurrency()." đ";
	}
	
	function getSOrderImportsCount(){
		$Orders = $this->getSOrderImports();
		$Sum = 0;
		$Orders->rewind();
		while($Orders->valid()){
			$Order = $Orders->current();
			$Sum += $Order->getCount();
			$Orders->next();
		}
		return $Sum;
	}
	
	function getSOrderImportsCountPrint(){
		$N = new \MVC\Library\Number( $this->getSOrderImportsCount() );
		return $N->formatCurrency()." kg";
	}
	
	function getSOrderImportsCountRemain(){		
		$Sum = $this->getSOrderImportsCount() - $this->getSOrdersCount();
		return $Sum;
	}
	function getSOrderImportsCountRemainPrint(){
		$N = new \MVC\Library\Number( $this->getSOrderImportsCountRemain() );
		return $N->formatCurrency()." kg";
	}
	
	//TỔNG HAO HỤT
	function getLogs(){
		$mLog = new \MVC\Mapper\PondLog();
		$Logs = $mLog->findByTracking(
			array(
				$this->getIdPond(),
				$this->getDateStart(),
				$this->getDateEnd()
			)
		);
		return $Logs;
	}
	function getLogsCount(){
		$Logs = $this->getLogs();
		$Sum = 0;
		$Logs->rewind();
		while($Logs->valid()){
			$Log = $Logs->current();
			$Sum += $Log->getCount();
			$Logs->next();
		}
		return $Sum;
	}	
	function getLogsCountPrint(){
		$N = new \MVC\Library\Number( $this->getLogsCount() );
		return $N->formatCurrency()." con";
	}
	
	//TỔNG HAO HỤT TỪ ĐẦU VỤ
	function getSLogs(){
		$Session = \MVC\Base\SessionRegistry::instance();
		$DateStart = $Session->getPondSessionDateStart( );
		
		$mLog = new \MVC\Mapper\PondLog();
		$Logs = $mLog->findByTracking(
			array(
				$this->getIdPond(),
				$DateStart,
				$this->getDateEnd()
			)
		);
		return $Logs;
	}
	function getSLogsCount(){
		$Logs = $this->getSLogs();
		$Sum = 0;
		$Logs->rewind();
		while($Logs->valid()){
			$Log = $Logs->current();
			$Sum += $Log->getCount();
			$Logs->next();
		}
		return $Sum;
	}
	function getSLogsCountPrint(){
		$N = new \MVC\Library\Number( $this->getSLogsCount() );
		return $N->formatCurrency()." con";
	}
	
	/*--------------------------------------------------------------------*/
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
		
}
?>