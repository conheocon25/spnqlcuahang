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
        	
		$this->Id = $Id;
		$this->IdSupplier = $IdSupplier;
		$this->Name = $Name;
		$this->IdCategory = $IdCategory;
		$this->IdUnit = $IdUnit;
		$this->Size = $Size;
		$this->Price1 = $Price1;
		$this->Price2 = $Price2;
		$this->Note = $Note;
	
        parent::__construct( $Id );
    }
    function getId( ) {
        return $this->Id;
    }
	function getIdPrint( ) {
        return "r".$this->Id;
    }
			
	function setIdSupplier( $IdSupplier ) {
        $this->IdSupplier = $IdSupplier;
        $this->markDirty();
    }
	function getIdSupplier( ) {
        return $this->IdSupplier;
    }
	function getSupplier( ) {
		if (!isset($this->Supplier)){
			$mSupplier = new \MVC\Mapper\Supplier();
			$this->Supplier = $mSupplier->find($this->getIdSupplier());
		}
        return $this->Supplier;
    }
	
	function getResourceName( ) {		
		if (!isset($this->Id)){
			$mResource = new \MVC\Mapper\Resource();
			$Resource = $mResource->find($this->getId());
			return $Resource->getName();
		}
		return "";
    }    
    function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName( ) {
        return $this->Name;
    }
	
	function setPrice1( $Price1 ) {
        $this->Price1= $Price1;
        $this->markDirty();
    }
    function getPrice1( ) {
        return $this->Price1;
    }
	function getPrice1Print(){
		$N = new \MVC\Library\Number($this->Price1);
        return $N->formatCurrency();
    }
	
	function setPrice2( $Price2 ){
        $this->Price2= $Price2;
        $this->markDirty();
    }
    function getPrice2(){
        return $this->Price2;
    }
	function getPrice2Print(){
		$N = new \MVC\Library\Number($this->Price2);
        return $N->formatCurrency();
    }
	
	function setIdCategory( $IdCategory ) {
        $this->IdCategory= $IdCategory;
        $this->markDirty();
    }
    function getIdCategory( ) {
        return $this->IdCategory;
    }
	function getCategory( ) {
		if (!isset($this->Category)){
			$mCategory = new \MVC\Mapper\Category();
			$this->Category = $mCategory->find($this->getIdCategory()); 
		}
        return $this->Category;
    }
	
	function setIdUnit( $IdUnit ) {
        $this->IdUnit = $IdUnit;
        $this->markDirty();
    }
    function getIdUnit( ){
        return $this->IdUnit;
    }
	function getUnit( ) {
		if (!isset($this->Unit)){
			$mUnit = new \MVC\Mapper\Unit();
			$this->Unit = $mUnit->find($this->getIdUnit());
		}
        return $this->Unit;
    }
	
	function setSize( $Size ) {
        $this->Size = $Size;
        $this->markDirty();
    }
    function getSize( ){
        return $this->Size;
    }
	function getSizePrint( ) {
		if (!isset($this->Unit)){
			return $this->Size;
		}
		return 0;
	}		
	function getNote( ) {
        return $this->Note;
    }
	function setNote( $Note ) {
        $this->Note = $Note;
        $this->markDirty();
    }

	function getCountImport(){
		$Session = \MVC\Base\SessionRegistry::instance();
		$IdStore = $Session->getCurrentStore();
		
		$mResource = new \MVC\Mapper\Resource();
		$Count = $mResource->countImport(array($IdStore,$this->getId()));
		if($Count > 0) {
			return $Count;
		} else {
			return 0;
		}		
	}
	
	function getCountExport(){
		$Session = \MVC\Base\SessionRegistry::instance();
		$IdStore = $Session->getCurrentStore();
		
		$mResource = new \MVC\Mapper\Resource();
		$Count = $mResource->countExport(array($IdStore,$this->getId()));
		if($Count > 0) {
			return $Count;
		} else {
			return 0;
		}
	}
	
	function getCountInit(){
		$Session = \MVC\Base\SessionRegistry::instance();
		$IdStore = $Session->getCurrentStore();
		
		$mSD = new \MVC\Mapper\StoreDetail();
		$Count = $mSD->initValue(array($IdStore, $this->getId()));
		if($Count > 0) {
			return $Count;
		} else {
			return 0;
		}
	}
	function getCountRemain(){
		$Value =  ($this->getCountInit() + $this->getCountImport()) - $this->getCountExport();
		return $Value;
	}
	function getTotalRemain(){
		$Value =  ($this->getCountInit() + $this->getIdCategory()) - $this->getIdUnit();
		return $Value;
	}
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------		
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/upd/exe";
	}
	
	function getURLDelLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/del/load";
	}
	function getURLDelExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/del/exe";
	}
			
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $id );}
}

?>
