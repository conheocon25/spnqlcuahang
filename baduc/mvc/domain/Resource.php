<?php
namespace MVC\Domain;
use MVC\Library\Number;
require_once( "mvc/base/domain/DomainObject.php" );

class Resource extends Object{

    private $Id;
	private $IdSupplier;
	private $Name;
	private $NameShort;
    private $PriceImport;
	private $PriceExport;
    private $Unit;
	private $Description;
	private $Barcode;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdSupplier=null, $Name=null, $NameShort=null, $Unit=null, $PriceImport=null, $PriceExport=null, $Description=null, $Barcode=null) {
        $this->Id 			= $Id;
		$this->IdSupplier 	= $IdSupplier;
		$this->Name 		= $Name;
		$this->NameShort 	= $NameShort;
		$this->PriceImport 	= $PriceImport;
		$this->PriceExport 	= $PriceExport;
		$this->Unit 		= $Unit;
		$this->Description 	= $Description;
		$this->Barcode 		= $Barcode;
		
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
			
	function getIdSupplier( ) {return $this->IdSupplier;}
    function setIdSupplier( $supplier ) {$this->IdSupplier = $supplier;$this->markDirty();}
	
    function setName( $Name ) {$this->Name = $Name;$this->markDirty();}
    function getName( ) {return $this->Name;}
	
	function setNameShort( $NameShort ) {$this->NameShort = $NameShort;$this->markDirty();}
    function getNameShort( ) {return $this->NameShort;}
	
	function setPriceImport( $PriceImport ) {$this->PriceImport = $PriceImport; $this->markDirty();}
    function getPriceImport( ) {return $this->PriceImport;}
	function getPriceImportPrint( ) {$num = new Number($this->PriceImport);return $num->formatCurrency()." đ";}
	
	function setPriceExport( $PriceExport ) {$this->PriceExport = $PriceExport; $this->markDirty();}
    function getPriceExport( ) {return $this->PriceExport;}
	function getPriceExportPrint( ) {$num = new Number($this->PriceExport);return $num->formatCurrency()." đ";}
	
	function setUnit( $Unit ) {$this->Unit = $Unit;$this->markDirty();}
    function getUnit( ) {return $this->Unit;}
		
	function getDescription( ) {return $this->Description;}
	function setDescription( $Description ) {$this->Description = $Description;$this->markDirty(); }
	
	function setBarcode( $Barcode) {$this->Barcode = $Barcode; $this->markDirty();}
    function getBarcode( ) {return $this->Barcode;}
	
	function checkTag($IdTag){
		$mR2T = new \MVC\Mapper\R2T();
		$result = $mR2T->exist(array($this->getId(), $IdTag));
		return $result>0?true:false;
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),	
			'IdSupplier'	=> $this->getIdSupplier(),
			'Name'			=> $this->getName(),			
			'NameShort'		=> $this->getNameShort(),
			'PriceImport'	=> $this->getPriceImport(),
			'PriceExport'	=> $this->getPriceExport(),
			'Unit'			=> $this->getUnit(),
			'Description'	=> $this->getDescription(),
			'Barcode'		=> $this->getBarcode()
		);		
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->IdSupplier 	= $Data[1];
		$this->Name 		= $Data[2];
		$this->NameShort	= $Data[3];
		$this->PriceImport	= $Data[4];
		$this->PriceExport	= $Data[5];
		$this->Unit 		= $Data[6];
		$this->Description 	= $Data[7];
		$this->Barcode 		= $Data[8];
    }
	
	function getURLSettingTag(){
		return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/tag";
	}
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}

?>