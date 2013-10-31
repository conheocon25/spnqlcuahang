<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class PriceResourceImportTracking extends Object{

    private $Id;
	private $Name;
	
	private $Resource01;
    private $Resource02;
	private $Resource03;
	private $Resource04;
	private $Resource05;
	private $Resource06;
	private $Resource07;
	private $Resource08;
	private $Resource09;
	private $Resource10;
					
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$Name=null, 
		
		$Resource01=null, 
		$Resource02=null,
		$Resource03=null,
		$Resource04=null,
		$Resource05=null,
		$Resource06=null,
		$Resource07=null,
		$Resource08=null,
		$Resource09=null,
		$Resource10=null
	) {
		$this->Id = $Id;	
		$this->Name = $Name;		
		
		$this->Resource01 = $Resource01;
		$this->Resource02 = $Resource02;
		$this->Resource03 = $Resource03;
		$this->Resource04 = $Resource04;
		$this->Resource05 = $Resource05;
		$this->Resource06 = $Resource06;
		$this->Resource07 = $Resource07;
		$this->Resource08 = $Resource08;
		$this->Resource09 = $Resource09;
		$this->Resource10 = $Resource10;
		
        parent::__construct( $Id );
    }
    
	function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName() {
        return $this->Name;
    }
			
	function setResource01( $Resource01) {
        $this->Resource01 = $Resource01;
        $this->markDirty();
    }	
	function getResource01( ) {
        return $this->Resource01;
    }
	function getResource01Print( ) {        
		$num = number_format($this->Resource01, 0, ',', ' ');
		return $num;
    }
	
	function setResource02( $Resource02) {
        $this->Resource02 = $Resource02;
        $this->markDirty();
    }	
	function getResource02( ) {
        return $this->Resource02;
    }
	function getResource02Print( ) {        
		$num = number_format($this->Resource02, 0, ',', ' ');
		return $num;
    }
		
	function setResource03( $Resource03) {
        $this->Resource03 = $Resource03;
        $this->markDirty();
    }	
	function getResource03( ) {
        return $this->Resource03;
    }
	function getResource03Print( ) {        
		$num = number_format($this->Resource03, 0, ',', ' ');
		return $num;
    }
	
	function setResource04( $Resource04) {
        $this->Resource04 = $Resource04;
        $this->markDirty();
    }	
	function getResource04( ) {
        return $this->Resource04;
    }
	function getResource04Print( ) {        
		$num = number_format($this->Resource04, 0, ',', ' ');
		return $num;
    }
	
	function setResource05( $Resource05) {
        $this->Resource05 = $Resource05;
        $this->markDirty();
    }	
	function getResource05( ) {
        return $this->Resource05;
    }
	function getResource05Print( ) {        
		$num = number_format($this->Resource05, 0, ',', ' ');
		return $num;
    }
	
	function setResource06( $Resource06) {
        $this->Resource06 = $Resource06;
        $this->markDirty();
    }	
	function getResource06( ) {
        return $this->Resource06;
    }
	function getResource06Print( ) {        
		$num = number_format($this->Resource06, 0, ',', ' ');
		return $num;
    }
	
	function setResource07( $Resource07) {
        $this->Resource07 = $Resource07;
        $this->markDirty();
    }	
	function getResource07( ) {
        return $this->Resource07;
    }
	function getResource07Print( ) {        
		$num = number_format($this->Resource07, 0, ',', ' ');
		return $num;
    }
	
	function setResource08( $Resource08) {
        $this->Resource08 = $Resource08;
        $this->markDirty();
    }	
	function getResource08( ) {
        return $this->Resource08;
    }
	function getResource08Print( ) {        
		$num = number_format($this->Resource08, 0, ',', ' ');
		return $num;
    }
	
	function setResource09( $Resource09) {
        $this->Resource09 = $Resource09;
        $this->markDirty();
    }	
	function getResource09( ) {
        return $this->Resource09;
    }
	function getResource09Print( ) {        
		$num = number_format($this->Resource09, 0, ',', ' ');
		return $num;
    }
	
	function setResource10( $Resource10) {
        $this->Resource10 = $Resource10;
        $this->markDirty();
    }	
	function getResource10( ) {
        return $this->Resource10;
    }
	function getResource10Print( ) {        
		$num = number_format($this->Resource10, 0, ',', ' ');
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
	function getURLUpdatePRE01( ) {
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Id."&IdResource=1";
    }
	function getURLUpdatePRE02( ) {
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Id."&IdResource=2";
    }
	function getURLUpdatePRE03( ) {
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Id."&IdResource=3";
    }
	function getURLUpdatePRE04( ) {
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Id."&IdResource=4";
    }
	function getURLUpdatePRE05( ) {
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Id."&IdResource=5";
    }
	function getURLUpdatePRE06( ) {
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Id."&IdResource=6";
    }
	function getURLUpdatePRE07( ) {
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Id."&IdResource=7";
    }
	function getURLUpdatePRE08( ) {
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Id."&IdResource=8";
    }
	function getURLUpdatePRE09( ) {
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Id."&IdResource=9";
    }
	function getURLUpdatePRE10( ) {
		return "?cmd=UpdatePriceResourceImport&IdSupplier=".$this->Id."&IdResource=10";
    }
}
?>