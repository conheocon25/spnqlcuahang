<?php	
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php");

class R2T extends Object{

    private $Id;	
	private $IdResource;
	private $IdTag;

	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdResource=null, $IdTag=null){
        $this->Id = $Id;		
		$this->IdResource = $IdResource;		
		$this->IdTag = $IdTag;
		
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
			
    function setIdResource( $IdResource ) {
        $this->IdResource = $IdResource;
        $this->markDirty();
    }
	function getIdResource( ) {
        return $this->IdResource;
    }
	function getResource( ) {
		$mResource = new \MVC\Mapper\Resource();
		$Resource = $mResource->find($this->IdResource);
        return $Resource;
    }
	
	function setIdTag( $IdTag ) {
        $this->IdTag = $IdTag;
        $this->markDirty();
    }
	function getIdTag( ) {
        return $this->IdTag;
    }
	function getTag( ) {
		$mTag = new \MVC\Mapper\Tag();
		$Tag = $mTag->find($this->IdTag);
        return $Tag;
    }
							
	//-------------------------------------------------------------------------------
	//DEFINE URL SETTING.R2T
	//-------------------------------------------------------------------------------		
	function getURLDelLoad(){
		return "/setting/supplier/".$this->getResource()->getSupplier()->getId()."/".$this->getIdResource()."/tag/".$this->getId()."/del/load";
	}
	function getURLDelExe(){		
		return "/setting/supplier/".$this->getResource()->getSupplier()->getId()."/".$this->getIdResource()."/tag/".$this->getId()."/del/exe";
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL SELLING
	//-------------------------------------------------------------------------------
		
	//----------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ){$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}
?>