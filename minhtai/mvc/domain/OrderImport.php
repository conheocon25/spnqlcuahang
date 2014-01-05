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
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdSupplier=null, $IdStore=null, $Date=null, $Note=null) {
        $this->Id 			= $Id;
		$this->IdSupplier 	= $IdSupplier;
		$this->IdStore 		= $IdStore;
		$this->Date 		= $Date;
		$this->Note 		= $Note;
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
	 
	//Thông tin nhà cung cấp
    function setIdSupplier( $IdSupplier ) {$this->IdSupplier = $IdSupplier;$this->markDirty();}
    function getIdSupplier( ) {return $this->IdSupplier;}
	function getSupplier( ) {		
		$mSupplier = new \MVC\Mapper\Supplier();
		$Supplier = $mSupplier->find($this->IdSupplier);		
        return $Supplier;
    }
	
	//Thông tin kho nhập hàng
	function setIdStore( $IdStore ) {$this->IdStore = $IdStore;$this->markDirty();}
    function getIdStore( ) {return $this->IdStore;}
	function getStore( ) {		
		$mStore = new \MVC\Mapper\Store();
		$Store = $mStore->find($this->IdStore);		
        return $Store;
    }
	
	//Thông tin ngày nhập hàng
	function getDate( ) {return $this->Date;}
    function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}
	function getDatePrint( ) {$Date = new Date($this->Date);		return $Date->getDateFormat();}
			
	function getNote( ) {return $this->Note;}
	function setNote( $Note ) {$this->Note = $Note;$this->markDirty();}
	
	function getTrackAll(){
		$mOID = new \MVC\Mapper\OrderImportDetail();
		$Tracks = $mOID->trackBy(array(
			$this->getId(),
			$this->getIdSupplier(),
			$this->getId()
		));					
		return $Tracks;
	}
	
	function getDetailAll(){
		$mOID 		= new \MVC\Mapper\OrderImportDetail();
		$DetailAll 	= $mOID->findBy(array($this->getId()));
		return $DetailAll;
	}
	
	function getValue(){
		$DetailAll = $this->getDetailAll();
		$Sum = 0;
		$DetailAll->rewind();
		while ($DetailAll->valid()){
			$Sum += $DetailAll->current()->getValue();
			$DetailAll->next();
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
		
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdSupplier'	=> $this->getIdSupplier(),
			'IdStore'		=> $this->getIdStore(),
			'Date'			=> $this->getDate(),
			'Note'			=> $this->getNote()
		);
		return json_encode($json);		
	}
	
	function setArray( $Data ){								
		$this->Id		= $Data[0];
		$this->IdSupplier= $Data[1];
		$this->IdStore	= $Data[2];
		$this->Date		= $Data[3];
		$this->Note		= $Data[4];
    }	
	function getURLDetail(){return "/import/".$this->getIdSupplier()."/".$this->getId();}
	function getURLPrint(){return "/import/".$this->getIdSupplier()."/".$this->getId()."/print";}
	
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}	
}
?>