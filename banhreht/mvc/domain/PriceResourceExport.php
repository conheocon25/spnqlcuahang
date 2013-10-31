<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class PriceResourceExport extends Object{

    private $Id;
	private $IdFactory;
	private $IdResource;
	private $NameResource;
    private $Price;
	
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdFactory=null, $IdResource=null, $NameResource=null, $Price=null) {
        $this->Id = $Id;		
		$this->IdFactory = $IdFactory;
		$this->IdResource = $IdResource;
		$this->NameResource = $NameResource;
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
		return "?cmd=UpdatePriceResourceExport&IdFactory=".$this->Factory."&IdFactory=".$this->Id."&IdResource=".$this->IdResource;
	}
}
?>