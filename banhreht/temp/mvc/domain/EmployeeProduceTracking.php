<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class EmployeeProduceTracking extends Object{

    private $Id;
	private $Name;
	private $Date;
	private $IdFactory;	
	private $Product01;
    private $Product02;
	private $Product03;
	private $Product04;
	private $Product05;
	private $Product06;
	private $Product07;
	private $Product08;
	private $Product09;
	private $Product10;
	private $Product11;
	private $Product12;
	private $Product13;
	private $Product14;
	private $Product15;
				
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$Name=null, 
		$Date=null, 
		$IdFactory=null,
		$Product01=null, 
		$Product02=null,
		$Product03=null,
		$Product04=null,
		$Product05=null,
		$Product06=null,
		$Product07=null,
		$Product08=null,
		$Product09=null,
		$Product10=null,
		$Product11=null,
		$Product12=null,
		$Product13=null,
		$Product14=null,
		$Product15=null		
	) {
		$this->Id = $Id;	
		$this->Name = $Name;
		$this->IdFactory = $IdFactory;
		$this->Date = $Date;
		$this->Product01 = $Product01;
		$this->Product02 = $Product02;
		$this->Product03 = $Product03;
		$this->Product04 = $Product04;
		$this->Product05 = $Product05;
		$this->Product06 = $Product06;
		$this->Product07 = $Product07;
		$this->Product08 = $Product08;
		$this->Product09 = $Product09;
		$this->Product10 = $Product10;
		$this->Product11 = $Product11;
		$this->Product12 = $Product12;
		$this->Product13 = $Product13;
		$this->Product14 = $Product14;
		$this->Product15 = $Product15;
        parent::__construct( $Id );
    }
    
	function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName() {
        return $this->Name;
    }
	
	function setIdFactory( $IdFactory) {
        $this->IdFactory = $IdFactory;
        $this->markDirty();
    }	
	function getIdFactory( ) {
        return $this->IdFactory;
    }
	
	function setDate( $Date) {
        $this->Date = $Date;
        $this->markDirty();
    }	
	function getDate( ) {
        return $this->Date;
    }
	
	function setProduct01( $Product01) {
        $this->Product01 = $Product01;
        $this->markDirty();
    }	
	function getProduct01( ) {
        return $this->Product01;
    }
	function getProduct01Print( ) {        
		$num = number_format($this->Product01, 0, ',', ' ');
		return $num;
    }
	
	function setProduct02( $Product02) {
        $this->Product02 = $Product02;
        $this->markDirty();
    }	
	function getProduct02( ) {
        return $this->Product02;
    }
	function getProduct02Print( ) {        
		$num = number_format($this->Product02, 0, ',', ' ');
		return $num;
    }
		
	function setProduct03( $Product03) {
        $this->Product03 = $Product03;
        $this->markDirty();
    }	
	function getProduct03( ) {
        return $this->Product03;
    }
	function getProduct03Print( ) {        
		$num = number_format($this->Product03, 0, ',', ' ');
		return $num;
    }
	
	function setProduct04( $Product04) {
        $this->Product04 = $Product04;
        $this->markDirty();
    }	
	function getProduct04( ) {
        return $this->Product04;
    }
	function getProduct04Print( ) {        
		$num = number_format($this->Product04, 0, ',', ' ');
		return $num;
    }
	
	function setProduct05( $Product05) {
        $this->Product05 = $Product05;
        $this->markDirty();
    }	
	function getProduct05( ) {
        return $this->Product05;
    }
	function getProduct05Print( ) {        
		$num = number_format($this->Product05, 0, ',', ' ');
		return $num;
    }
	
	function setProduct06( $Product06) {
        $this->Product06 = $Product06;
        $this->markDirty();
    }	
	function getProduct06( ) {
        return $this->Product06;
    }
	function getProduct06Print( ) {        
		$num = number_format($this->Product06, 0, ',', ' ');
		return $num;
    }
	
	function setProduct07( $Product07) {
        $this->Product07 = $Product07;
        $this->markDirty();
    }	
	function getProduct07( ) {
        return $this->Product07;
    }
	function getProduct07Print( ) {        
		$num = number_format($this->Product07, 0, ',', ' ');
		return $num;
    }
	
	function setProduct08( $Product08) {
        $this->Product08 = $Product08;
        $this->markDirty();
    }	
	function getProduct08( ) {
        return $this->Product08;
    }
	function getProduct08Print( ) {        
		$num = number_format($this->Product08, 0, ',', ' ');
		return $num;
    }
	
	function setProduct09( $Product09) {
        $this->Product09 = $Product09;
        $this->markDirty();
    }	
	function getProduct09( ) {
        return $this->Product09;
    }
	function getProduct09Print( ) {        
		$num = number_format($this->Product09, 0, ',', ' ');
		return $num;
    }
	
	function setProduct10( $Product10) {
        $this->Product10 = $Product10;
        $this->markDirty();
    }	
	function getProduct10( ) {
        return $this->Product10;
    }
	function getProduct10Print( ) {        
		$num = number_format($this->Product10, 0, ',', ' ');
		return $num;
    }
	
	function setProduct11( $Product11) {
        $this->Product11 = $Product11;
        $this->markDirty();
    }	
	function getProduct11( ) {
        return $this->Product11;
    }
	function getProduct11Print( ) {        
		$num = number_format($this->Product11, 0, ',', ' ');
		return $num;
    }
	
	function setProduct12( $Product12) {
        $this->Product12 = $Product12;
        $this->markDirty();
    }	
	function getProduct12( ) {
        return $this->Product12;
    }
	function getProduct12Print( ) {        
		$num = number_format($this->Product12, 0, ',', ' ');
		return $num;
    }
	
	function setProduct13( $Product13) {
        $this->Product13 = $Product13;
        $this->markDirty();
    }	
	function getProduct13( ) {
        return $this->Product13;
    }
	function getProduct13Print( ) {        
		$num = number_format($this->Product13, 0, ',', ' ');
		return $num;
    }
	
	function setProduct14( $Product14) {
        $this->Product14 = $Product14;
        $this->markDirty();
    }	
	function getProduct14( ) {
        return $this->Product14;
    }
	function getProduct14Print( ) {        
		$num = number_format($this->Product14, 0, ',', ' ');
		return $num;
    }
	
	function setProduct15( $Product15) {
        $this->Product15 = $Product15;
        $this->markDirty();
    }	
	function getProduct15( ) {
        return $this->Product15;
    }
	function getProduct15Print( ) {        
		$num = number_format($this->Product15, 0, ',', ' ');
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
	function getURLUpdateEmployeeProduce01( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=1&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce02( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=2&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce03( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=9&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce04( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=10&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce05( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=15&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce06( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=16&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce07( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=20&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce08( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=21&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce09( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=25&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce10( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=26&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce11( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=30&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce12( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=34&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce13( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=35&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce14( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=39&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
	function getURLUpdateEmployeeProduce15( ) {
		return "?cmd=UpdateEmployeeProduce&IdFactory=".$this->IdFactory."&IdProduct=40&IdEmployee=".$this->Id."&Date=".$this->Date;
    }
}
?>