<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class EmployeeLoanTracking extends Object{

    private $Id;
	private $Name;
	private $Date;
	private $IdFactory;	
	private $Value;
    				
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$Name=null, 
		$Date=null, 
		$IdFactory=null,		
		$Value=null
	) {
		$this->Id = $Id;	
		$this->Name = $Name;
		$this->IdFactory = $IdFactory;
		$this->Date = $Date;
		$this->Value = $Value;
        parent::__construct( $Id );
    }
    
	function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName() {
        return $this->Name;
    }
	
	function setIdFactory( $IdFactory) {
        $this->IdFactory = $IdFactory;
        $this->markDirty();
    }	
	function getIdFactory( ) {
        return $this->IdFactory;
    }
	
	function setDate( $Date) {
        $this->Date = $Date;
        $this->markDirty();
    }	
	function getDate( ) {
        return $this->Date;
    }
	
	function setValue( $Value) {
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
	function getURLUpdateEmployeeLoan( ) {
		return "?cmd=UpdateEmployeeLoan&IdFactory=".$this->IdFactory."&IdEmployee=".$this->Id."&Date=".$this->Date;
    }	
}
?>