<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class EmployeeLoan extends Object{

    private $Id;
	private $IdEmployee;
	private $Date;		
    private $Value;
	private $Description;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdEmployee=null, $Date=null, $Value=null, $Description=null ) {
        $this->Id = $Id;		
		$this->IdEmployee = $IdEmployee;
		$this->Date = $Date;
		$this->Value = $Value;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
    
    function setIdEmployee( $IdEmployee ) {
        $this->IdEmployee = $IdEmployee;
        $this->markDirty();
    }
    function getIdEmployee( ) {
        return $this->IdEmployee;
    }
    
	function setValue( $Value ) {
        $this->Value = $Value;
        $this->markDirty();
    }	
	function getValue( ) {
        return $this->Value;
    }
	function getValuePrint( ) {        
		$num = number_format($this->Value, 0, ',', ' ');
		return $num;
    }
	
	function setDate( $Date ) {
        $this->Date = $Date;
        $this->markDirty();
    }
	function getDate( ) {
        return $this->Date;
    }
	function getDatePrint( ) {        
		$date = new \DateTime($this->Date);
		return $date->format('d/m/Y');
    }
	   
	function setDescription( $Description ) {
        $this->Description = $Description;
        $this->markDirty();
    }
	function getDescription( ) {
        return $this->Description;
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
		return "?cmd=UpdateEmployeeLoan&IdEmployee=".$this->IdEmployee."&IdEmployeeLoan=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteEmployeeLoan&IdEmployee=".$this->IdEmployee."&IdEmployeeLoan=".$this->Id;
	}
	
}
?>