<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class CustomerTracking extends Object{
    private $Id;
	private $IdCustomer;
	private $IdDomain;
	private $DateStart;
	private $DateEnd;
	private $Note;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdCustomer=null, $IdDomain=null, $DateStart=null, $DateEnd=null, $Note=null) {
        $this->Id 			= $Id;
		$this->IdCustomer 	= $IdCustomer;
		$this->IdDomain 	= $IdDomain;
		$this->DateStart 	= $DateStart;
		$this->DateEnd	 	= $DateEnd;
		$this->Note	 		= $Note;
		
	    parent::__construct( $Id );
    }
    function getId() {return $this->Id;}
	
    function setIdCustomer( $IdCustomer ) {$this->IdCustomer = $IdCustomer;$this->markDirty();}   
	function getIdCustomer( ) {return $this->IdCustomer;}
	function getCustomer( ) {
		$mCustomer 	= new \MVC\Mapper\Customer();
		$Customer 	= $mCustomer->find($this->IdCustomer);
		return $Customer;
	}
	
	function setIdDomain( $IdDomain ) {$this->IdDomain = $IdDomain; $this->markDirty();}   
	function getIdDomain( ) {return $this->IdDomain;}
	function getDomain( ) {
		$mDomain 	= new \MVC\Mapper\Domain();
		$Domain 	= $mDomain->find($this->IdDomain);
		return $Domain;
	}
	
	function setDateStart( $DateStart ) {$this->DateStart = $DateStart;$this->markDirty();}   
	function getDateStart( ) {return $this->DateStart;}
	function getDateStartPrint( ) {
		$D = new \MVC\Library\Date($this->DateStart);
		return $D->getDateFormat();
	}
	
	function setDateEnd( $DateEnd ) {$this->DateEnd = $DateEnd; $this->markDirty();}   
	function getDateEnd( ) {return $this->DateEnd;}
	function getDateEndPrint( ) {
		$D = new \MVC\Library\Date($this->DateEnd);
		return $D->getDateFormat();
	}
	function getMonthName(){
		$M = \date("m/Y",strtotime($this->DateEnd));
		return "THÁNG ".$M;
	}
	
	function setNote( $Note ) {$this->Note = $Note; $this->markDirty();}   
	function getNote( ) {return $this->Note;}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdCustomer'	=> $this->getIdCustomer(),
			'IdDomain'		=> $this->getIdDomain(),
			'DateStart'		=> $this->getDateStart(),
			'DateEnd'		=> $this->getDateEnd(),
			'Note'			=> $this->getNote()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->IdCustomer 	= $Data[1];
		$this->IdDomain 	= $Data[2];
		$this->DateStart 	= $Data[3];
		$this->DateEnd 		= $Data[4];
		$this->Note 		= $Data[5];
    }
	
	function getOrderAll(){
		$mOrder 	= new \MVC\Mapper\OrderExport();
		$OrderAll 	= $mOrder->findBy(array( $this->getId() ));
		return $OrderAll;
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLOrder(){return "/export/big/".$this->IdDomain."/".$this->IdCustomer."/".$this->Id;}
	
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}

?>
