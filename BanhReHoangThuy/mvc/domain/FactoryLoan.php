<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class FactoryLoan extends Object{

    private $Id;	
	private $IdFactory;
	private $Date;		
    private $Value;
	private $Description;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdFactory=null, $Date=null, $Value=null, $Description=null ) {
        $this->Id = $Id;		
		$this->IdFactory = $IdFactory;
		$this->Date = $Date;
		$this->Value = $Value;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
    function getId( ) {
        return $this->Id;
    }
	
    function setIdFactory( $IdFactory ) {
        $this->IdFactory = $IdFactory;
        $this->markDirty();
    }
    function getIdFactory( ) {
        return $this->IdFactory;
    }
    
	function setValue( $Value ) {
        $this->Value = $Value;
        $this->markDirty();
    }	
	function getValue( ) {
		if (!isset($this->Value))
			return 0;
        return $this->Value;
    }
	function getValuePrint( ) {        
		$num = number_format($this->Value, 0, ',', '.');
		return $num;
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
			return "?cmd=UpdateFactoryLoan&IdFactoryLoan=".$this->Id."&IdFactory=".$this->IdFactory;
	}
	function getURLDelete(){
			return "?cmd=DeleteFactoryLoan&IdFactoryLoan=".$this->Id."&IdFactory=".$this->IdFactory;
	}
}
?>