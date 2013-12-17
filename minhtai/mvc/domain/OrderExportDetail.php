<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
use MVC\Library\Number;
use MVC\Library\Date;

class OrderExportDetail extends Object{

    private $Id;
	private $IdOrder;
	private $IdResource;
	private $Count;
    private $Price;
	
	private $Resource;
	private $Order;
	private $Extra;
	
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdOrder=null, $IdResource=null, $Count=null, $Price=null) {
        $this->Id = $Id;
		$this->IdOrder = $IdOrder;
		$this->IdResource = $IdResource;
		$this->Count = $Count;
		$this->Price = $Price;
        parent::__construct( $Id );
    }
    function getId( ) {
        return $this->Id;
    }	

    function setIdOrder( $IdOrder ) {
        $this->IdOrder = $IdOrder;
        $this->markDirty();
    }
    function getIdOrder( ) {
        return $this->IdOrder;
    }
	function getOrder( ){
		if (!isset($this->Order)){
			$mOrder = new \MVC\Mapper\OrderExport();
			$this->Order = $mOrder->find($this->getIdOrder());
		}
        return $this->Order;
    }
	
	
	function setIdResource( $IdResource ) {
        $this->IdResource = $IdResource;
        $this->markDirty();
    }
    function getIdResource( ) {
        return $this->IdResource;
    }
	function getResource( ){
		if (!isset($this->Resource)){
			$mResource = new \MVC\Mapper\Resource();
			$this->Resource = $mResource->find($this->getIdResource());
		}
        return $this->Resource;
    }
		
	function getCount( ) {
        return $this->Count;
    }
    function setCount( $Count ) {
        $this->Count = $Count;
        $this->markDirty();
    }
	function getCountPrint( ) {
		if (!isset($this->Count)){
			return 0;
		}
        return $this->Count;
    }

	function getPrice( ) {
        return $this->Price;
    }
	function setPrice( $Price ) {
        $this->Price = $Price;
        $this->markDirty();
    }
	function getPricePrint( ) {
		$N = new \MVC\Library\Number($this->Price);
        return $N->formatCurrency()." đ";
    }

	function getValue( ) {
        return $this->Count*$this->Price;
    }
	function getValuePrint( ) {
		$N = new \MVC\Library\Number($this->getValue());
        return $N->formatCurrency()." đ";
    }
	
	function getExtra(){
		$mOEDE = new \MVC\Mapper\OrderExportDetailExtra();
		$IdOEDE = $mOEDE->exist(array($this->getIdOrder(), $this->getIdResource()));
		if ($IdOEDE<0)
			return null;
		$OEDE = $mOEDE->find($IdOEDE);
		
		return $OEDE;
	}
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------	
	function getURLUpdLoad(){
		$Order = $this->getOrder();
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/selling/".$Order->getCustomer()->getId()."/".$this->getIdOrder()."/".$this->getIdResource()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/selling/".$Order->getCustomer()->getId()."/".$this->getIdOrder()."/".$this->getIdResource()."/upd/exe";
	}
	
	function getURLDelLoad(){
		$Order = $this->getOrder();
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/selling/".$Order->getCustomer()->getId()."/".$this->getIdOrder()."/".$this->getIdResource()."/del/load";
	}
	function getURLDelExe(){
		$Order = $this->getOrder();
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/selling/".$Order->getCustomer()->getId()."/".$this->getIdOrder()."/".$this->getIdResource()."/del/exe";
	}
	//---------------------------------------------------------
    static function findAll() {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->findAll();
    }
    static function find( $Id ) {
        $finder = self::getFinder( __CLASS__ );
        return $finder->find( $Id );
    }
	
}
?>
