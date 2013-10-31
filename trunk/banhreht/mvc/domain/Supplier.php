<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class Supplier extends Object{

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
		$this->Balance= $Balance;
		
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
		return "?cmd=UpdateSupplier&IdSupplier=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteSupplier&IdSupplier=".$this->Id;
	}
	
	function getURLViewTracking(){	
		return "?cmd=ViewSupplierTracking&IdSupplier=".$this->Id;
	}
	function getURLResourceImports(){	
		return "?cmd=ViewResourceImports&IdSupplier=".$this->Id;
	}
	function getURLResourceImportsNext(){
		return "?cmd=ViewResourceImports&IdSupplier=".$this->Id."&doAction=next";
	}
	function getURLResourceImportsBefore(){
		return "?cmd=ViewResourceImports&IdSupplier=".$this->Id."&doAction=before";
	}
	function getURLViewDebts(){	
		return "?cmd=ViewSupplierDebts&IdSupplier=".$this->Id;
	}
	function getURLViewDebtsNext(){	
		return "?cmd=ViewSupplierDebts&IdSupplier=".$this->Id."&doAction=next";
	}
	function getURLViewDebtsBefore(){	
		return "?cmd=ViewSupplierDebts&IdSupplier=".$this->Id."&doAction=before";
	}
}
?>
