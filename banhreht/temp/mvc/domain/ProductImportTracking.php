<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class ProductImportTracking extends Object{
    private $Id;
	private $Name;
	private $Date;	
	private $Product01; private $Product02; private $Product03; private $Product04;	private $Product05;	private $Product06;
	private $Product07;	private $Product08;	private $Product09;	private $Product10;	private $Product11;	private $Product12;
	private $Product13;	private $Product14;	private $Product15;	private $Product16;	private $Product17;	private $Product18;
	private $Product19; private $Product20; private $Product21; private $Product22;
				
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$Name=null, 
		$Date=null, 		
		$Product01=0,$Product02=0,$Product03=0,$Product04=0,$Product05=0,$Product06=0,
		$Product07=0,$Product08=0,$Product09=0,$Product10=0,$Product11=0,$Product12=0,
		$Product13=0,$Product14=0,$Product15=0,$Product16=0,$Product17=0,$Product18=0,
		$Product19=0,$Product20=0, $Product21=0, $Product22=0
	) {
		$this->Id = $Id;	
		$this->Name = $Name;		
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
	function getDatePrint1( ) {
        $date = new \DateTime($this->Date);
		return $date->format('d/m');
    }
	
	function setProduct01( $Product01) {
        $this->Product01 = $Product01;
        $this->markDirty();
    }	
	function getProduct01( ) {
		if (!isset($this->Product01))
			return 0;
        return $this->Product01;
    }
	function getProduct01Print( ) {
		if ($this->Product01==0 || !isset($this->Product01))
			return "0";
		$num = number_format($this->Product01, 0, ',', '.');
		return $num;
    }
	
	function setProduct02( $Product02) {
        $this->Product02 = $Product02;
        $this->markDirty();
    }	
	function getProduct02( ) {
		if (!isset($this->Product02))
			return 0;
        return $this->Product02;
    }
	function getProduct02Print( ) {
		if ($this->Product02==0|| !isset($this->Product01))
			return "0";
		$num = number_format($this->Product02, 0, ',', '.');
		return $num;
    }
		
	function setProduct03( $Product03) {
        $this->Product03 = $Product03;
        $this->markDirty();
    }	
	function getProduct03( ) {
		if (!isset($this->Product03))
			return 0;
        return $this->Product03;
    }
	function getProduct03Print( ) {
		if ($this->Product03==0)
			return "0";
		$num = number_format($this->Product03, 0, ',', '.');
		return $num;
    }
	
	function setProduct04( $Product04) {
        $this->Product04 = $Product04;
        $this->markDirty();
    }	
	function getProduct04( ) {
		if (!isset($this->Product04))
			return 0;
        return $this->Product04;
    }
	function getProduct04Print( ) {
		if ($this->Product04==0)
			return "0";
			
		$num = number_format($this->Product04, 0, ',', '.');
		return $num;
    }
	
	function setProduct05( $Product05) {
        $this->Product05 = $Product05;
        $this->markDirty();
    }	
	function getProduct05( ) {
		if (!isset($this->Product05))
			return 0;
        return $this->Product05;
    }
	function getProduct05Print( ) {        
		if ($this->Product05==0)
			return "0";
			
		$num = number_format($this->Product05, 0, ',', '.');
		return $num;
    }
	
	function setProduct06( $Product06) {
        $this->Product06 = $Product06;
        $this->markDirty();
    }	
	function getProduct06( ) {
		if (!isset($this->Product06))
			return 0;
        return $this->Product06;
    }
	function getProduct06Print( ) {
		if ($this->Product06==0)
			return "0";
		$num = number_format($this->Product06, 0, ',', '.');
		return $num;
    }
	
	function setProduct07( $Product07) {
        $this->Product07 = $Product07;
        $this->markDirty();
    }	
	function getProduct07( ) {
		if (!isset($this->Product07))
			return 0;
        return $this->Product07;
    }
	function getProduct07Print( ) {
		if ($this->Product07==0)
			return "0";
			
		$num = number_format($this->Product07, 0, ',', '.');
		return $num;
    }
	
	function setProduct08( $Product08) {
        $this->Product08 = $Product08;
        $this->markDirty();
    }	
	function getProduct08( ) {
		if (!isset($this->Product08))
			return 0;
        return $this->Product08;
    }
	function getProduct08Print( ) {
		if ($this->Product08==0)
			return "0";
		$num = number_format($this->Product08, 0, ',', '.');
		return $num;
    }
	
	function setProduct09( $Product09) {
        $this->Product09 = $Product09;
        $this->markDirty();
    }	
	function getProduct09( ) {
		if (!isset($this->Product09))
			return 0;
        return $this->Product09;
    }
	function getProduct09Print( ) {        
		if ($this->Product09==0)
			return "0";
		$num = number_format($this->Product09, 0, ',', '.');
		return $num;
    }
	
	function setProduct10( $Product10) {
        $this->Product10 = $Product10;
        $this->markDirty();
    }	
	function getProduct10( ) {
		if (!isset($this->Product10))
			return 0;
        return $this->Product10;
    }
	function getProduct10Print( ) {        
		if ($this->Product10==0)
			return "0";
			
		$num = number_format($this->Product10, 0, ',', '.');
		return $num;
    }
	
	function setProduct11( $Product11) {
        $this->Product11 = $Product11;
        $this->markDirty();
    }	
	function getProduct11( ) {
		if (!isset($this->Product11))
			return 0;
        return $this->Product11;
    }
	function getProduct11Print( ) {        
		if ($this->Product11==0)
			return "0";
		$num = number_format($this->Product11, 0, ',', '.');
		return $num;
    }
	
	function setProduct12( $Product12) {
        $this->Product12 = $Product12;
        $this->markDirty();
    }	
	function getProduct12( ) {
		if (!isset($this->Product12))
			return 0;
        return $this->Product12;
    }
	function getProduct12Print( ) {        
		if ($this->Product12==0)
			return "0";
		$num = number_format($this->Product12, 0, ',', '.');
		return $num;
    }
	
	function setProduct13( $Product13) {
        $this->Product13 = $Product13;
        $this->markDirty();
    }	
	function getProduct13( ) {
		if (!isset($this->Product13))
			return 0;
        return $this->Product13;
    }
	function getProduct13Print( ) {
		if ($this->Product13==0)
			return "0";
		$num = number_format($this->Product13, 0, ',', '.');
		return $num;
    }
	
	function setProduct14( $Product14) {
        $this->Product14 = $Product14;
        $this->markDirty();
    }	
	function getProduct14( ) {
		if (!isset($this->Product14))
			return 0;
        return $this->Product14;
    }
	function getProduct14Print( ) {        
		if ($this->Product14==0)
			return "0";
		$num = number_format($this->Product14, 0, ',', '.');
		return $num;
    }
	
	function setProduct15( $Product15) {
        $this->Product15 = $Product15;
        $this->markDirty();
    }	
	function getProduct15( ) {
		if (!isset($this->Product15))
			return 0;
        return $this->Product15;
    }
	function getProduct15Print( ) {
		if ($this->Product15==0)
			return "0";
		$num = number_format($this->Product15, 0, ',', '.');
		return $num;
    }
	
	function setProduct16( $Product16) {
        $this->Product16 = $Product16;
        $this->markDirty();
    }	
	function getProduct16( ) {
		if (!isset($this->Product16))
			return 0;
        return $this->Product16;
    }
	function getProduct16Print( ) {
		if ($this->Product16==0)
			return "0";
		$num = number_format($this->Product16, 0, ',', '.');
		return $num;
    }
	
	function setProduct17( $Product17) {
        $this->Product17 = $Product17;
        $this->markDirty();
    }	
	function getProduct17( ) {
		if (!isset($this->Product17))
			return 0;
        return $this->Product17;
    }
	function getProduct17Print( ) {
		if ($this->Product17==0)
			return "0";
		$num = number_format($this->Product17, 0, ',', '.');
		return $num;
    }
	
	function setProduct18( $Product18) {
        $this->Product18 = $Product18;
        $this->markDirty();
    }	
	function getProduct18( ) {
		if (!isset($this->Product18))
			return 0;
        return $this->Product18;
    }
	function getProduct18Print( ) {
		if ($this->Product18==0)
			return "0";
		$num = number_format($this->Product18, 0, ',', '.');
		return $num;
    }
	
	function setProduct19( $Product19) {
        $this->Product19 = $Product19;
        $this->markDirty();
    }	
	function getProduct19( ) {
		if (!isset($this->Product19))
			return 0;
        return $this->Product19;
    }
	function getProduct19Print( ) {
		if ($this->Product19==0)
			return "0";
		$num = number_format($this->Product19, 0, ',', '.');
		return $num;
    }
	
	function setProduct20( $Product20) {
        $this->Product20 = $Product20;
        $this->markDirty();
    }	
	function getProduct20( ) {
		if (!isset($this->Product20))
			return 0;
        return $this->Product20;
    }
	function getProduct20Print( ) {
		if ($this->Product20==0)
			return "0";
		$num = number_format($this->Product20, 0, ',', '.');
		return $num;
    }
	
	function setProduct21( $Product21) {
        $this->Product21 = $Product21;
        $this->markDirty();
    }	
	function getProduct21( ) {
		if (!isset($this->Product21))
			return 0;
        return $this->Product21;
    }
	function getProduct21Print( ) {
		if ($this->Product21==0)
			return "0";
		$num = number_format($this->Product21, 0, ',', '.');
		return $num;
    }
	
	function setProduct22( $Product22) {
        $this->Product22 = $Product22;
        $this->markDirty();
    }	
	function getProduct22( ) {
		if (!isset($this->Product22))
			return 0;
        return $this->Product22;
    }
	function getProduct22Print( ) {
		if ($this->Product22==0)
			return "0";
		$num = number_format($this->Product22, 0, ',', '.');
		return $num;
    }
		
	function getSum( ) {
		$Sum = 	$this->Product01 + $this->Product02 + $this->Product03 + $this->Product04 + $this->Product05 + 
				$this->Product06 + $this->Product07 + $this->Product08 + $this->Product09 + $this->Product10 +
				$this->Product11 + $this->Product12 + $this->Product13 + $this->Product14 + $this->Product15 + 
				$this->Product16 + $this->Product17 + $this->Product18 + $this->Product19 + $this->Product20 + 
				$this->Product21 + $this->Product22;
        return $Sum;
    }
	function getSumPrint( ) {
		if ($this->getSum()==0)
			return "0";
		$num = number_format($this->getSum(), 0, ',', '.');
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
	function getURLUpdateProductImport01( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=1&Date=".$this->Date;
    }
	function getURLUpdateProductImport02( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=2&Date=".$this->Date;
    }
	function getURLUpdateProductImport03( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=9&Date=".$this->Date;
    }
	function getURLUpdateProductImport04( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=10&Date=".$this->Date;
    }
	function getURLUpdateProductImport05( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=15&Date=".$this->Date;
    }
	function getURLUpdateProductImport06( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=16&Date=".$this->Date;
    }
	function getURLUpdateProductImport07( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=20&Date=".$this->Date;
    }
	function getURLUpdateProductImport08( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=21&Date=".$this->Date;
    }
	function getURLUpdateProductImport09( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=25&Date=".$this->Date;
    }
	function getURLUpdateProductImport10( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=26&Date=".$this->Date;
    }
	function getURLUpdateProductImport11( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=30&Date=".$this->Date;
    }
	function getURLUpdateProductImport12( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=34&Date=".$this->Date;
    }
	function getURLUpdateProductImport13( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=35&Date=".$this->Date;
    }
	function getURLUpdateProductImport14( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=39&Date=".$this->Date;
    }
	function getURLUpdateProductImport15( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=40&Date=".$this->Date;
    }
	function getURLUpdateProductImport16( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=48&Date=".$this->Date;
    }
	function getURLUpdateProductImport17( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=49&Date=".$this->Date;
    }
	function getURLUpdateProductImport18( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=50&Date=".$this->Date;
    }
	function getURLUpdateProductImport19( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=51&Date=".$this->Date;
    }
	function getURLUpdateProductImport20( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=52&Date=".$this->Date;
    }
	function getURLUpdateProductImport21( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=53&Date=".$this->Date;
    }
	function getURLUpdateProductImport22( ) {
		return "?cmd=UpdateProductImport&IdFactory=".$this->Id."&IdProduct=54&Date=".$this->Date;
    }
	
}
?>