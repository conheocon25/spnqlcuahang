<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
use MVC\Library\Number;
use MVC\Library\Date;

class OrderExport extends Object{

    private $Id;
	private $IdCustomer;
	private $IdStore;
	private $Date;
    private $Note;
	
	private $Customer;
	private $Details;
	private $DetailExtras;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdCustomer=null, $IdStore=null, $Date=null, $Note=null) {
        $this->Id = $Id;
		$this->IdCustomer = $IdCustomer;
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
    function setIdCustomer( $IdCustomer ) {
        $this->IdCustomer = $IdCustomer;
        $this->markDirty();
    }
    function getIdCustomer( ) {
        return $this->IdCustomer;
    }
	function getCustomer( ) {
		if ( !isset($this->Customer) ){
			$mCustomer = new \MVC\Mapper\Customer();
			$this->Customer = $mCustomer->find($this->IdCustomer);
		}
        return $this->Customer;
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
	function getDatePrint1(){
		$d = new \DateTime($this->Date);
		return "Vĩnh Long, ngày ".$d->format('d')." tháng ".$d->format('m')." năm ".$d->format('Y');
	}
	
	//-------------------------------------------------------------------------------
	//GET LISTS
	//-------------------------------------------------------------------------------
	
	//Lấy về phần chưa khuyến mãi
	function getDetails(){
		if (!isset($this->Details)){			
			$mOId = new \MVC\Mapper\OrderExportDetail();
			$this->Details = $mOId->findBy(array($this->getId()));
		}
		return $this->Details;
	}
	
	function getValue1(){
		$Details = $this->getDetails();
		$Sum = 0;
		$Details->rewind();
		while ($Details->valid()){
			$Sum += $Details->current()->getValue();
			$Details->next();
		}						
		return $Sum;
	}
	
	function getValue1Print(){
		$Value = new Number($this->getValue1());
		return $Value->formatCurrency()." đ";
	}
	
	function getValue1StrPrint(){
		$Value = new Number($this->getValue1());
		return $Value->readDigit()." đồng";
	}
	
	//Lấy về phần khuyến mãi
	function getDetailExtras(){
		if (!isset($this->DetailExtras)){
			$mODE = new \MVC\Mapper\OrderExportDetailExtra();
			$this->DetailExtras = $mODE->findBy(array($this->getId()));
		}
		return $this->DetailExtras;
	}
	
	function getValue2(){
		$Details = $this->getDetailExtras();
		$Sum = 0;
		$Details->rewind();
		while ($Details->valid()){
			$Sum += $Details->current()->getValue();
			$Details->next();
		}						
		return $Sum;
	}
	
	function getValue2Print(){
		$Value = new Number($this->getValue2());
		return $Value->formatCurrency()." đ";
	}
	
	function getValue2StrPrint(){
		$Value = new Number($this->getValue2());
		return $Value->readDigit()." đồng";
	}
	
	//Giá trị cuối cùng của hóa đơn
	function getValue(){
		$Sum = $this->getValue1() - $this->getValue2();
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
	
	function getCurrentPage(){		
		$currenPage = @\MVC\Base\SessionRegistry::getCurrentPage();
		if (!isset($currenPage)) $currenPage = 1;	
		return $currenPage;
	}
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLPrint(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/".$this->getCustomer()->getType()."/selling/".$this->getIdCustomer()."/".$this->getId()."/print";
	}
	
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/".$this->getCustomer()->getType()."/selling/".$this->getIdCustomer()."/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/".$this->getCustomer()->getType()."/selling/".$this->getIdCustomer()."/".$this->getId()."/upd/exe";
	}
	
	function getURLDelLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/".$this->getCustomer()->getType()."/selling/".$this->getIdCustomer()."/".$this->getId()."/del/load";
	}
	function getURLDelExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/".$this->getCustomer()->getType()."/selling/".$this->getIdCustomer()."/".$this->getId()."/del/exe";
	}
	
	function getURLDetail(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		$CurrentPage = @\MVC\Base\SessionRegistry::getCurrentPage();
		if (!isset($CurrentPage)) $CurrentPage = 1;	
		return "/".$App."/".$this->getCustomer()->getType()."/selling/".$this->getIdCustomer()."/page/". $CurrentPage ."/".$this->getId();
	}
	
	function getURLCallLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/".$this->getCustomer()->getType()."/selling/".$this->getIdCustomer()."/".$this->getId()."/call/load";
	}
	
	function getURLCallExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/".$this->getCustomer()->getType()."/selling/".$this->getIdCustomer()."/".$this->getId()."/call/exe";
	}
	
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>
