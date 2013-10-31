<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class PriceProductImportTracking extends Object{

    private $Id;
	private $Name;	
	
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
	private $Product16;
	private $Product17;
	private $Product18;
	private $Product19;
	private $Product20;
	private $Product21;
	private $Product22;
				
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$Name=null,		
		$Product01=null, $Product02=null, $Product03=null, $Product04=null,	$Product05=null, $Product06=null,
		$Product07=null, $Product08=null, $Product09=null, $Product10=null, $Product11=null, $Product12=null,
		$Product13=null, $Product14=null, $Product15=null, $Product16=null,	$Product17=null, $Product18=null,
		$Product19=null, $Product20=null, $Product21=null, $Product22=null
	) {
		$this->Id = $Id;	
		$this->Name = $Name;
		
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
		$this->Product16 = $Product16;
		$this->Product17 = $Product17;
		$this->Product18 = $Product18;
		$this->Product19 = $Product19;
		$this->Product20 = $Product20;
		$this->Product21 = $Product21;
		$this->Product22 = $Product22;
		
        parent::__construct( $Id );
    }
    
	function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName() {
        return $this->Name;
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
	
	function setProduct16( $Product16) {
        $this->Product16 = $Product16;
        $this->markDirty();
    }	
	function getProduct16( ) {
        return $this->Product16;
    }
	function getProduct16Print( ) {        
		$num = number_format($this->Product16, 0, ',', ' ');
		return $num;
    }
	
	function setProduct17( $Product17) {
        $this->Product17 = $Product17;
        $this->markDirty();
    }	
	function getProduct17( ) {
        return $this->Product17;
    }
	function getProduct17Print( ) {        
		$num = number_format($this->Product17, 0, ',', ' ');
		return $num;
    }
	
	function setProduct18( $Product18) {
        $this->Product18 = $Product18;
        $this->markDirty();
    }	
	function getProduct18( ) {
        return $this->Product18;
    }
	function getProduct18Print( ) {        
		$num = number_format($this->Product18, 0, ',', ' ');
		return $num;
    }
	
	function setProduct19( $Product19) {
        $this->Product19 = $Product19;
        $this->markDirty();
    }	
	function getProduct19( ) {
        return $this->Product19;
    }
	function getProduct19Print( ) {        
		$num = number_format($this->Product19, 0, ',', ' ');
		return $num;
    }
	
	function setProduct20( $Product20) {
        $this->Product20 = $Product20;
        $this->markDirty();
    }	
	function getProduct20( ) {
        return $this->Product20;
    }
	function getProduct20Print( ) {        
		$num = number_format($this->Product20, 0, ',', ' ');
		return $num;
    }
	
	function setProduct21( $Product21) {
        $this->Product21 = $Product21;
        $this->markDirty();
    }	
	function getProduct21( ) {
        return $this->Product21;
    }
	function getProduct21Print( ) {        
		$num = number_format($this->Product21, 0, ',', ' ');
		return $num;
    }
	
	function setProduct22( $Product22) {
        $this->Product22 = $Product22;
        $this->markDirty();
    }	
	function getProduct22( ) {
        return $this->Product22;
    }
	function getProduct22Print( ) {        
		$num = number_format($this->Product22, 0, ',', ' ');
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
	function getURLUpdatePPI01( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=1";
    }
	function getURLUpdatePPI02( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=2";
    }
	function getURLUpdatePPI03( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=9";
    }
	function getURLUpdatePPI04( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=10";
    }
	function getURLUpdatePPI05( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=15";
    }
	function getURLUpdatePPI06( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=16";
    }
	function getURLUpdatePPI07( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=20";
    }
	function getURLUpdatePPI08( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=21";
    }
	function getURLUpdatePPI09( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=25";
    }
	function getURLUpdatePPI10( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=26";
    }
	function getURLUpdatePPI11( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=30";
    }
	function getURLUpdatePPI12( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=34";
    }
	function getURLUpdatePPI13( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=35";
    }
	function getURLUpdatePPI14( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=39";
    }
	function getURLUpdatePPI15( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=40";
    }
	function getURLUpdatePPI16( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=48";
    }
	function getURLUpdatePPI17( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=49";
    }
	function getURLUpdatePPI18( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=50";
    }
	function getURLUpdatePPI19( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=51";
    }
	function getURLUpdatePPI20( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=52";
    }
	function getURLUpdatePPI21( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=53";
    }
	function getURLUpdatePPI22( ) {
		return "?cmd=UpdatePriceProductImport&IdFactory=".$this->Id."&IdProduct=54";
    }
	
}
?>