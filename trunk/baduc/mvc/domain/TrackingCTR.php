<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class TrackingCTR extends Object{

    private $Id;
	private $IdCT;
	private $IdTracking;
	private $Date;
	private $DateLimit;
	private $Value;
	private $nDay;
	private $Rate;
	private $RateValue;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$IdCT=null, 
		$IdTracking=null, 
		$Date=null,
		$DateLimit=null,
		$Value=null, 
		$nDay=null, 
		$Rate=null, 
		$RateValue=null
	) {
        $this->Id = $Id;
		$this->IdCT 		= $IdCT;
		$this->IdTracking 	= $IdTracking;
		$this->Date 		= $Date;
		$this->DateLimit 	= $DateLimit;
		$this->Value 		= $Value;
		$this->nDay 		= $nDay;
		$this->Rate 		= $Rate;
		$this->RateValue 	= $RateValue;
		
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
	
	function setIdTracking( $IdTracking ) {$this->IdTracking = $IdTracking;$this->markDirty();}
	function getIdTracking( ) {return $this->IdTracking;}
	function getTracking( ) {
		$mTracking 	= new \MVC\Mapper\Tracking();
		$Tracking 	= $mTracking->find( $this->getIdTracking() );
		return $Tracking;
	}
	
	function setDate( $Date ) {$this->Date = $Date; $this->markDirty();}
	function getDate( ) {return $this->Date;}
	function getDatePrint(){		
		return \date("d/m/Y", strtotime($this->Date));
	}
	
	function setDateLimit( $DateLimit ) {$this->DateLimit = $DateLimit; $this->markDirty();}
	function getDateLimit( ) {return $this->DateLimit;}
	function getDateLimitPrint(){		
		return \date("d/m/Y", strtotime($this->DateLimit));
	}
	
	function getDateRange(){
		$D1 = \date("d/m", strtotime($this->DateLimit) + (24*3600) );
		$D2 = \date("d/m", strtotime($this->DateLimit) + (24*3600*$this->nDay) );
		return $D1."->".$D2;
	}
	
	function setValue( $Value ) {$this->Value = $Value; $this->markDirty();}
	function getValue( ) {return $this->Value;}
	function getValuePrint(){
		$N = new \MVC\Library\Number($this->Value);
		return $N->formatCurrency();
	}
		
	function setnDay( $nDay ) {$this->nDay = $nDay; $this->markDirty();}
	function getnDay( ) {return $this->nDay;}
	function getnDayPrint(){
		$N = new \MVC\Library\Number($this->nDay);
		return $N->formatCurrency();
	}
	
	function setRate( $Rate ) {$this->Rate = $Rate; $this->markDirty();}
	function getRate( ) {return $this->Rate;}
	function getRatePrint(){		
		return $this->Rate."%";
	}
	
	function setRateValue( $RateValue ) {$this->RateValue = $RateValue; $this->markDirty();}
	function getRateValue( ) {
		return round(($this->Rate*$this->getnDay()*$this->Value)/100,0);
	}
	function getRateValuePrint(){
		$N = new \MVC\Library\Number($this->getRateValue());
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
