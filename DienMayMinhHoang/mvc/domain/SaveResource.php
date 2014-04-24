<?php 
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class SaveResource extends Object{
	//-------------------------------------------------------------------------------
	//DEFINE PROPERTY
	//-------------------------------------------------------------------------------
	private $Id;
	private $IdSave;
	private $IdResource;
	private $Discount;
	private $Value;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
	function __construct($Id=null, $IdSave=null, $IdResource=null, $Discount=null, $Value=null){
		$this->Id 		= $Id;
		$this->IdSave 	= $IdSave;
		$this->IdResource 	= $IdResource;
		$this->Discount 	= $Discount;
		$this->Value 		= $Value;
		parent::__construct( $Id );
	}
		
	function getId() {return $this->Id;}
	
	function setIdSave($IdSave) {$this->IdSave = $IdSave;$this->markDirty();}
	function getIdSave() 		{return $this->IdSave;}
	function getSave(){
		$mSave 	= new \MVC\Mapper\Save();
		$Save 	= $mSave->find($this->IdSave);
		return $Save;
	}
	
	function setIdResource($IdResource) {$this->IdResource = $IdResource;$this->markDirty();}
	function getIdResource() 			{return $this->IdResource;}
	function getResource(){
		$mProduct	= new \MVC\Mapper\Product();
		$Product 	= $mProduct->find($this->IdResource);
		return $Product;		
	}
	
	function setDiscount($Discount){$this->Discount = $Discount;$this->markDirty();}
	function getDiscount() 	{return $this->Discount;}
	
	function setValue($Value)	{$this->Value = $Value;$this->markDirty();}
	function getValue() 		{return $this->Value;}
	function reValue( ) {
		$Str = new \MVC\Library\String($this->IdSave);
		$this->Value = $Str->converturl();
	}
	
	function getPriceSaving(){
		return (100-$this->Discount)*$this->getResource()->getPrice2()/100;
	}
	function getPriceSavingPrint(){
		$N = new \MVC\Library\Number($this->getPriceSaving());		
		return $N->formatCurrency();
	}
	
	function getPriceSaving1(){
		return ($this->Discount)*$this->getResource()->getPrice2()/100;
	}
	function getPriceSaving1Print(){
		$N = new \MVC\Library\Number($this->getPriceSaving1());
		return $N->formatCurrency();
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdSave'		=> $this->getIdSave(),
			'IdResource'	=> $this->getIdResource(),			
			'Discount'		=> $this->getDiscount(),
			'Value'			=> $this->getValue()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->IdSave 		= $Data[1];
		$this->IdResource 	= $Data[2];
		$this->Discount		= $Data[3];
		$this->Value		= $Data[4];		
    }
	
	//-------------------------------------------------------------------------------
	//GET LIST
	//-------------------------------------------------------------------------------		
	
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
		
	//-------------------------------------------------------------------------------
	static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
	static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	//-------------------------------------------------------------------------------
	
}
?>