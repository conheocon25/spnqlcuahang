<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class SupplierDomain extends Object{
    private $Id;
	private $IdSupplier;
	private $IdDomain;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdSupplier=null, $IdDomain=null) {
        $this->Id 			= $Id;
		$this->IdSupplier 	= $IdSupplier;
		$this->IdDomain 	= $IdDomain;
		
	    parent::__construct( $Id );
    }
    function getId() {return $this->Id;}
	
    function setIdSupplier( $IdSupplier ) {$this->IdSupplier = $IdSupplier;$this->markDirty();}   
	function getIdSupplier( ) {return $this->IdSupplier;}
	function getSupplier( ) {
		$mSupplier 	= new \MVC\Mapper\Supplier();
		$Supplier 	= $mSupplier->find($this->IdSupplier);
		return $Supplier;
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
			'IdSupplier'	=> $this->getIdSupplier(),
			'IdDomain'		=> $this->getIdDomain()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->IdSupplier 	= $Data[1];
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
