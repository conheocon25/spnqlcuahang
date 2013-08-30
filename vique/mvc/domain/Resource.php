<?php
Namespace MVC\Domain;
use MVC\Library\Number;
require_once( "mvc/base/domain/DomainObject.php" );

class Resource extends Object{

    private $Id;
	private $IdSupplier;
	private $Name;
	private $NameShort;
    private $PriceImport;
    private $Unit;
	private $Description;
	private $Barcode;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdSupplier=null, $Name=null, $NameShort=null, $Unit=null, $PriceImport=null, $PriceExport=null, $Description=null, $Barcode=null) {
        $this->Id = $Id;
		$this->IdSupplier = $IdSupplier;
		$this->Name = $Name;
		$this->NameShort = $NameShort;
		$this->PriceImport = $PriceImport;
		$this->PriceExport = $PriceExport;
		$this->Unit = $Unit;
		$this->Description = $Description;
		$this->Barcode = $Barcode;
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
			
	function getIdSupplier( ) {return $this->IdSupplier;}
    function setIdSupplier( $Supplier ) {$this->IdSupplier = $Supplier;$this->markDirty();}
	function getSupplier( ) {
		$mSupplier = new \MVC\Mapper\Supplier();		
		$Supplier = $mSupplier->find($this->IdSupplier);
		return $Supplier;
	}
	
    function setName( $Name ) {$this->Name = $Name;$this->markDirty();}
    function getName( ) {return $this->Name;}
	
	function setNameShort( $NameShort ) {$this->NameShort = $NameShort; $this->markDirty();}
    function getNameShort( ) {return $this->NameShort;}
	
	function setPriceImport( $PriceImport ) {$this->PriceImport = $PriceImport;$this->markDirty();}
    function getPriceImport( ) {return $this->PriceImport;}
	function getPriceImportPrint( ) {$num = new Number($this->PriceImport);return $num->formatCurrency()." đ";}
	
	function setPriceExport( $Price ) {$this->PriceExport = $Price;$this->markDirty();}
    function getPriceExport( ) {return $this->PriceExport;}
	function getPriceExportPrint( ) {$num = new Number($this->PriceExport);return $num->formatCurrency()." đ";}
	
	function setUnit( $Unit ) {$this->Unit = $Unit;$this->markDirty();}
    function getUnit( ) {return $this->Unit;}
		
	function getDescription( ) {return $this->Description;}
	function setDescription( $Description ) {$this->Description = $Description;$this->markDirty();}
	
	function setBarcode( $Barcode ) {$this->Barcode = $Barcode;$this->markDirty();}
    function getBarcode( ) {return $this->Barcode;}
	
	//-------------------------------------------------------------------------------
	//GET LIST
	//-------------------------------------------------------------------------------		
	function getTagAll(){
		$mR2T = new \MVC\Mapper\R2T();
		$R2TAll = $mR2T->findByResource( array($this->getId()) );
		return $R2TAll;
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------		
	function getURLBarcodePrint(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/print/barcode";}
	
	function getURLUpdLoad(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/upd/load";}
	function getURLUpdExe(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/upd/exe";}
	
	function getURLDelLoad(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/del/load";}
	function getURLDelExe(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/del/exe";}
	
	function getURLTag(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/tag";}
	function getURLTagInsLoad(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/tag/ins/load";}
	function getURLTagInsExe(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/tag/ins/exe";}
			
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $id );}
	
}
?>