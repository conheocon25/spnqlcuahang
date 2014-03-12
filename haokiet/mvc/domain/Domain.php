<?php 
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Domain extends Object{
	//-------------------------------------------------------------------------------
	//DEFINE PROPERTY
	//-------------------------------------------------------------------------------
	private $Id;
	private $Name;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
	function __construct($Id=null, $Name=null) {
		$this->Id = $Id;
		$this->Name = $Name;
		parent::__construct( $Id );
	}
		
	function getId() {return $this->Id;}
		
	function setName($Name) {$this->Name = $Name;$this->markDirty();}
	function getName() {return $this->Name;}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'Name'			=> $this->getName()	
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id = $Data[0];	
		$this->Name = $Data[1];
    }
	
	//-------------------------------------------------------------------------------
	//GET LIST
	//-------------------------------------------------------------------------------		
	function getCustomerAll(){		
		$mCustomer 		= new \MVC\Mapper\Customer();
		$CustomerAll 	= $mCustomer->findByDomain(array($this->getId()));
		return $CustomerAll;
	}
					
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLCustomer(){	return "/setting/domain/".$this->getId();}			
	function getURLSelling(){	return "/selling/".$this->getId();}			
	
	//-------------------------------------------------------------------------------
	static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
	static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	//-------------------------------------------------------------------------------
	
}
?>