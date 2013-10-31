<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class EmployeeTracking extends Object{

    private $Id;	
	private $Name;	
	private $Generate1;		
    private $Generate2;
				
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null, $Generate1=null, $Generate2=null ) {
        $this->Id = $Id;
		$this->Name = $Name;		
		$this->Generate1 = $Generate1;
		$this->Generate2 = $Generate2;
        parent::__construct( $Id );
    }
    
	function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
	
	function getId() {
        return $this->Id;
    }
	
	function setId( $ID ) {
        $this->Id = $ID;        
    }
    function getName() {
        return $this->Name;
    }
	
	function setGenerate1( $Generate1) {
        $this->Generate1 = $Generate1;
        $this->markDirty();
    }	
	function getGenerate1( ) {
        return $this->Generate1;
    }
	function getGenerate1Print( ) {        
		$num = number_format(round($this->Generate1,-3), 0, ',', ' ');
		return $num;
    }
	 
	function setGenerate2( $Generate2) {
        $this->Generate2 = $Generate2;
        $this->markDirty();
    }	
	function getGenerate2( ) {
        return $this->Generate2;
    }
	function getGenerate2Print( ) {
		$num = number_format(round($this->Generate2,-3), 0, ',', ' ');
		return $num;
    }
	
	function getValue( ) {
        return $this->Generate2 - $this->Generate1;
    }
	function getValuePrint( ) {
		$num = number_format(round($this->Generate2 - $this->Generate1,-3), 0, ',', ' ');
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
	function getURLPrint(){
		return "?cmd=PrintEmployeeTracking&IdEmployee=".$this->Id;
	}
}
?>