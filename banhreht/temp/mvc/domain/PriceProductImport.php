<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class PriceProductImport extends Object{

    private $Id;
	private $IdFactory;
	private $IdProduct;
	private $NameProduct;
    private $Price;
	
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdFactory=null, $IdProduct=null, $NameProduct=null, $Price=null) {
        $this->Id = $Id;		
		$this->IdFactory = $IdFactory;
		$this->IdProduct = $IdProduct;
		$this->NameProduct = $NameProduct;
		$this->Price = $Price;
				
        parent::__construct( $Id );
    }
    
    function setIdFactory( $IdFactory ) {
        $this->IdFactory = $IdFactory;
        $this->markDirty();
    }
    function getIdFactory( ) {
        return $this->IdFactory;
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
    function getNameProduct() {
        return $this->NameProduct;
    }
	
	function setPrice( $Price ) {
        $this->Price = $Price;
        $this->markDirty();
    }
    function getPrice( ) {
        return $this->Price;
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
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Factory."&IdFactory=".$this->Id."&IdProduct=".$this->IdProduct;
	}
}
?>