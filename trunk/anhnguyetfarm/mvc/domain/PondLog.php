<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class PondLog extends Object{

    private $Id;
	private $IdPond;	
	private $Date;
	private $Count;
		
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $Id=null, $IdPond=null, $Date=Null, $Count=Null){
        $this->Id = $Id;
		$this->IdPond = $IdPond;				
		$this->Date = $Date;
		$this->Count = $Count;
		
        parent::__construct( $Id );
    }
    function getId() {
        return $this->Id;
    }	
	function getIdPrint(){
        return "pl" . $this->getId();
    }	
	
    function setIdPond( $IdPond ) {
        $this->IdPond = $IdPond;
        $this->markDirty();
    }   
	function getIdPond( ) {
        return $this->IdPond;
    }
	function getPond( ) {
		if (!isset($this->Pond)){
			$mPond = new \MVC\Mapper\Pond();
			$this->Pond = $mPond->find($this->getId());
		}
        return $this->Pond;
    }
	
	//Thời gian	
	function setDate( $Date ) {
        $this->Date = $Date;
        $this->markDirty();
    } 
	function getDate( ) {
        return $this->Date;
    }
	function getDatePrint( ) {
		$date = new \DateTime($this->Date);
		return $date->format('d/m/Y');
    }
				
	function setCount( $Count ) {
        $this->Count = $Count;
        $this->markDirty();
    }   
	function getCount( ) {
        return $this->Count;
    }
	function getCountPrint( ) {
		$N = new \MVC\Library\Number($this->Count);
        return $N->formatCurrency()." con";
    }
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------	
	
			
	//-------------------------------------------------------------------------------
	//DEFINE URL LOG.POND
	//-------------------------------------------------------------------------------
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/log/".$this->getIdPond()."/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();		
		return "/".$App."/log/".$this->getIdPond()."/".$this->getId()."/upd/exe";
	}
	
	function getURLDelLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();		
		return "/".$App."/log/".$this->getIdPond()."/".$this->getId()."/del/load";
	}
	function getURLDelExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();		
		return "/".$App."/log/".$this->getIdPond()."/".$this->getId()."/del/exe";
	}
					
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}

?>
