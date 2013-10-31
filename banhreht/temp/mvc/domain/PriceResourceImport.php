<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class PriceResourceImport extends Object{

    private $Id;
	private $IdSupplier;
	private $IdResource;
	private $NameResource;
    private $Price;
	
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdSupplier=null, $IdResource=null, $NameResource=null, $Price=null) {
        $this->Id = $Id;		
		$this->IdSupplier = $IdSupplier;
		$this->IdResource = $IdResource;
		$this->NameResource = $NameResource;
		$this->Price = $Price;
				
        parent::__construct( $Id );
    }
    
    function setIdSupplier( $IdSupplier ) {
        $this->IdSupplier = $IdSupplier;
        $this->markDirty();
    }
    function getIdSupplier( ) {
        return $this->IdSupplier;
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
    function getNameResource() {
        return $this->NameResource;
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
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Factory."&IdSupplier=".$this->Id."&IdResource=".$this->IdResource;
	}
}
?>