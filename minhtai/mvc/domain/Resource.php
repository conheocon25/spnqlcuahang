<?php
namespace MVC\Domain;
use MVC\Library\Number;
require_once( "mvc/base/domain/DomainObject.php" );

class Resource extends Object{
    private $Id;
	private $IdSupplier;
	private $Name;
	private $IdCategory;
    private $IdUnit;
	private $Size;
	private $Price1;
	private $Price2;
	private $Note;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id=null,
		$IdSupplier=null, 
		$Name=null, 
		$IdCategory=null, 
		$IdUnit=null, 
		$Size=null, 
		$Price1=null, 
		$Price2=null,
		$Note=null) {
        	
		$this->Id 			= $Id;
		$this->IdSupplier 	= $IdSupplier;
		$this->Name 		= $Name;
		$this->IdCategory 	= $IdCategory;
		$this->IdUnit 		= $IdUnit;
		$this->Size 		= $Size;
		$this->Price1 		= $Price1;
		$this->Price2 		= $Price2;
		$this->Note 		= $Note;
	
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
	
	function setIdSupplier( $IdSupplier ) {$this->IdSupplier = $IdSupplier;$this->markDirty();}
	function getIdSupplier( ) {return $this->IdSupplier;}
	function getSupplier( ) {	
		$mSupplier = new \MVC\Mapper\Supplier();
		$Supplier = $mSupplier->find($this->getIdSupplier());		
        return $Supplier;
    }
		
    function setName( $Name ) {$this->Name = $Name;$this->markDirty();}
    function getName( ) {return $this->Name;}
	
	function setPrice1( $Price1 ) {$this->Price1= $Price1;$this->markDirty();}
    function getPrice1( ) {return $this->Price1;}
	function getPrice1Print(){$N = new \MVC\Library\Number($this->Price1);return $N->formatCurrency();}
	
	function setPrice2( $Price2 ){$this->Price2= $Price2;$this->markDirty();}
    function getPrice2(){return $this->Price2;}
	function getPrice2Print(){$N = new \MVC\Library\Number($this->Price2);return $N->formatCurrency();}
	
	function setIdCategory( $IdCategory ) {$this->IdCategory= $IdCategory;$this->markDirty();}
    function getIdCategory( ) {return $this->IdCategory;}
	function getCategory( ) {		
		$mCategory = new \MVC\Mapper\Category();
		$Category = $mCategory->find($this->getIdCategory()); 		
        return $Category;
    }
	
	function setIdUnit( $IdUnit ) {$this->IdUnit = $IdUnit;$this->markDirty();}
    function getIdUnit( ){return $this->IdUnit;}
	function getUnit( ) {		
		$mUnit = new \MVC\Mapper\Unit();
		$Unit = $mUnit->find($this->getIdUnit());		
        return $Unit;
    }
	
	function setSize( $Size ) {$this->Size = $Size;$this->markDirty();}
    function getSize( ){return $this->Size;}
	function getSizePrint( ) {
		if (!isset($this->Unit)){
			return $this->Size;
		}
		return 0;
	}		
	function getNote( ) {return $this->Note;}
	function setNote( $Note ) {$this->Note = $Note;$this->markDirty();}
	
	public function toJSON(){
		$json = array(
			'Id' 		=> $this->getId(),
			'IdSupplier'=> $this->getIdSupplier(),
			'Name' 		=> $this->getName(),
			'IdCategory'=> $this->getIdCategory(),
			'IdUnit'	=> $this->getIdUnit(),
			'Size'		=> $this->getSize(),
			'Price1'	=> $this->getPrice1(),
			'Price2'	=> $this->getPrice2(),
			'Note' 		=> $this->getNote()
		);				
		return json_encode($json);
	}
	
	function setArray( $Data ){        		
		$this->Id 			= $Data[0];
		$this->IdSupplier 	= $Data[1];
		$this->Name 		= $Data[2];
		$this->IdCategory 	= $Data[3];
		$this->IdUnit 		= $Data[4];
		$this->Size 		= $Data[5];
		$this->Price1 		= $Data[6];
		$this->Price2 		= $Data[7];
		$this->Note 		= $Data[8];
    }
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------		
	
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $id );}
}

?>
