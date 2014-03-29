<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Pond extends Object{

    private $Id;
	private $Name;
	private $Address;
	private $Note;

	private $OrderTrackings;
	private $Sessions;
	private $Logs;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null , $Address=Null, $Note=Null) {
        $this->Id = $Id;
		$this->Name = $Name;
		$this->Address = $Address;
		$this->Note = $Note;
		
        parent::__construct( $Id );
    }
    function getId() {
        return $this->Id;
    }	
	function getIdPrint(){
        return "p" . $this->getId();
    }	
	
    function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
   
	function getName( ) {
        return $this->Name;
    }
	
	function setAddress( $Address ) {
        $this->Address = $Address;
        $this->markDirty();
    }
   
	function getAddress( ) {
        return $this->Address;
    }
	
	function setNote( $Note ) {
        $this->Note = $Note;
        $this->markDirty();
    }
   
	function getNote( ) {
        return $this->Note;
    }
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	function getCurrentSession(){
		if (!isset($this->Sessions)){
			$mSession = new \MVC\Mapper\PondSession();
			$this->Sessions = $mSession->findBy(array($this->getId()));
		}
		return $this->Sessions->current();
	}
	
	function getSessions(){
		if (!isset($this->Sessions)){
			$mSession = new \MVC\Mapper\PondSession();
			$this->Sessions = $mSession->findBy(array($this->getId()));
		}
		return $this->Sessions;
	}
	
	function getOrders(){
		$mOrder = new \MVC\Mapper\OrderExport();
		$Orders = $mOrder->findBy(array($this->getId()));
		return $Orders;
	}
	function getOrdersTop10(){
		$mOrder = new \MVC\Mapper\OrderExport();
		$Orders = $mOrder->findByTop10(array($this->getId()));
		return $Orders;
	}
	
	function getOrdersTracking(){
		if (!isset($this->OrdersTracking)){
			$Session = \MVC\Base\SessionRegistry::instance();
			$DateStart = $Session->getReportExportDateStart();
			$DateEnd = $Session->getReportExportDateEnd();

			$mOrder = new \MVC\Mapper\OrderExport();
			$this->OrdersTracking = $mOrder->findByTracking1( array($this->getId(), $DateStart, $DateEnd) );
		}
		return $this->OrdersTracking;
	}
	
	function getOrdersTrackingValue(){
		$Orders = $this->getOrdersTracking();
		$Sum = 0;
		$Orders->rewind();
		while ($Orders->valid()){
			$Sum += $Orders->current()->getValue();
			$Orders->next();
		}
		return $Sum;
	}
	function getOrdersTrackingValuePrint(){
		$Value = $this->getOrdersTrackingValue();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency()." d";
	}
	
	function getCategoryTracking(){
		if (!isset($this->CategoryTracking)){
			$Session = \MVC\Base\SessionRegistry::instance();
			$DateStart = $Session->getReportExportDateStart();
			$DateEnd = $Session->getReportExportDateEnd();

			$mCategory = new \MVC\Mapper\Category();
			$this->OrdersTracking = $mOrder->findByTracking1( array($this->getId(), $DateStart, $DateEnd) );			
		}
		return $this->OrdersTracking;
	}
	
	function getPaids(){
		if (!isset($this->Paids)){
			$mPE = new \MVC\Mapper\PaidPond();
			$this->Paids = $mPE->findBy(array($this->getId()));
		}
		return $this->Paids;
	}
	function getPaidsTop10(){
		if (!isset($this->PaidsTop10)){
			$mPE = new \MVC\Mapper\PaidPond();
			$this->PaidsTop10 = $mPE->findByTop10(array($this->getId()));
		}
		return $this->PaidsTop10;
	}
	
	function getPaidsTracking(){
		if (!isset($this->PaidsTracking)){		
			$mPE = new \MVC\Mapper\PaidPond();
			$Session = \MVC\Base\SessionRegistry::instance();
			$DateStart = $Session->getReportPondDateStart();
			$DateEnd = $Session->getReportPondDateEnd();
			
			$this->PaidsTracking = $mPE->findByTracking(array($this->getId(),$DateStart, $DateEnd));
		}
		return $this->PaidsTracking;
	}
	         
	function getPaidsTrackingValue(){
		$Paids = $this->getPaidsTracking();
		$Sum = 0;
		$Paids->rewind();
		while ($Paids->valid()){
			$Sum += $Paids->current()->getValue();
			$Paids->next();
		}
		return $Sum;
	}
	
	function getPaidsTrackingValuePrint(){
		$num = new \MVC\Library\Number($this->getPaidsTrackingValue());
		return $num->formatCurrency()." d";
	}
	
	function getLogs(){
		if (!isset($this->Logs)){
			$mPL = new \MVC\Mapper\PondLog();
			$this->Logs = $mPL->findBy(array($this->getId()));
		}
		return $this->Logs;
	}
	//-------------------------------------------------------------------------------
	//DEFINE EXPORT.POND
	//-------------------------------------------------------------------------------
	function getURLCall(){		
		return "#".$this->getIdPrint();
	}
	
	function getURLExport(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getId();
	}
	
	function getURLExportInsLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getId()."/ins/load";
	}
	
	function getURLExportInsExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getId()."/ins/exe";
	}
		
	//-------------------------------------------------------------------------------
	//DEFINE URL SETTING.POND
	//-------------------------------------------------------------------------------
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/pond/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/pond/".$this->getId()."/upd/exe";			
	}
	
	function getURLDelLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/pond/".$this->getId()."/del/load";						
	}
	function getURLDelExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/pond/".$this->getId()."/del/exe";
	}
		
	//-------------------------------------------------------------------------------
	//DEFINE URL SETTING.POND.PONDSESSION
	//-------------------------------------------------------------------------------
	function getURLSession(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/pond#".$this->getIdPrint();
	}
	function getURLSessionInsLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/pond/".$this->getId()."/ins/load";
	}
	function getURLSessionInsExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/pond/".$this->getId()."/ins/exe";
	}
				
	//--------------------------------------------------------------------------
    static function findAll() {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->findAll();
    }
    static function find( $Id ) {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->find( $Id );
    }
}
?>