<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class CustomerLog extends Object{
    private $Id;	
	private $IdCustomer;
	private $DateStart;
	private $DateEnd;
    			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdCustomer=null, $DateStart=null, $DateEnd=null) {
        $this->Id = $Id;		
		$this->IdCustomer = $IdCustomer;
		$this->DateStart = $DateStart;
		$this->DateEnd = $DateEnd;
		
        parent::__construct( $Id );
    }
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
    function getId( ) {
        return $this->Id;
    }
	
    function setIdCustomer( $IdCustomer ) {
        $this->IdCustomer = $IdCustomer;
        $this->markDirty();
    }
    function getIdCustomer( ) {
        return $this->IdCustomer;
    }
    
	function setValue( $Value ) {
        $this->Value = $Value;
        $this->markDirty();
    }	
	function getValue( ) {
		if (!isset($this->Value))
			return 0;
        return $this->Value;
    }
	function getValuePrint( ) {        
		$num = number_format($this->Value, 0, ',', ' ');
		return $num;
    }
	
	function setDateStart( $DateStart ) {
        $this->DateStart = $DateStart;
        $this->markDirty();
    }
	function getDateStart( ) {
        return $this->DateStart;
    }
	function getDateStartPrint( ) {        
		$date = new \DateTime($this->DateStart);
		return $date->format('d/m/Y');
    }
	  
	function setDateEnd( $DateEnd ) {
        $this->DateEnd = $DateEnd;
        $this->markDirty();
    }
	function getDateEnd( ) {
        return $this->DateEnd;
    }
	function getDateEndPrint(){
		$date = new \DateTime($this->DateEnd);
		return $date->format('d/m/Y');
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
		return "?cmd=UpdateCustomerLog&IdLog=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteCustomerLog&IdLog=".$this->Id;
	}
	function getURLViewTracking(){
		return "?cmd=PrintCustomerTracking&IdCustomer=".$this->IdCustomer."&DateStart=".$this->DateStart."&DateEnd=".$this->DateEnd;
	}
	function getURLViewTracking1(){
		return "?cmd=PrintCustomerTracking1&IdCustomer=".$this->IdCustomer."&DateStart=".$this->DateStart."&DateEnd=".$this->DateEnd;
	}
}
?>