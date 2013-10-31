<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class ResourceExport extends Object{

    private $Id;	
	private $IdFactory;
	private $IdResource;
	private $NameResource;
    private $Date;
	private $Quantity;
	private $Price;
	private $Description;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdFactory=null, $IdResource=null, $NameResource=null, $Date=null, $Quantity=null , $Price=null , $Description=null ) {
        $this->Id = $Id;		
		$this->IdFactory = $IdFactory;
		$this->IdResource = $IdResource;
		$this->NameResource = $NameResource;
		$this->Date = $Date;
		$this->Quantity = $Quantity;
		$this->Price = $Price;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
    
    function setIdFactory( $IdFactory ) {
        $this->IdFactory = $IdFactory;
        $this->markDirty();
    }
    function getIdFactory( ) {
        return $this->IdFactory;
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
		$num = number_format($this->Quantity, 1, ',', ' ');
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
	
	function getValue(){
		return $this->Quantity*$this->Price;
	}
	function getValuePrint( ) {
		$num = number_format($this->Quantity*$this->Price, 0, ',', '.');
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
		return "?cmd=UpdateResourceExport&IdFactory=".$this->IdFactory."&IdResourceExport=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteResourceExport&IdFactory=".$this->IdFactory."&IdResourceExport=".$this->Id;
	}
}
?>