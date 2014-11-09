<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class Customer extends Object{

    private $Id;	
	private $Name;
	private $Phone;		
    private $Address;
	private $Description;
	private $Balance;
					
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null, $Phone=null, $Address=null, $Description=null, $Balance=null ) {
        $this->Id = $Id;		
		$this->Name = $Name;
		$this->Phone = $Phone;
		$this->Address = $Address;
		$this->Description = $Description;
		$this->Balance = $Balance;
			
        parent::__construct( $Id );
    }
    
    function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName( ) {
        return $this->Name;
    }
    
	function setAddress( $Address ) {
        $this->Address = $Address;
        $this->markDirty();
    }	
	function getAddress( ) {
        return $this->Address;
    }
	
	function setPhone( $Phone ) {
        $this->Phone = $Phone;
        $this->markDirty();
    }
	function getPhone( ) {
        return $this->Phone;
    }
	   
	function setDescription( $Description ) {
        $this->Description = $Description;
        $this->markDirty();
    }
	function getDescription( ) {
        return $this->Description;
    }
	
	function setBalance( $Balance ) {
        $this->Balance = $Balance;
        $this->markDirty();
    }
	function getBalance( ) {
        return $this->Balance;
    }
	/*--------------------------------------------------------------------*/
    static function findAll() {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->findAll();
    }
    static function find( $Id ) {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->find( $Id );
    }
	/*--------------------------------------------------------------------*/
	/*Hàm lấy về các địa chỉ xử lí*/
	/*--------------------------------------------------------------------*/	
	function getURLUpdate(){
		return "?cmd=UpdateCustomer&IdCustomer=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteCustomer&IdCustomer=".$this->Id;
	}
	
	function getURLViewTracking(){	
		return "?cmd=ViewCustomerTracking&IdCustomer=".$this->Id;
	}
	function getURLViewLogs(){	
		return "?cmd=ViewCustomerLogs&IdCustomer=".$this->Id;
	}
		
	function getURLViewProductExports(){	
		return "?cmd=ViewProductExports&IdCustomer=".$this->Id;
	}
	function getURLPrintProductExports(){	
		return "?cmd=PrintProductExports&IdCustomer=".$this->Id;
	}
	function getURLViewProductExportsNextMonth(){	
		return "?cmd=ViewProductExports&IdCustomer=".$this->Id."&doAction=next";
	}
	function getURLViewProductExportsBeforeMonth(){	
		return "?cmd=ViewProductExports&IdCustomer=".$this->Id."&doAction=before";
	}
		
	function getURLViewPaids(){	
		return "?cmd=ViewCustomerPaids&IdCustomer=".$this->Id;
	}
	function getURLPrintPaids(){
		return "?cmd=PrintCustomerPaids&IdCustomer=".$this->Id;
	}
	function getURLViewPaidsNextMonth(){
		return "?cmd=ViewCustomerPaids&IdCustomer=".$this->Id."&doAction=next";
	}
	function getURLViewPaidsBeforeMonth(){
		return "?cmd=ViewCustomerPaids&IdCustomer=".$this->Id."&doAction=before";
	}
	
	function getURLInsertLog(){	
		return "?cmd=InsertCustomerLog&IdCustomer=".$this->Id;
	}
}
?>
