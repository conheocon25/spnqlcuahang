<?php 
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Term extends Object{

	private $Id;
	private $Term;
	private $Paids;
	private $PaidsTop10;

	function __construct($Id=null, $Name=null) {
		$this->Id = $Id;
		$this->Name = $Name;
		parent::__construct( $Id );
	}
		
	function getId() {
		return $this->Id;
	}
	
	function getIdPrint() {
		return "t".$this->Id;
	}
					
	function setName($Name) {
		$this->Name = $Name;
		$this->markDirty();
	}
	function getName() {
		return $this->Name;
	}
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	function getPaids(){
		if (!isset($this->Paids)){
			$mPO = new \MVC\Mapper\PaidOther();
			$this->Paids = $mPO->findBy(array($this->getId()));
		}
		return $this->Paids;
	}
	function getPaidsTop10(){
		if (!isset($this->PaidsTop10)){
			$mPO = new \MVC\Mapper\PaidOther();
			$this->PaidsTop10 = $mPO->findByTop10(array($this->getId()));
		}
		return $this->PaidsTop10;
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/term/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/term/".$this->getId()."/upd/exe";			
	}
	
	function getURLDelLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/term/".$this->getId()."/del/load";						
	}
	function getURLDelExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/term/".$this->getId()."/del/exe";
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL PAID.SUPPLIER
	//-------------------------------------------------------------------------------	
	function getURLPaid(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/paid/other#".$this->getIdPrint();
	}
	function getURLPaidInsLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/paid/other/".$this->getId()."/ins/load";
	}
	function getURLPaidInsExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/paid/other/".$this->getId()."/ins/exe";
	}
	//-----------------------------------------------

	static function findAll() {
		$finder = self::getFinder( __CLASS__ ); 
		return $finder->findAll();
	}
	static function find( $Id ) {
		$finder = self::getFinder( __CLASS__ ); 
		return $finder->find( $Id );
	}
	//-----------------------------------------------
	
}
?>
