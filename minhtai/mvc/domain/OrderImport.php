<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
use MVC\Library\Number;
use MVC\Library\Date;

class OrderImport extends Object{

    private $Id;
	private $IdSupplier;
	private $IdStore;
	private $Date;
    private $Note;
	
	private $Supplier;
	private $Tracks;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdSupplier=null, $IdStore=null, $Date=null, $Note=null) {
        $this->Id = $Id;
		$this->IdSupplier = $IdSupplier;
		$this->IdStore = $IdStore;
		$this->Date = $Date;
		$this->Note = $Note;
        parent::__construct( $Id );
    }
    function getId( ) {
        return $this->Id;
    }
	
	 function getIdPrint( ) {
        return "o".$this->Id;
    }

	//Thông tin nhà cung cấp
    function setIdSupplier( $IdSupplier ) {
        $this->IdSupplier = $IdSupplier;
        $this->markDirty();
    }
    function getIdSupplier( ) {
        return $this->IdSupplier;
    }
	function getSupplier( ) {
		if ( !isset($this->Supplier) ){
			$mSupplier = new \MVC\Mapper\Supplier();
			$this->Supplier = $mSupplier->find($this->IdSupplier);
		}
        return $this->Supplier;
    }
	
	//Thông tin kho nhập hàng
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
	
	function getDetails(){
		if (!isset($this->Tracks)){			
			$mOId = new \MVC\Mapper\OrderImportDetail();
			$this->Tracks = $mOId->trackBy(array(
				$this->getId(),
				$this->getIdSupplier(),
				$this->getId()
			));			
		}
		return $this->Tracks;
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
	
	function getCurrentImportPage(){		
		$currenPage = @\MVC\Base\SessionRegistry::getCurrentPage();
		if (!isset($currenPage)) $currenPage = 1;	
		return $currenPage;
	}
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------	
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/import/".$this->getIdSupplier()."/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/import/".$this->getIdSupplier()."/".$this->getId()."/upd/exe";
	}
	
	function getURLDelLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/import/".$this->getIdSupplier()."/".$this->getId()."/del/load";
	}
	function getURLDelExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/import/".$this->getIdSupplier()."/".$this->getId()."/del/exe";
	}
	
	function getURLDetail(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		$CurrentPage = @\MVC\Base\SessionRegistry::getCurrentImportPage();
		if (!isset($CurrentPage)) $CurrentPage = 1;	
		return "/".$App."/import/".$this->getIdSupplier()."/page/". $CurrentPage ."/".$this->getId();
	}
	
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>
