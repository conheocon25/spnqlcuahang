<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
use MVC\Library\Number;
use MVC\Library\Date;

class OrderExport extends Object{

    private $Id;
	private $IdPond;
	private $IdStore;
	private $Date;
    private $Note;
	
	private $Pond;
	private $Details;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdPond=null, $IdStore=null, $Date=null, $Note=null) {
        $this->Id = $Id;
		$this->IdPond = $IdPond;
		$this->IdStore = $IdStore;
		$this->Date = $Date;
		$this->Note = $Note;
        parent::__construct( $Id );
    }
	
	function setId( $Id ) {
        $this->Id = $Id;
    }
    function getId( ) {
        return $this->Id;
    }
	
	 function getIdPrint( ) {
        return "o".$this->Id;
    }

	//Thông tin AO
    function setIdPond( $IdPond ) {
        $this->IdPond = $IdPond;
        $this->markDirty();
    }
    function getIdPond( ) {
        return $this->IdPond;
    }
	function getPond( ) {
		if ( !isset($this->Pond) ){
			$mPond = new \MVC\Mapper\Pond();
			$this->Pond = $mPond->find($this->IdPond);
		}
        return $this->Pond;
    }
	
	//Thông tin KHO NHẬP
	function setIdStore( $IdStore ) {
        $this->IdStore = $IdStore;
        $this->markDirty();
    }
    function getIdStore( ) {
        return $this->IdStore;
    }
	function getStore( ) {
		if ( !isset($this->Store) ){
			$mStore = new \MVC\Mapper\Store();
			$this->Store = $mStore->find($this->IdStore);
		}
        return $this->Store;
    }
	
	//Thông tin ngày nhập hàng
	function getDate( ) {
        return $this->Date;
    }
    function setDate( $Date ) {
        $this->Date = $Date;
        $this->markDirty();
    }
	function getDatePrint( ) {
		$Date = new Date($this->Date);		
        return $Date->getDateFormat();
    }
	
		
	function getNote( ) {
        return $this->Note;
    }
	function setNote( $Note ) {
        $this->Note = $Note;
        $this->markDirty();
    }
	
	//Giá trị đơn hàng
	function getDetails(){
		if (!isset($this->Details)){
			$mOId = new \MVC\Mapper\OrderExportDetail();
			$this->Details = $mOId->findBy(array($this->getId()));
		}
		return $this->Details;
	}
	
	function getValue(){
		$Details = $this->getDetails();
		$Sum = 0;
		$Details->rewind();
		while ($Details->valid()){
			$Sum += $Details->current()->getValue();
			$Details->next();
		}						
		return $Sum;
	}
	
	function getValuePrint(){
		$Value = new Number($this->getValue());
		return $Value->formatCurrency()." đ";
	}
	
	function getValueStrPrint(){
		$Value = new Number($this->getValue());
		return $Value->readDigit()." đồng";
	}
	
	//Số lượng đơn hàng		
	function getCount(){
		$Details = $this->getDetails();
		$Sum = 0;
		$Details->rewind();
		while ($Details->valid()){
			$Sum += $Details->current()->getCount();
			$Details->next();
		}						
		return $Sum;
	}
	
	function getCountPrint(){
		$Value = new Number($this->getCount());
		return $Value->formatCurrency()." kg";
	}
	
	function getCount1Print(){
		$Value = new Number($this->getCount()/1000);
		return $Value->formatCurrency()." tấn";
	}
	function getType(){
		if ( $this->Note == "TA" )
			return 1;
		else	
			return 2;
	}
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------	
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getIdPond()."/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getIdPond()."/".$this->getId()."/upd/exe";
	}
	
	function getURLDelLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getIdPond()."/".$this->getId()."/del/load";
	}
	function getURLDelExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getIdPond()."/".$this->getId()."/del/exe";
	}
	
	function getURLDetail(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getIdPond()."#".$this->getIdPrint();
	}
	
	function getURLCallLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getIdPond()."/".$this->getId()."/call/load";
	}
	
	function getURLCallExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/export/".$this->getIdPond()."/".$this->getId()."/call/exe";
	}
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>
