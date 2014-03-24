<?php 
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Category1 extends Object{
	//-------------------------------------------------------------------------------
	//DEFINE PROPERTY
	//-------------------------------------------------------------------------------
	private $Id;
	private $IdCategory;
	private $Name;
	private $Order;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
	function __construct($Id=null, $IdCategory=null, $Name=null, $Order=null) {
		$this->Id 			= $Id;
		$this->IdCategory 	= $IdCategory;
		$this->Name 		= $Name;
		$this->Order 		= $Order;
		parent::__construct( $Id );
	}
		
	function getId() {return $this->Id;}

	function setIdCategory($IdCategory) {$this->IdCategory = $IdCategory;$this->markDirty();}
	function getIdCategory() 			{return $this->IdCategory;}
	function getCategory(){
		$mCategory = new \MVC\Mapper\Category();
		$Category = $mCategory->find($this->IdCategory);
		return $Category;
	}
	
	function setName($Name) {$this->Name = $Name;$this->markDirty();}
	function getName() 		{return $this->Name;}
	
	function setOrder($Order){$this->Order = $Order;$this->markDirty();}
	function getOrder() 	{return $this->Order;}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdCategory' 	=> $this->getIdCategory(),
			'Name'			=> $this->getName(),
			'Order'			=> $this->getOrder()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];
		$this->IdCategory 	= $Data[1];
		$this->Name 		= $Data[2];
		$this->Order		= $Data[3];
    }
	
	//-------------------------------------------------------------------------------
	//GET LIST
	//-------------------------------------------------------------------------------		
	function getResourceAll(){
		$mResource = new \MVC\Mapper\Resource();
		$ResourceAll = $mResource->findByCategory(array($this->getId()));	
		return $ResourceAll;
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLSettting(){
		return "/setting/Category1/".$this->getId();
	}
		
	function getURLView(){
		return "/san-pham/".$this->getCategory()->getId()."/".$this->getId();
	}
	
	
	//-------------------------------------------------------------------------------
	static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
	static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	//-------------------------------------------------------------------------------
	
}
?>