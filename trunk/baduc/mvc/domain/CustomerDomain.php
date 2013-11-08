<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class CustomerDomain extends Object{
    private $Id;
	private $IdCustomer;
	private $IdDomain;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdCustomer=null, $IdDomain=null) {
        $this->Id 			= $Id;
		$this->IdCustomer 	= $IdCustomer;
		$this->IdDomain 	= $IdDomain;
		
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
	
	function setIdDomain( $IdDomain ) {$this->IdDomain = $IdDomain;$this->markDirty();}   
	function getIdDomain( ) {return $this->IdDomain;}
	function getDomain( ) {
		$mDomain 	= new \MVC\Mapper\Domain();
		$Domain 	= $mDomain->find($this->IdDomain);
		return $Domain;
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdCustomer'	=> $this->getIdCustomer(),
			'IdDomain'		=> $this->getIdDomain()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->IdCustomer 	= $Data[1];
		$this->IdDomain 	= $Data[2];
    }
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
					
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}

?>
