<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Resource extends Object{

    private $Id;	
	private $Name;
	private $Quantity;
    private $PriceImport;
	private $PriceExport;
	private $Description;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null, $Quantity=null, $PriceImport=null, $PriceExport=null , $Description=null ) {
        $this->Id = $Id;		
		$this->Name = $Name;
		$this->Quantity = $Quantity;
		$this->PriceImport = $PriceImport;
		$this->PriceExport = $PriceExport;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
    function getId( ) {
        return $this->Id;
    }
    function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName( ) {
        return $this->Name;
    }
    
	function setPriceImport( $PriceImport ) {
        $this->PriceImport = $PriceImport;
        $this->markDirty();
    }	
	function getPriceImport( ) {
        return $this->PriceImport;
    }
	function getPriceImportPrint( ){
		$num = number_format($this->PriceImport, 0, ',', ' ');
		return $num;
    }
	
	function setQuantity( $Quantity ) {
        $this->Quantity = $Quantity;
        $this->markDirty();
    }
	function getQuantity( ) {
        return $this->Quantity;
    }
		   
	function setPriceExport( $PriceExport ) {
        $this->PriceExport = $PriceExport;
        $this->markDirty();
    }
	function getPriceExport( ) {
        return $this->PriceExport;
    }	
	function getPriceExportPrint( ) {        
		$num = number_format($this->PriceExport, 0, ',', ' ');
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
		return "?cmd=UpdateResource&IdResource=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteResource&IdResource=".$this->Id;
	}
}
?>