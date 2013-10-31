<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class Employee extends Object{

    private $Id;	
	private $Name;
	private $Sex;		
    private $Phone;
	private $Address;
	private $Factory;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null, $Sex=null, $Phone=null, $Address=null , $Factory=null ) {
        $this->Id = $Id;		
		$this->Name = $Name;
		$this->Sex = $Sex;
		$this->Phone = $Phone;
		$this->Address = $Address;
		$this->Factory = $Factory;
        parent::__construct( $Id );
    }
    
    function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName( ) {
        return $this->Name;
    }
    
	function setPhone( $Phone ) {
        $this->Phone = $Phone;
        $this->markDirty();
    }	
	function getPhone( ) {
        return $this->Phone;
    }
	
	function setSex( $Sex ) {
        $this->Sex = $Sex;
        $this->markDirty();
    }
	function getSex( ) {
        return $this->Sex;
    }
	function getSexPrint( ) {
		if ($this->Sex==0)
			return "Nữ";
        return "Nam";
    }   
	function setAddress( $Address ) {
        $this->Address = $Address;
        $this->markDirty();
    }
	function getAddress( ) {
        return $this->Address;
    }	
	
	function setFactory( $Factory ) {
        $this->Factory = $Factory;
        $this->markDirty();
    }
	function getFactory( ) {
        return $this->Factory;
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
		return "?cmd=UpdateEmployee&IdFactory=".$this->Factory."&IdEmployee=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteEmployee&IdFactory=".$this->Factory."&IdEmployee=".$this->Id;
	}
	
	function getURLInsertLoan(){
		return "?cmd=InsertEmployeeLoan&IdFactory=".$this->Factory."&IdEmployee=".$this->Id;
	}
	function getURLViewLoans(){
		return "?cmd=ViewEmployeeLoans&IdFactory=".$this->Factory."&IdEmployee=".$this->Id;
	}
	function getURLViewLoansNextMonth(){
		return "?cmd=ViewEmployeeLoans&IdFactory=".$this->Factory."&IdEmployee=".$this->Id."&doAction=next";
	}
	function getURLViewLoansBeforeMonth(){
		return "?cmd=ViewEmployeeLoans&IdFactory=".$this->Factory."&IdEmployee=".$this->Id."&doAction=before";
	}
	function getURLPrint(){
		return "?cmd=PrintEmployeeTracking&IdEmployee=".$this->Id."&Generate1=".$this->Generate1."&Generate2=".$this->Generate2;
	}
}
?>