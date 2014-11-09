<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class ResourceImport extends Object{

    private $Id;	
	private $IdSupplier;
	private $IdResource;
	private $NameResource;
    private $Date;
	private $Quantity;
	private $Price;
	private $Description;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdSupplier=null, $IdResource=null, $NameResource="", $Date=null, $Quantity=0 , $Price=0 , $Description="") {
        $this->Id = $Id;		
		$this->IdSupplier = $IdSupplier;
		$this->IdResource = $IdResource;
		$this->NameResource = $NameResource;
		$this->Date = $Date;
		$this->Quantity = $Quantity;
		$this->Price = $Price;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
    
    function setIdSupplier( $IdSupplier ) {
        $this->IdSupplier = $IdSupplier;
        $this->markDirty();
    }
    function getIdSupplier( ) {
        return $this->IdSupplier;
    }
    
	function setDate( $Date_s ) {
        $this->Date = $Date_s;
        $this->markDirty();
    }	
	function getDate( ) {        
		return $this->Date;
    }
	function getDatePrint( ) {        
		$date = new \DateTime($this->Date);
		return $date->format('d/m/Y');
    }
	
	function setIdResource( $IdResource ) {
        $this->IdResource = $IdResource;
        $this->markDirty();
    }
	function getIdResource( ) {
        return $this->IdResource;
    }
	
	function setNameResource( $NameResource ) {
        $this->NameResource = $NameResource;
        $this->markDirty();
    }
	function getNameResource( ) {
        return $this->NameResource;
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
			
	function setDescription( $Description ) {
        $this->Description = $Description;
        $this->markDirty();
    }
	function getDescription( ) {
        return $this->Description;
    }
	
	function getValue( ) {
        return $this->Quantity*$this->Price;
    }
	function getValuePrint( ) {
        $num = number_format($this->getValue(), 0, ',', '.');
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
	
}
?>