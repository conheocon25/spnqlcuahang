<?php
namespace MVC\Domain;
use MVC\Library\Number;
require_once( "mvc/base/domain/DomainObject.php" );

class Resource extends Object{

    private $Id;
	private $IdSupplier;
	private $Name;
    private $Price1;
	private $Price2;
    private $Unit;
	private $Description;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdSupplier=null, $Name=null, $Unit=null, $Price1=null, $Price2=null, $Description=null) {
        $this->Id = $Id;
		$this->IdSupplier 	= $IdSupplier;
		$this->Name 		= $Name;
		$this->Price1 		= $Price1;
		$this->Price2 		= $Price2;
		$this->Unit 		= $Unit;
		$this->Description 	= $Description;
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
			
	function getIdSupplier( ) {return $this->IdSupplier;}
    function setIdSupplier( $supplier ) {$this->IdSupplier = $supplier;$this->markDirty();}
	function getSupplier(){
		$mSupplier = new \MVC\Mapper\Supplier();
		$Supplier = $mSupplier->find( $this->getIdSupplier() );
		return $Supplier;
	}
	
    function setName( $Name ) {$this->Name = $Name;$this->markDirty();}
    function getName( ) {return $this->Name;}
	
	function setPrice1( $Price1 ) {$this->Price1 = $Price1;$this->markDirty();}
    function getPrice1( ) {return $this->Price1;}
	function getPrice1Print( ) {$num = new Number($this->Price1);return $num->formatCurrency();}
	
	function setPrice2( $Price2 ) {$this->Price2 = $Price2;$this->markDirty();}
    function getPrice2( ) {return $this->Price2;}
	function getPrice2Print( ) {$num = new Number($this->Price2);return $num->formatCurrency();}
	
	function setUnit( $Unit ) {$this->Unit = $Unit;$this->markDirty();}
    function getUnit( ) {return $this->Unit;}
		
	function getDescription( ) {return $this->Description;}
	function setDescription( $Description ) {$this->Description = $Description;$this->markDirty(); }
		
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),	
			'IdSupplier'	=> $this->getIdSupplier(),
			'Name'			=> $this->getName(),			
			'Price1'		=> $this->getPrice1(),
			'Price2'		=> $this->getPrice2(),
			'Unit'			=> $this->getUnit(),
			'Description'	=> $this->getDescription()
		);		
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->IdSupplier 	= $Data[1];
		$this->Name 		= $Data[2];
		$this->Price1 		= $Data[3];
		$this->Price2 		= $Data[4];
		$this->Unit 		= $Data[5];
		$this->Description 	= $Data[6];
    }
				
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}

?>