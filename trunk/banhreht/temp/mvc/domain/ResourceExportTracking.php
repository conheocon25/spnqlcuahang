<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class ResourceExportTracking extends Object{

    private $Id;
	private $Name;
	private $Date;		
	private $Resource01;
    private $Resource02;
	private $Resource03;
	private $Resource04;
	private $Resource05;
	private $Resource06;
	private $Resource07;
	private $Resource08;
	private $Resource09;	
					
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$Name=null, 
		$Date=null, 	
		$Resource01=null, 
		$Resource02=null,
		$Resource03=null,
		$Resource04=null,
		$Resource05=null,
		$Resource06=null,
		$Resource07=null,
		$Resource08=null,
		$Resource09=null			
	) {
		$this->Id = $Id;	
		$this->Name = $Name;		
		$this->Date = $Date;
		$this->Resource01 = $Resource01;
		$this->Resource02 = $Resource02;
		$this->Resource03 = $Resource03;
		$this->Resource04 = $Resource04;
		$this->Resource05 = $Resource05;
		$this->Resource06 = $Resource06;
		$this->Resource07 = $Resource07;
		$this->Resource08 = $Resource08;
		$this->Resource09 = $Resource09;
		
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
	
	function setResource01( $Resource01) {
        $this->Resource01 = $Resource01;
        $this->markDirty();
    }	
	function getResource01( ) {
        if (!isset($this->Resource01))
			return 0;
		return $this->Resource01;
    }
	function getResource01Print( ) {        
		$num = number_format($this->Resource01, 1, '.', '');
		return $num;
    }
	
	function setResource02( $Resource02) {
        $this->Resource02 = $Resource02;
        $this->markDirty();
    }	
	function getResource02( ) {
		if (!isset($this->Resource02))
			return 0;
        return $this->Resource02;
    }
	function getResource02Print( ) {        
		$num = number_format($this->Resource02, 1, '.', '');
		return $num;
    }
		
	function setResource03( $Resource03) {
        $this->Resource03 = $Resource03;
        $this->markDirty();
    }	
	function getResource03( ) {
		if (!isset($this->Resource03))
			return 0;
        return $this->Resource03;
    }
	function getResource03Print( ) {        
		$num = number_format($this->Resource03, 1, '.', '');
		return $num;
    }
	
	function setResource04( $Resource04) {
        $this->Resource04 = $Resource04;
        $this->markDirty();
    }	
	function getResource04( ) {
        if (!isset($this->Resource04))
			return 0;
		return $this->Resource04;
    }
	function getResource04Print( ) {        
		$num = number_format($this->Resource04, 1, '.', '');
		return $num;
    }
	
	function setResource05( $Resource05) {
        $this->Resource05 = $Resource05;
        $this->markDirty();
    }	
	function getResource05( ) {
		if (!isset($this->Resource05))
			return 0;
        return $this->Resource05;
    }
	function getResource05Print( ) {        
		$num = number_format($this->Resource05, 1, '.', '');
		return $num;
    }
	
	function setResource06( $Resource06) {
        $this->Resource06 = $Resource06;
        $this->markDirty();
    }	
	function getResource06( ) {
		if (!isset($this->Resource06))
			return 0;
        return $this->Resource06;
    }
	function getResource06Print( ) {        
		$num = number_format($this->Resource06, 1, '.', '');
		return $num;
    }
	
	function setResource07( $Resource07) {
        $this->Resource07 = $Resource07;
        $this->markDirty();
    }	
	function getResource07( ) {
		if (!isset($this->Resource07))
			return 0;
        return $this->Resource07;
    }
	function getResource07Print( ) {        
		$num = number_format($this->Resource07, 1, '.', '');
		return $num;
    }
	
	function setResource08( $Resource08) {
        $this->Resource08 = $Resource08;
        $this->markDirty();
    }	
	function getResource08( ) {
		if (!isset($this->Resource08))
			return 0;
        return $this->Resource08;
    }
	function getResource08Print( ) {        
		$num = number_format($this->Resource08, 1, '.', '');
		return $num;
    }
	
	function setResource09( $Resource09) {
        $this->Resource09 = $Resource09;
        $this->markDirty();
    }	
	function getResource09( ) {
		if (!isset($this->Resource09))
			return 0;
        return $this->Resource09;
    }
	function getResource09Print( ) {        
		$num = number_format($this->Resource09, 1, '.', '');
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
	function getURLUpdateResourceExport01( ) {
		return "?cmd=UpdateResourceExport&IdFactory=".$this->Id."&IdResource=1&Date=".$this->Date;
    }
	function getURLUpdateResourceExport02( ) {
		return "?cmd=UpdateResourceExport&IdFactory=".$this->Id."&IdResource=2&Date=".$this->Date;
    }
	function getURLUpdateResourceExport03( ) {
		return "?cmd=UpdateResourceExport&IdFactory=".$this->Id."&IdResource=3&Date=".$this->Date;
    }
	function getURLUpdateResourceExport04( ) {
		return "?cmd=UpdateResourceExport&IdFactory=".$this->Id."&IdResource=4&Date=".$this->Date;
    }
	function getURLUpdateResourceExport05( ) {
		return "?cmd=UpdateResourceExport&IdFactory=".$this->Id."&IdResource=5&Date=".$this->Date;
    }
	function getURLUpdateResourceExport06( ) {
		return "?cmd=UpdateResourceExport&IdFactory=".$this->Id."&IdResource=6&Date=".$this->Date;
    }
	function getURLUpdateResourceExport07( ) {
		return "?cmd=UpdateResourceExport&IdFactory=".$this->Id."&IdResource=7&Date=".$this->Date;
    }
	function getURLUpdateResourceExport08( ) {
		return "?cmd=UpdateResourceExport&IdFactory=".$this->Id."&IdResource=8&Date=".$this->Date;
    }
	function getURLUpdateResourceExport09( ) {
		return "?cmd=UpdateResourceExport&IdFactory=".$this->Id."&IdResource=9&Date=".$this->Date;
    }	
}
?>