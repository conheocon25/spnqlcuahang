<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class TrackingCT extends Object{

    private $Id;
	private $IdCT;
	private $Date;
	private $OEValue;
	private $PCValue;
	private $CCValue;
	private $DebtValue;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$IdCT=null, 
		$Date=null,
		$OEValue=null, 
		$PCValue=null, 
		$CCValue=null, 
		$DebtValue=null
	) {
        $this->Id = $Id;
		$this->IdCT 		= $IdCT;
		$this->Date 		= $Date;
		$this->OEValue 		= $OEValue;
		$this->PCValue 		= $PCValue;
		$this->CCValue 		= $CCValue;
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
		$N = new \MVC\Library\Number($this->PCValue);
		return $N->formatCurrency();
	}
	
	function setCCValue( $PCValue ) {$this->CCValue = $CCValue; $this->markDirty();}
	function getCCValue( ) {return $this->CCValue;}
	function getCCValuePrint(){
		$N = new \MVC\Library\Number($this->CCValue);
		return $N->formatCurrency();
	}
	
	function setDebtValue( $DebtValue ) {$this->DebtValue = $DebtValue; $this->markDirty();}
	function getDebtValue( ) {return $this->DebtValue;}
	function getDebtValuePrint(){
		$N = new \MVC\Library\Number($this->DebtValue);
		return $N->formatCurrency();
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
