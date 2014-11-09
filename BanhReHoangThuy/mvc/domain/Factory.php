<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class Factory extends Object{

    private $Id;	
	private $Name;
	private $Type;		
	private $Phone;		
    private $Address;
	private $Description;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null, $Type=null, $Phone=null, $Address=null, $Description=null ) {
        $this->Id = $Id;		
		$this->Name = $Name;
		$this->Type = $Type;
		$this->Phone = $Phone;
		$this->Address = $Address;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
    
    function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName() {
        return $this->Name;
    }
    
	function setType( $Type ) {
        $this->Type = $Type;
        $this->markDirty();
    }
    function getType() {
        return $this->Type;
    }
	
	function setAddress( $Address) {
        $this->Address = $Address;
        $this->markDirty();
    }	
	function getAddress( ) {
        return $this->Address;
    }
	
	function setPhone( $Phone) {
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
	
	function hasEmployees( ) {
		$mEmployee = new \MVC\Mapper\Employee();
		$Employees = $mEmployee->findByFactory(array($this->Id));
        if ($Employees->count() == 0)
			return false;
		return true;
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
	function getURLViewLogs(){
		return "?cmd=ViewFactoryLogs&IdFactory=".$this->Id;
	}
	function getURLInsertLog(){
		return "?cmd=InsertFactoryLog&IdFactory=".$this->Id;
	}
	
	function getURLInsertEmployee(){
		return "?cmd=InsertEmployee&IdFactory=".$this->Id;
	}
	function getURLViewEmployees(){
		return "?cmd=ViewEmployees&IdFactory=".$this->Id;
	}
	function getURLViewEmployeeTrackings(){
		return "?cmd=ViewEmployeeTrackings&IdFactory=".$this->Id;
	}
	function getURLViewPriceEmployeeProduceTrackings(){
		return "?cmd=ViewPriceEmployeeProduceTrackings&IdFactory=".$this->Id;
	}
	
	function getURLViewResourceExports(){
		return "?cmd=ViewResourceExports&IdFactory=".$this->Id;
	}
	function getURLViewResourceExportsNextMonth(){
		return "?cmd=ViewResourceExports&IdFactory=".$this->Id."&doAction=next";
	}
	function getURLViewResourceExportsBeforeMonth(){
		return "?cmd=ViewResourceExports&IdFactory=".$this->Id."&doAction=before";
	}
		
	function getURLViewProductImports(){
		return "?cmd=ViewProductImports&IdFactory=".$this->Id;
	}
	function getURLPrintProductImports1(){
		return "?cmd=PrintProductImports1&IdFactory=".$this->Id;
	}
	function getURLPrintProductImports(){
		return "?cmd=PrintProductImports&IdFactory=".$this->Id;
	}
	function getURLViewProductImportsNextMonth(){
		return "?cmd=ViewProductImports&IdFactory=".$this->Id."&doAction=next";
	}
	function getURLViewProductImportsBeforeMonth(){
		return "?cmd=ViewProductImports&IdFactory=".$this->Id."&doAction=before";
	}
	function getURLViewTracking(){
		return "?cmd=ViewFactoryTracking&IdFactory=".$this->Id;
	}
	function getURLViewTrackings(){
		return "?cmd=ViewFactoryTrackings&IdFactory=".$this->Id;
	}
	//------------------------------------------------------------------------	
	function getURLPrintEmployeeProduceTrackings(){
		return "?cmd=PrintEmployeeProduceTrackings&IdFactory=".$this->Id;
	}
	
	function getURLViewEmployeeProduceTrackings(){
		return "?cmd=ViewEmployeeProduceTrackings&IdFactory=".$this->Id;
	}
	function getURLViewEmployeeProduceTrackingsNext(){
		return "?cmd=ViewEmployeeProduceTrackings&IdFactory=".$this->Id."&doAction=next";
	}
	function getURLViewEmployeeProduceTrackingsBefore(){
		return "?cmd=ViewEmployeeProduceTrackings&IdFactory=".$this->Id."&doAction=before";
	}
	//------------------------------------------------------------------------
	function getURLViewEmployeeLoanTrackings(){
		return "?cmd=ViewEmployeeLoanTrackings&IdFactory=".$this->Id;
	}
	function getURLViewEmployeeLoanTrackingsNext(){
		return "?cmd=ViewEmployeeLoanTrackings&IdFactory=".$this->Id."&doAction=next";
	}
	function getURLViewEmployeeLoanTrackingsBefore(){
		return "?cmd=ViewEmployeeLoanTrackings&IdFactory=".$this->Id."&doAction=before";
	}
	
	function getURLViewLoans(){
		return "?cmd=ViewFactoryLoans&IdFactory=".$this->Id;
	}
	function getURLViewLoansNextMonth(){
		return "?cmd=ViewFactoryLoans&IdFactory=".$this->Id."&doAction=next";
	}
	function getURLViewLoansBeforeMonth(){
		return "?cmd=ViewFactoryLoans&IdFactory=".$this->Id."&doAction=before";
	}
	function getURLPrintLoans(){
		return "?cmd=PrintFactoryLoans&IdFactory=".$this->Id;
	}
	
	function getURLInsertLoan(){
		return "?cmd=InsertFactoryLoan&IdFactory=".$this->Id;
	}
	function getURLInsertProductImport(){
		return "?cmd=InsertProductImport&IdFactory=".$this->Id;
	}
	function getURLUpdate(){
		return "?cmd=UpdateFactory&IdFactory=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteFactory&IdFactory=".$this->Id;
	}
	function getURLInsertResourceExport(){
		return "?cmd=InsertResourceExport&IdFactory=".$this->Id;
	}
	function getURLPrintResourceExport(){
		return "?cmd=PrintResourceExports&IdFactory=".$this->Id;
	}
	/*--------------------------------------------------------------------*/
	 function getURLPrintFactoryTrackings() {
        return "?cmd=PrintFactoryTrackings&IdFactory=".$this->Id;
    }
	function getURLPrintEmployeeTrackings() {
        return "?cmd=PrintEmployeeTrackings&IdFactory=".$this->Id;
    }
	function getURLViewEmployeeTrackingsNext() {
        return "?cmd=ViewEmployeeTrackings&IdFactory=".$this->Id."&doAction=next";
    }
	function getURLViewEmployeeTrackingsBefore() {
        return "?cmd=ViewEmployeeTrackings&IdFactory=".$this->Id."&doAction=before";
    }
}
?>