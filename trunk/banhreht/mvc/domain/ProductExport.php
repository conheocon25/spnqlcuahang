<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class ProductExport extends Object{

    private $Id;	
	private $IdCustomer;
	private $IdProduct;
	private $NameProduct;
    private $Date;
	private $Quantity;
	private $Price;
	private $Description;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdCustomer=null, $IdProduct=null, $NameProduct=null, $Date=null, $Quantity=null , $Price=null , $Description=null ) {
        $this->Id = $Id;		
		$this->IdCustomer = $IdCustomer;
		$this->IdProduct = $IdProduct;
		$this->NameProduct = $NameProduct;
		$this->Date = $Date;
		$this->Quantity = $Quantity;
		$this->Price = $Price;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
    
    function setIdCustomer( $IdCustomer ) {
        $this->IdCustomer = $IdCustomer;
        $this->markDirty();
    }
    function getIdCustomer( ) {
        return $this->IdCustomer;
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
	
	function setQuantity( $Quantity ) {
        $this->Quantity = $Quantity;
        $this->markDirty();
    }
	function getQuantity( ) {
        return $this->Quantity;
    }	
	function getQuantityPrint( ) {
        $num = number_format($this->Quantity, 0, ',', '.');
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
		$num = number_format($this->Price, 0, ',', '.');
		return $num;
    }
	
	function getValue( ) {
        return $this->Price*$this->Quantity;
    }
	function getValuePrint( ) {        
		$num = number_format($this->Price*$this->Quantity, 0, ',', '.');
		return $num;
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
		return "?cmd=UpdateProductExport&IdProductExport=".$this->Id."&IdCustomer=".$this->IdCustomer;
	}
	function getURLDelete(){
		return "?cmd=DeleteProductExport&IdProductExport=".$this->Id."&IdCustomer=".$this->IdCustomer;
	}
}
?>