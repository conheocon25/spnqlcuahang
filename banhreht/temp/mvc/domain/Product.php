<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Product extends Object{

    private $Id;	
	private $Name;
	private $Type;
	private $Weight;		
    private $Quantity;
	private $FullName;
	private $Description;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null, $Type=null, $Weight=null, $Quantity=null, $FullName=null , $Description=null ) {
        $this->Id = $Id;		
		$this->Name = $Name;
		$this->Type = $Type;
		$this->Weight = $Weight;
		$this->Quantity = $Quantity;
		$this->FullName = $FullName;
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
    
	function setType( $Type ) {
        $this->Type = $Type;
        $this->markDirty();
    }
    function getType( ) {
        return $this->Type;
    }
	
	function setQuantity( $Quantity ) {
        $this->Quantity = $Quantity;
        $this->markDirty();
    }	
	function getQuantity( ) {
        return $this->Quantity;
    }
	
	function setWeight( $Weight ) {
        $this->Weight = $Weight;
        $this->markDirty();
    }
	function getWeight( ) {
        return $this->Weight;
    }
	   
	function setFullName( $FullName ) {
        $this->FullName = $FullName;
        $this->markDirty();
    }
	function getFullName( ) {
        return $this->FullName;
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
		return "?cmd=UpdateProduct&IdProduct=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteProduct&IdProduct=".$this->Id;
	}
	function getURLPrint(){
		return "?cmd=PrintProduct&IdProduct=".$this->Id;
	}
	function getURLViewLabel(){
		return "?cmd=ViewProductLabel&IdProduct=".$this->Id;
	}
}
?>