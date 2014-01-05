<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class CustomerLog extends Object{

    private $Id;
	private $IdOrder;
	private $IdCustomer;
	private $PaidValue;
	
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$IdOrder=null, 
		$IdCustomer=null,
		$PaidValue=null
	) 
	{
        $this->Id = $Id;
		$this->IdOrder = $IdOrder;
		$this->IdCustomer = $IdCustomer;
		$this->PaidValue = $PaidValue;		
        parent::__construct( $Id );
    }
	function getId(){return $this->Id;}	
    
	function setIdCustomer( $IdCustomer ) {$this->IdCustomer = $IdCustomer;$this->markDirty();}
    function getIdCustomer( ) {return $this->IdCustomer;}
	function getCustomer( ) {
		$mCustomer = new \MVC\Mapper\Customer();
		$Customer = $mCustomer->find($this->getIdCustomer());
		return $Customer;
	}
	
    function setPaidValue( $PaidValue ){$this->PaidValue = $PaidValue;$this->markDirty();}
    function getPaidValue( ) {return $this->PaidValue;}
	function getPaidValuePrint( ) {
		$N = new \MVC\Library\Number($this->PaidValue);
		return $N->formatCurrency();
	}
	
	function setIdOrder( $IdOrder ) {$this->IdOrder = $IdOrder;$this->markDirty();}
	function getIdOrder( ) {return $this->IdOrder;}
	function getOrder( ){
		$mOrder = new \MVC\Mapper\OrderExport();
		$OrderExport = $mOrder->find($this->getIdOrder());
		return $OrderExport;
	}
	
	function getOldDebt(){
		$mCL = new \MVC\Mapper\CustomerLog();
		$Pre = $mCL->findPre( array($this->getIdCustomer(), $this->getId()) );
		if ($Pre->count()==0)
			return $this->getCustomer()->getDebt();
		return $Pre->current()->getValue();
	}
	function getOldDebtPrint( ){
		$num = number_format($this->getOldDebt(), 0, ',', '.');
		return $num;
    }
	
	function getValue( ) {
		return $this->getOrder()->getValue() + $this->getOldDebt() - $this->getPaidValue();
	}
	
	function getValuePrint( ){
		$num = number_format($this->getValue(), 0, ',', '.');
		return $num;
    }
	
}
?>