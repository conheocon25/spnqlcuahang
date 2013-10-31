<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class EmployeeProduce extends Object{
    private $Id;
	private $IdEmployee;
	private $Date;		
    private $IdProduct;
	private $NameProduct;
	private $Quantity;
	private $Price;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdEmployee=null, $Date=null, $IdProduct=null, $NameProduct=null, $Quantity=null , $Price=null ) {
        $this->Id = $Id;		
		$this->IdEmployee = $IdEmployee;
		$this->Date = $Date;
		$this->IdProduct = $IdProduct;
		$this->NameProduct = $NameProduct;
		$this->Quantity = $Quantity;
		$this->Price = $Price;
        parent::__construct( $Id );
    }
	function setId( $Id) {
        $this->Id = $Id;
    }
    function getId( ) {
        return $this->Id;
    }
	
    function setIdEmployee( $IdEmployee ) {
        $this->IdEmployee = $IdEmployee;
        $this->markDirty();
    }
    function getIdEmployee( ) {
        return $this->IdEmployee;
    }
    
	function setIdProduct( $IdProduct ) {
        $this->IdProduct = $IdProduct;
        $this->markDirty();
    }	
	function getIdProduct( ) {
        return $this->IdProduct;
    }
	
	function setNameProduct( $NameProduct ) {
        $this->NameProduct = $NameProduct;
        $this->markDirty();
    }	
	function getNameProduct( ) {
        return $this->NameProduct;
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
	
	function setQuantity( $Quantity ) {
        $this->Quantity = $Quantity;
        $this->markDirty();
    }
	function getQuantity( ) {
        return $this->Quantity;
    }	
	function getQuantityPrint( ) {        
		$num = number_format($this->Quantity, 0, ',', ' ');
		return $num;
    }	
	
	function setPrice( $Price ) {
        $this->Price = $Price;
        $this->markDirty();
    }
	function getPrice( ) {
        return $this->Price;
    }
	function getPricePrint( ) {        
		$num = number_format($this->Price, 0, ',', ' ');
		return $num;
    }
	
	function getValue( ) {
        return $this->Price*$this->Quantity;
    }
	function getValuePrint( ) {        
		$num = number_format($this->Price*$this->Quantity, 0, ',', ' ');
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
	function getURLUpdate(){
		return "?cmd=UpdateEmployeeProduce&IdEmployee=".$this->IdEmployee."&IdEmployeeProduce=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteEmployeeProduce&IdEmployee=".$this->IdEmployee."&IdEmployeeProduce=".$this->Id;
	}
	
}
?>