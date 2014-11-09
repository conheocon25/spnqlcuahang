<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class FactoryLoanTracking extends Object{
    private $Id;
	private $Name;
	private $Date;	
	private $Value;
	private $Description;
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$Name=null, 
		$Date=null, 		
		$Value=null,
		$Description=null
	) {
		$this->Id = $Id;	
		$this->Name = $Name;		
		$this->Date = $Date;
		$this->Value = $Value;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
    
	function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName() {
        return $this->Name;
    }
			
	function setDate( $Date) {
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
	
	function setValue( $Value) {
        $this->Value = $Value;
        $this->markDirty();
    }	
	function getValue( ) {
		if( !isset($this->Value))
			return 0;
        return $this->Value;
    }
	function getValuePrint( ) {        
		$num = number_format($this->Value, 0, ',', '.');
		return $num;
    }
	function getDescription( ) {
		if ( !isset($this->Description) || $this->Description=="")
			return "Click để thêm chú thích ...";
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
	function getURLUpdateFactoryLoan( ) {
		return "?cmd=UpdateFactoryLoan&IdFactory=".$this->Id."&Date=".$this->Date;
    }
}
?>