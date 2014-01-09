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
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdCustomer=null, $IdStore=null, $Date=null, $Note=null) {
        $this->Id = $Id;
		$this->IdCustomer = $IdCustomer;
		$this->IdStore = $IdStore;
		$this->Date = $Date;
		$this->Note = $Note;
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
	
    function setIdCustomer( $IdCustomer ) {$this->IdCustomer = $IdCustomer;$this->markDirty();}
    function getIdCustomer( ) {return $this->IdCustomer;}
	function getCustomer( ) {	
		$mCustomer = new \MVC\Mapper\Customer();
		$Customer = $mCustomer->find($this->IdCustomer);	
        return $Customer;
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
		$mStore = new \MVC\Mapper\Store();
		$Store = $mStore->find($this->IdStore);		
        return $Store;
    }
	
	//Thông tin ngày nhập hàng
	function getDate( ) {return $this->Date;}
    function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}
	function getDatePrint( ) {$Date = new Date($this->Date);		return $Date->getDateFormat();}
	function getDateNext(){
		$Date = \date("Y-m-d", strtotime("+1 day", strtotime($this->Date)));
		return $Date;
	}
			
	function getNote( ) {return $this->Note;}
	function setNote( $Note ) {$this->Note = $Note;$this->markDirty();}
	function getDatePrint1(){
		$d = new \DateTime($this->Date);
		return "Vĩnh Long, ngày ".$d->format('d')." tháng ".$d->format('m')." năm ".$d->format('Y');
	}
	
	//-------------------------------------------------------------------------------
	//GET LISTS
	//-------------------------------------------------------------------------------
	
	//Lấy về phần chưa khuyến mãi
	function getDetailAll(){
		$mOID 		= new \MVC\Mapper\OrderExportDetail();
		$DetailAll 	= $mOID->findBy(array($this->getId()));		
		return $DetailAll;
	}
	
	function getValue1(){
		$Details = $this->getDetailAll();
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
	function getDetailAllExtra(){		
		$mODE 			= new \MVC\Mapper\OrderExportDetailExtra();
		$DetailExtraAll = $mODE->findBy(array($this->getId()));		
		return $DetailExtraAll;
	}
	
	function getValue2(){
		$Details = $this->getDetailAllExtra();
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
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdCustomer'	=> $this->getIdCustomer(),
			'IdStore'		=> $this->getIdStore(),
			'Date'			=> $this->getDate(),
			'Note'			=> $this->getNote()
		);
		return json_encode($json);		
	}
	
	function setArray( $Data ){								
		$this->Id		= $Data[0];
		$this->IdCustomer= $Data[1];
		$this->IdStore	= $Data[2];
		$this->Date		= $Data[3];
		$this->Note		= $Data[4];
    }
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLDetail(){	return 	"/export/".$this->getIdCustomer()."/".$this->getId();}
	function getURLPrint(){		return 	"/export/".$this->getIdCustomer()."/".$this->getId()."/print";}
	function getURLDiscount(){	return 	"/export/".$this->getIdCustomer()."/".$this->getId()."/discount";}
	
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>
