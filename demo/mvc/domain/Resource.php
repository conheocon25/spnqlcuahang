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
	
	function toXML($Doc){
		$Obj = $Doc->createElement( "resource" );
		$Obj->setAttributeNode(new \DOMAttr('id', $this->getId()));
		
		$IdSupplier = $Doc->createElement( "idsupplier" );
		$IdSupplier->appendChild($Doc->createTextNode( $this->getIdSupplier() ));
		
		$Name = $Doc->createElement( "name" );
		$Name->appendChild($Doc->createTextNode( $this->getName() ));
		
		$NameShort = $Doc->createElement( "nameshort" );
		$NameShort->appendChild($Doc->createTextNode( $this->getNameShort() ));
		
		$PriceImport = $Doc->createElement( "priceimport" );
		$PriceImport->appendChild($Doc->createTextNode( $this->getPriceImport() ));
		
		$PriceExport = $Doc->createElement( "priceexport" );
		$PriceExport->appendChild($Doc->createTextNode( $this->getPriceExport() ));
		
		$Unit = $Doc->createElement( "unit" );
		$Unit->appendChild($Doc->createTextNode( $this->getUnit() ));
		
		$Description = $Doc->createElement( "description" );
		$Description->appendChild($Doc->createTextNode( $this->getDescription() ));
		
		$Barcode = $Doc->createElement( "barcode" );
		$Barcode->appendChild($Doc->createTextNode( $this->getBarcode() ));
		
		$Obj->appendChild( $IdSupplier 	);
		$Obj->appendChild( $Name 		);
		$Obj->appendChild( $NameShort	);
		$Obj->appendChild( $PriceImport	);
		$Obj->appendChild( $PriceExport	);
		$Obj->appendChild( $Unit 		);
		$Obj->appendChild( $Description );
		$Obj->appendChild( $Barcode 	);
		
		return $Obj;
	}
				
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}

?>