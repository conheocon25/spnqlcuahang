<?php
namespace MVC\Domain;
use MVC\Library\Number;
require_once( "mvc/base/domain/DomainObject.php" );

class Resource extends Object{

    private $Id;
	private $IdSupplier;
	private $Name;
    private $PriceImport;
	private $PriceExport;
    private $Unit;
	private $Description;
	private $Image;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdSupplier=null, $Name=null, $Unit=null, $PriceImport=null, $PriceExport=null, $Description=null, $Image=null) {
        $this->Id 			= $Id;
		$this->IdSupplier 	= $IdSupplier;
		$this->Name 		= $Name;
		$this->PriceImport	= $PriceImport;
		$this->PriceExport	= $PriceExport;
		$this->Unit 		= $Unit;
		$this->Description 	= $Description;
		$this->Image		= $Image;
		
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
	
	function setPriceImport( $PriceImport ) {$this->PriceImport = $PriceImport;$this->markDirty();}
    function getPriceImport( ) {return $this->PriceImport;}
	function getPriceImportPrint( ) {$num = new Number($this->PriceImport);return $num->formatCurrency()." đ";}
	
	function setPriceExport( $PriceExport ) {$this->PriceExport = $PriceExport;$this->markDirty();}
    function getPriceExport( ) {return $this->PriceExport;}
	function getPriceExportPrint( ) {$num = new Number($this->PriceExport);return $num->formatCurrency()." đ";}
	
	function setUnit( $Unit ) {$this->Unit = $Unit;$this->markDirty();}
    function getUnit( ) {return $this->Unit;}
		
	function getDescription( ) {return $this->Description;}
	function setDescription( $Description ) {$this->Description = $Description;$this->markDirty(); }

	function setImage( $Image ) {$this->Image = $Image; $this->markDirty();}
    function getImage( ) {return $this->Image;}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),	
			'IdSupplier'	=> $this->getIdSupplier(),
			'Name'			=> $this->getName(),			
			'PriceImport'	=> $this->getPriceImport(),
			'PriceExport'	=> $this->getPriceExport(),
			'Unit'			=> $this->getUnit(),
			'Description'	=> $this->getDescription(),
			'Image'			=> $this->getImage()
		);		
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->IdSupplier 	= $Data[1];
		$this->Name 		= $Data[2];
		$this->PriceImport	= $Data[3];
		$this->PriceExport	= $Data[4];
		$this->Unit 		= $Data[5];
		$this->Description 	= $Data[6];
		$this->Image 		= $Data[7];
    }
				
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}

?>