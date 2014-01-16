<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class CustomerLog extends Object{

    private $Id;
	private $IdOrder;
	private $IdCustomer;
	private $PaidValue;
	private $DebtValue;
	
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$IdOrder=null, 
		$IdCustomer=null,
		$PaidValue=null,
		$DebtValue=null
	) 
	{
        $this->Id 			= $Id;
		$this->IdOrder 		= $IdOrder;
		$this->IdCustomer 	= $IdCustomer;
		$this->PaidValue 	= $PaidValue;		
		$this->DebtValue 	= $DebtValue;
        parent::__construct( $Id );
    }
	function getId(){return $this->Id;}	
	function setId($Id){$this->Id = $Id;}
    
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
	
	function getOldDebtValue(){		
		$mCL 	= new \MVC\Mapper\CustomerLog();
		$CLPre 	= $mCL->findPre(array($this->getIdCustomer(), $this->getId()));
		if ($CLPre->count()==0){
			$Debt = $this->getCustomer()->getDebt();
		}else{
			$Debt = $CLPre->current()->getDebtValue();
		}
		return $Debt;
	}
	function getOldDebtValuePrint( ){
		$num = number_format($this->getOldDebtValue(), 0, ',', '.');
		return $num;
    }
	
	function setDebtValue( $DebtValue ) {$this->DebtValue = $DebtValue;$this->markDirty();}
	function getDebtValue( ) {return $this->DebtValue;}	
	function getDebtValuePrint( ){
		$num = number_format($this->getDebtValue(), 0, ',', '.');
		return $num;
    }
	function getDebtValueStrPrint( ){
		$num = new \MVC\Library\Number($this->getDebtValue());
		return $num->readDigit();
    }
	
}
?>