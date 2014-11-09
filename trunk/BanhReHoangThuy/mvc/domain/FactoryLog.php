<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class FactoryLog extends Object{
    private $Id;	
	private $IdFactory;
	private $DateStart;
	private $DateEnd;
    			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdFactory=null, $DateStart=null, $DateEnd=null) {
        $this->Id = $Id;		
		$this->IdFactory = $IdFactory;
		$this->DateStart = $DateStart;
		$this->DateEnd = $DateEnd;
		
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
		$num = number_format($this->Value, 0, ',', ' ');
		return $num;
    }
	
	function setDateStart( $DateStart ) {
        $this->DateStart = $DateStart;
        $this->markDirty();
    }
	function getDateStart( ) {
        return $this->DateStart;
    }
	function getDateStartPrint( ) {        
		$date = new \DateTime($this->DateStart);
		return $date->format('d/m/Y');
    }
	  
	function setDateEnd( $DateEnd ) {
        $this->DateEnd = $DateEnd;
        $this->markDirty();
    }
	function getDateEnd( ) {
        return $this->DateEnd;
    }
	function getDateEndPrint(){
		$date = new \DateTime($this->DateEnd);
		return $date->format('d/m/Y');
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
		return "?cmd=UpdateFactoryLog&IdLog=".$this->Id;
	}
	function getURLDelete(){
		return "?cmd=DeleteFactoryLog&IdLog=".$this->Id;
	}
	function getURLViewTracking(){
		return "?cmd=PrintFactoryTracking&IdFactory=".$this->IdFactory."&DateStart=".$this->DateStart."&DateEnd=".$this->DateEnd;
	}
	function getURLViewEmployeeTrackings(){
		return "?cmd=ViewEmployeeTrackings&IdFactory=".$this->IdFactory."&DateStart=".$this->DateStart."&DateEnd=".$this->DateEnd;
	}
}
?>