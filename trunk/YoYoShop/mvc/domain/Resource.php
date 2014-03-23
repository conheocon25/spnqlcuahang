<?php
namespace MVC\Domain;
use MVC\Library\Number;
require_once( "mvc/base/domain/DomainObject.php" );

class Resource extends Object{

    private $Id;
	private $IdSupplier;
	private $IdCategory;	
	private $Name;
	private $Code;
    private $Price1;
	private $Price2;
	private $MadeIn;
	private $MadeBy;
	private $Type;
	private $Style;
	private $Canvas;
	private $Note;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$IdSupplier=null, 
		$IdCategory=null,
		$Name=null, 
		$Code=null, 
		$Price1=null, 
		$Price2=null, 
		$MadeIn=null, 
		$MadeBy=null, 
		$Type=null, 
		$Style=null, 
		$Canvas=null, 
		$Note=null)
	{
        		
		$this->Id			= $Id;
		$this->IdSupplier	= $IdSupplier;
		$this->IdCategory	= $IdCategory;	
		$this->Name			= $Name;
		$this->Code			= $Code;
		$this->Price1		= $Price1;
		$this->Price2		= $Price2;
		$this->MadeIn		= $MadeIn;
		$this->MadeBy		= $MadeBy;
		$this->Type			= $Type;
		$this->Style		= $Style;
		$this->Canvas		= $Canvas;
		$this->Note			= $Note;
	
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
	
	function getIdCategory( ) {return $this->IdCategory;}
    function setIdCategory( $IdCategory ) {$this->IdCategory = $IdCategory;$this->markDirty();}
	function getCategory(){
		$mCategory = new \MVC\Mapper\Category1();
		$Category = $mCategory->find( $this->IdCategory );
		return $Category;
	}
	
    function setName( $Name ) {$this->Name = $Name;$this->markDirty();}
    function getName( ) {return $this->Name;}
	
	function setCode( $Code ) {$this->Code = $Code;$this->markDirty();}
    function getCode( ) {return $this->Code;}
	
	function setPrice1( $Price1 ) {$this->Price1 = $Price1; $this->markDirty();}
    function getPrice1( ) {return $this->Price1;}
	function getPrice1Print( ) {$num = new Number($this->Price1);return $num->formatCurrency();}
		
	function setPrice2( $Price2 ) {$this->Price2 = $Price2; $this->markDirty();}
    function getPrice2( ) {return $this->Price2;}
	function getPrice2Print( ) {$num = new Number($this->Price2);return $num->formatCurrency();}
	
	function getMadeIn( ) {return $this->MadeIn;}
	function setMadeIn( $MadeIn ) {$this->MadeIn = $MadeIn;$this->markDirty(); }
	
	function getMadeBy( ) {return $this->MadeBy;}
	function setMadeBy( $MadeBy ) {$this->MadeBy = $MadeBy;$this->markDirty(); }
	
	function getType( ) {return $this->Type;}
	function setType( $Type ) {$this->Type = $Type; $this->markDirty(); }
	
	function getStyle( ) {return $this->Style;}
	function setStyle( $Style ) {$this->Style = $Style;$this->markDirty(); }
	
	function getCanvas( ) {return $this->Canvas;}
	function setCanvas( $Canvas ) {$this->Canvas = $Canvas;$this->markDirty(); }
	
	function getNote( ) {return $this->Note;}
	function setNote( $Note ) {$this->Note = $Note;$this->markDirty(); }
		
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),	
			'IdSupplier'	=> $this->getIdSupplier(),
			'IdCategory'	=> $this->getIdCategory(),
			'Name'			=> $this->getName(),			
			'Code'			=> $this->getCode(),
			'Price1'		=> $this->getPrice1(),
			'Price2'		=> $this->getPrice2(),
			'MadeIn'		=> $this->getMadeIn(),
			'MadeBy'		=> $this->getMadeBy(),
			'Type'			=> $this->getType(),
			'Style'			=> $this->getStyle(),
			'Canvas'		=> $this->getCanvas(),
			'Note'			=> $this->getNote()
		);		
		return json_encode($json);
	}
	
	function setArray( $Data ){
        	
		$this->Id			= $Data[0];
		$this->IdSupplier	= $Data[1];
		$this->IdCategory	= $Data[2];	
		$this->Name			= $Data[3];
		$this->Code			= $Data[4];
		$this->Price1		= $Data[5];
		$this->Price2		= $Data[6];
		$this->MadeIn		= $Data[7];
		$this->MadeBy		= $Data[8];
		$this->Type			= $Data[9];
		$this->Style		= $Data[10];
		$this->Canvas		= $Data[11];
		$this->Note			= $Data[12];
    }
	
	function getImageAll(){
		$mImage = new \MVC\Mapper\Image();
		$ImageAll = $mImage->findBy(array($this->getId()));
		return $ImageAll;
	}
	
	function getURLSettingImage(){
		return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/image";
	}
	
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}

?>