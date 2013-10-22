<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class OrderExportDetail extends Object{

    private $Id;
	private $IdOrder;
	private $IdResource;
	private $Count;
    private $Price;
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdOrder=null, $IdResource=null, $Count=null, $Price=null) {
        $this->Id = $Id;
		$this->IdOrder = $IdOrder;
		$this->IdResource = $IdResource;
		$this->Count = $Count;
		$this->Price = $Price;
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}	

    function setIdOrder( $IdOrder ) {$this->IdOrder = $IdOrder;$this->markDirty();}
    function getIdOrder( ) {return $this->IdOrder;}
	function getOrder( ){		
		$mOrder = new \MVC\Mapper\OrderExport();
		$Order = $mOrder->find($this->getIdOrder());		
        return $Order;
    }	
	
	function setIdResource( $IdResource ) {$this->IdResource = $IdResource;$this->markDirty();}
    function getIdResource( ) {return $this->IdResource;}
	function getResource( ){		
		$mResource = new \MVC\Mapper\Resource();
		$Resource = $mResource->find($this->getIdResource());		
        return $Resource;
    }
		
	function getCount( ) {return $this->Count;}
    function setCount( $Count ) {$this->Count = $Count;$this->markDirty();}
	function getCountPrint( ) {
		if (!isset($this->Count)){
			return 0;
		}
        return $this->Count;
    }

	function getPrice( ) {return $this->Price;}
	function setPrice( $Price ) {$this->Price = $Price;$this->markDirty();}
	function getPricePrint( ) {$N = new \MVC\Library\Number($this->Price);return $N->formatCurrency();}

	function getValue( ) {return $this->Count*$this->Price;}
	function getValuePrint( ) {$N = new \MVC\Library\Number($this->getValue());return $N->formatCurrency()." đ";}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------	
	function getURLUpdLoad(){
		$Order = $this->getOrder();	
		return "/selling/".$this->getIdOrder()."/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){return "/selling/".$this->getIdOrder()."/".$this->getId()."/upd/exe";}
	function getURLDelLoad(){
		$Order = $this->getOrder();	
		return "/selling/".$this->getIdOrder()."/".$this->getId()."/del/load";
	}
	function getURLDelExe(){return "/selling/".$this->getIdOrder()."/".$this->getId()."/del/exe";}
	
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
}
?>