<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class PriceEmployeeProduce extends Object{

    private $Id;
	private $IdEmployee;
	private $IdProduct;
	private $NameProduct;
    private $Price;
	
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdEmployee=null, $IdProduct=null, $NameProduct=null, $Price=null) {
        $this->Id = $Id;		
		$this->IdEmployee = $IdEmployee;
		$this->IdProduct = $IdProduct;
		$this->NameProduct = $NameProduct;
		$this->Price = $Price;
				
        parent::__construct( $Id );
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
		return "?cmd=UpdateEmployee&IdFactory=".$this->Factory."&IdEmployee=".$this->Id;
	}
}
?>