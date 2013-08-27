<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Tag extends Object{
    private $Id;
	private $Name;
		
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null) {
        $this->Id = $Id;
		$this->Name = $Name;
		
	    parent::__construct( $Id );
    }
    function getId() {return $this->Id;}			
    function setName( $Name ) {$this->Name = $Name;$this->markDirty();}   
	function getName( ) {return $this->Name;}
		
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	function getR2TAll(){
		$mR2T = new \MVC\Mapper\R2T();
		$R2TAll = $mR2T->findByTag( array($this->getId()) );
		return $R2TAll;
	}	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLResource(){return "/setting/tag/".$this->getId()."/resource";}
	function getURLUpdLoad(){return "/setting/tag/".$this->getId()."/upd/load";}
	function getURLUpdExe(){return "/setting/tag/".$this->getId()."/upd/exe";}
	
	function getURLDelLoad(){return "/setting/tag/".$this->getId()."/del/load";}
	function getURLDelExe(){return "/setting/tag/".$this->getId()."/del/exe";}
			
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}

?>
