<?php 
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Save extends Object{
	//-------------------------------------------------------------------------------
	//DEFINE PROPERTY
	//-------------------------------------------------------------------------------
	private $Id;
	private $Name;
	private $Date1;
	private $Date2;
	private $Key;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
	function __construct($Id=null, $Name=null, $Date1=null, $Date2=null, $Key=null) {
		$this->Id 		= $Id;
		$this->Name 	= $Name;
		$this->Date1 	= $Date1;
		$this->Date2 	= $Date2;
		$this->Key 		= $Key;
		parent::__construct( $Id );
	}
		
	function getId() {return $this->Id;}
	
	function setName($Name) {$this->Name = $Name;$this->markDirty();}
	function getName() 		{return $this->Name;}
	
	function setDate1($Date1) {$this->Date1 = $Date1;$this->markDirty();}
	function getDate1() 		{return $this->Date1;}
	
	function setDate2($Date2){$this->Date2 = $Date2;$this->markDirty();}
	function getDate2() 	{return $this->Date2;}
	
	function setKey($Key)	{$this->Key = $Key;$this->markDirty();}
	function getKey() 		{return $this->Key;}
	function reKey( ) {
		$Str = new \MVC\Library\String($this->Name);
		$this->Key = $Str->converturl();
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'Name'			=> $this->getName(),
			'Date1'			=> $this->getDate1(),			
			'Date2'			=> $this->getDate2(),
			'Key'			=> $this->getKey()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 		= $Data[0];
		$this->Name 	= $Data[1];
		$this->Date1 	= $Data[2];
		$this->Date2	= $Data[3];
		$this->reKey();
    }
	
	//-------------------------------------------------------------------------------
	//GET LIST
	//-------------------------------------------------------------------------------		
	function getSRAll(){
		$mSR 	= new \MVC\Mapper\SaveResource();
		$SRAll 	= $mSR->findBy(array($this->Id));
		return $SRAll;
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLAdmin(){
		return "/admin/saving/".$this->getId();
	}
	
	//-------------------------------------------------------------------------------
	static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
	static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	//-------------------------------------------------------------------------------
	
}
?>