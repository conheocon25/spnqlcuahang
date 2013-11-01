<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class CustomerProduct extends Object{
    private $Id;	
	private $IdCustomer;	
	private $Name;
	private $Unit;
	private $Price;
	private $Note;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdCustomer=null, $Name=null, $Unit=null , $Price=null , $Note=null ){
        $this->Id 			= $Id;
		$this->IdCustomer 	= $IdCustomer;
		$this->Name 		= $Name;		
		$this->Unit 		= $Unit;
		$this->Price 		= $Price;
		$this->Note 		= $Note;
        parent::__construct( $Id );
    }
    
    function setIdCustomer( $IdCustomer ) 	{$this->IdCustomer = $IdCustomer;$this->markDirty();}
    function getIdCustomer( ) 				{return $this->IdCustomer;}
	function getCustomer( ) 				{$mCustomer = new \MVC\Mapper\Customer(); $Customer = $mCustomer->find($this->IdCustomer); return $Customer;}
		
	function setName( $Name ) 	{$this->Name = $Name; $this->markDirty(); }
	function getName( ) 		{return $this->Name; }
	
	function setUnit( $Unit ) 	{$this->Unit = $Unit; $this->markDirty();}
	function getUnit( ) 		{return $this->Unit;}	
		
	function setPrice( $Price ) {$this->Price = $Price; $this->markDirty();}
	function getPrice( ) 		{return $this->Price;}
	function getPricePrint( ) 	{$num = number_format($this->Price, 0, ',', '.');return $num;}
			
	function setNote( $Note ) 	{$this->Note = $Note; $this->markDirty();}
	function getNote( ) 		{return $this->Note;}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),			
			'IdCustomer'	=> $this->getIdCustomer(),
			'Name'			=> $this->getName(),
			'Unit'			=> $this->getUnit(),
			'Price'			=> $this->getPrice(),
			'Note'			=> $this->getNote()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];		
		$this->IdCustomer 	= $Data[1];
		$this->Name 		= $Data[2];		
		$this->Unit 		= $Data[3];
		$this->Price 		= $Data[4];
		$this->Note 		= $Data[5];
    }
	
	/*--------------------------------------------------------------------*/
    static function findAll() 	{$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
	/*--------------------------------------------------------------------*/
	/*Hàm lấy về các địa chỉ xử lí*/
	/*--------------------------------------------------------------------*/
	
}
?>