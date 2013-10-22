<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class TagSelected extends Object{
    private $Id;
	private $IdTag;
		
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdTag=null) {
        $this->Id = $Id;
		$this->IdTag = $IdTag;
		
	    parent::__construct( $Id );
    }
    function getId() {return $this->Id;}			
    function setIdTag( $IdTag ) {$this->IdTag = $IdTag;$this->markDirty();}   
	function getIdTag( ) {return $this->IdTag;}
	function getTag( ) {
		$mTag = new \MVC\Mapper\Tag();
		$Tag = $mTag->find($this->IdTag);
		return $Tag;
	}	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLCallLoad(){return "/selling/call/load/".$this->getId();}
	function getURLCallExe(){return "/selling/call/exe/".$this->getId();}
	
	function getURLUpdLoad(){return "/setting/tagselected/".$this->getId()."/upd/load";}
	function getURLUpdExe(){return "/setting/tagselected/".$this->getId()."/upd/exe";}
	
	function getURLDelLoad(){return "/setting/tagselected/".$this->getId()."/del/load";}
	function getURLDelExe(){return "/setting/tagselected/".$this->getId()."/del/exe";}
			
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>