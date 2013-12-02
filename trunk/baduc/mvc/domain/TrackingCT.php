<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class TrackingCT extends Object{

    private $Id;
	private $IdCT;
	private $IdTracking;
	private $Date;
	private $OEValue;
	private $PCValue;
	private $CCValue;
	private $RateValue;
	private $DebtValue;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id			=null, 
		$IdCT		=null, 
		$IdTracking	=null, 
		$Date		=null,
		$OEValue	=null, 
		$PCValue	=null, 
		$CCValue	=null, 
		$RateValue	=null, 
		$DebtValue	=null
	) {
        $this->Id 			= $Id;
		$this->IdCT 		= $IdCT;
		$this->IdTracking 	= $IdTracking;
		$this->Date 		= $Date;
		$this->OEValue 		= $OEValue;
		$this->PCValue 		= $PCValue;
		$this->CCValue 		= $CCValue;
		$this->RateValue 	= $RateValue;
		$this->DebtValue 	= $DebtValue;
		
        parent::__construct( $Id );
    }
    function getId() {return $this->Id;}
	
    function setIdCT( $IdCT ) {$this->IdCT = $IdCT;$this->markDirty();}
	function getIdCT( ) {return $this->IdCT;}
	function getCT( ) {
		$mCT 		= new \MVC\Mapper\CustomerTracking();
		$Tracking 	= $mCT->find( $this->getIdCT() );
		return $Tracking;
	}
	
	function setIdTracking( $IdTracking ) {$this->IdTracking = $IdTracking; $this->markDirty();}
	function getIdTracking( ) {return $this->IdTracking;}
	function getTracking( ) {
		$mTracking 	= new \MVC\Mapper\Tracking();
		$Tracking 	= $mTracking->find( $this->getIdTracking() );
		return $Tracking;
	}
		
	function setDate( $Date ) {$this->Date = $Date; $this->markDirty();}
	function getDate( ) {return $this->Date;}
	function getDatePrint(){		
		return \date("d/m", strtotime($this->Date));
	}
	
	function setOEValue( $OEValue ) {$this->OEValue = $OEValue; $this->markDirty();}
	function getOEValue( ) {return $this->OEValue;}
	function getOEValuePrint(){
		$N = new \MVC\Library\Number($this->OEValue);
		return $N->formatCurrency();
	}
	function getOEAll( ) {
		$mOrder 	= new \MVC\Mapper\OrderExport();
		$OrderAll 	= $mOrder->findByTracking(array($this->IdCT, $this->Date, $this->Date));
		return $OrderAll;
	}
	
	function setPCValue( $PCValue ) {$this->PCValue = $PCValue; $this->markDirty();}
	function getPCValue( ) {return $this->PCValue;}
	function getPCValuePrint(){
		if ($this->PCValue==0)
			return "-";
		$N = new \MVC\Library\Number($this->PCValue);
		return $N->formatCurrency();
	}
	
	function setCCValue( $PCValue ) {$this->CCValue = $CCValue; $this->markDirty();}
	function getCCValue( ) {return $this->CCValue;}
	function getCCValuePrint(){
		if ($this->CCValue==0)
			return "-";
		$N = new \MVC\Library\Number($this->CCValue);
		return $N->formatCurrency();
	}
	
	function setRateValue( $RateValue ) {$this->RateValue = $RateValue; $this->markDirty();}
	function getRateValue( ) {return $this->RateValue;}
	function getRateValuePrint(){
		if ($this->RateValue==0)
			return "-";
		$N = new \MVC\Library\Number($this->RateValue);
		return $N->formatCurrency();
	}
	function getRateValuePrint1(){		
		$N = new \MVC\Library\Number($this->RateValue);
		return $N->formatCurrency();
	}
	
	function setDebtValue( $DebtValue ) {$this->DebtValue = $DebtValue; $this->markDirty();}
	function getDebtValue( ) {return $this->OEValue + $this->RateValue;}
	function getDebtValuePrint(){
		if ($this->DebtValue==0)
			return "-";
		$N = new \MVC\Library\Number($this->getDebtValue());
		return $N->formatCurrency();
	}
	function getDebtValuePrint1(){		
		$N = new \MVC\Library\Number($this->getDebtValue());
		return $N->formatCurrency();
	}
	function getDebtValueStrPrint(){
		$N = new \MVC\Library\Number($this->getDebtValue());
		return $N->readDigit();
	}
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}
?>
