<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class DateTracking extends Object{

    private $Id;
	private $IdPond;
	private $Date;
    	
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct(
		$Id=null,
		$IdPond=null,
		$Date=null
	) {
        $this->Id = $Id;
		$this->IdPond = $IdPond;
		$this->Date = $Date;
				
        parent::__construct( $Id );
    }
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
    function getId( ) {
        return $this->Id;
    }
				
    function setIdPond( $IdPond ) {
        $this->IdPond = $IdPond;
        $this->markDirty();
    }
    function getIdPond( ) {
        return $this->IdPond;
    }
    		
	function setDate( $Date ) {
        $this->Date = $Date;
        $this->markDirty();
    }
	function getDate( ) {
        return $this->Date;
    }
	function getDatePrint( ){
		$date = new \DateTime($this->Date);
		return $date->format('d/m/Y');
    }
				
	function getPond(){
		$mPond = new \MVC\Mapper\Pond();
		$Pond = $mPond->find($this->IdPond);
		return $Pond;
    }
	
	function getCSSClass(){	
		$Arr = array("ui-block-a", "ui-block-b", "ui-block-c");		
		$D = \date("d", strtotime($this->Date));
		$MM = ($D+1)%2;
		return $Arr[$MM];
	}
	
	//URL XỬ LÝ
	function getURLLogUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/log/".$this->getIdPond()."/upd/load/".$this->getDate();
	}
	function getURLLogUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();		
		return "/".$App."/log/".$this->getIdPond()."/upd/exe";
	}
	
	//URL CHI PHÍ
	function getURLPaidPond(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/paid/pond/".$this->getIdPond()."/".$this->getDate();
	}
	
	//URL XUẤT THỨC ĂN
	function getURLExportPond1(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getIdPond()."/".$this->getDate()."/1";	
	}
	
	//URL XUẤT THUỐC
	function getURLExportPond2(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getIdPond()."/".$this->getDate()."/2";	
	}
	
	//URL NHẬP THỨC ĂN
	function getURLImportPond1(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/import/".$this->getIdPond()."/".$this->getDate()."/1";
	}
	
	//URL NHẬP THUỐC
	function getURLImportPond2(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/import/".$this->getIdPond()."/".$this->getDate()."/2";
	}
	
	/*--------------------------------------------------------------------*/
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
		
}
?>