<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class ProductExportTracking extends Object{
    private $Id;
	private $Name;
	private $Date;	
	private $Product01; private $Product02;	private $Product03;	private $Product04;	private $Product05;	private $Product06;	private $Product07;
	private $Product08;	private $Product09;	private $Product10;	private $Product11;	private $Product12;	private $Product13;	private $Product14;
	private $Product15;	private $Product16;	private $Product17;	private $Product18;	private $Product19;	private $Product20;	private $Product21;
	private $Product22;	private $Product23;	private $Product24;	private $Product25;	private $Product26; private $Product27; private $Product28;
	private $Product29; private $Product30; private $Product31; private $Product32; private $Product33; private $Product34; private $Product35;
	
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null,
		$Name=null,
		$Date=null,
		$Product01=null, $Product02=null, $Product03=null, $Product04=null, $Product05=null, $Product06=null, $Product07=null,  
		$Product08=null, $Product09=null, $Product10=null, $Product11=null, $Product12=null, $Product13=null, $Product14=null, 
		$Product15=null, $Product16=null, $Product17=null, $Product18=null, $Product19=null, $Product20=null, $Product21=null, 
		$Product22=null, $Product23=null, $Product24=null, $Product25=null, $Product26=null, $Product27=null, $Product28=null,
		$Product29=null, $Product30=null, $Product31=null, $Product32=null, $Product33=null, $Product34=null, $Product35=null
	) {
		$this->Id = $Id;	
		$this->Name = $Name;		
		$this->Date = $Date;
		$this->Product01 = $Product01; $this->Product02 = $Product02; $this->Product03 = $Product03; $this->Product04 = $Product04;
		$this->Product05 = $Product05; $this->Product06 = $Product06; $this->Product07 = $Product07; $this->Product08 = $Product08;
		$this->Product09 = $Product09; $this->Product10 = $Product10; $this->Product11 = $Product11; $this->Product12 = $Product12;	
		$this->Product13 = $Product13; $this->Product14 = $Product14; $this->Product15 = $Product15; $this->Product16 = $Product16;
		$this->Product17 = $Product17; $this->Product18 = $Product18; $this->Product19 = $Product19; $this->Product20 = $Product20; 
		$this->Product21 = $Product21; $this->Product22 = $Product22; $this->Product23 = $Product23; $this->Product24 = $Product24;
		$this->Product25 = $Product25; $this->Product26 = $Product26; $this->Product27 = $Product27; $this->Product28 = $Product28;
		$this->Product29 = $Product29; $this->Product30 = $Product30; $this->Product31 = $Product31; $this->Product32 = $Product32;
		$this->Product33 = $Product33; $this->Product34 = $Product34; $this->Product35 = $Product35;
		
        parent::__construct( $Id );
    }
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
	function getId( ) {
        return $this->Id;     
    }
	
	function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName() {
        return $this->Name;
    }
	function getView($index) {        		
		return $this->Views[$index];
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
		$num = number_format($this->Product22, 0, ',', '.');
		return $num;
    }
	
	
	function setProduct23( $Product23) {
        $this->Product23 = $Product23;
        $this->markDirty();
    }	
	function getProduct23( ) {
		if (!isset($this->Product23))
			return 0;
        return $this->Product23;
    }
	function getProduct23Print( ) {        
		$num = number_format($this->Product23, 0, ',', '.');
		return $num;
    }
	
	
	function setProduct24( $Product24) {
        $this->Product24 = $Product24;
        $this->markDirty();
    }	
	function getProduct24( ) {
		if (!isset($this->Product24))
			return 0;
        return $this->Product24;
    }
	function getProduct24Print( ) {        
		$num = number_format($this->Product24, 0, ',', '.');
		return $num;
    }
	
	
	function setProduct25( $Product25) {
        $this->Product25 = $Product25;
        $this->markDirty();
    }	
	function getProduct25( ) {
		if (!isset($this->Product25))
			return 0;
        return $this->Product25;
    }
	function getProduct25Print( ) {        
		$num = number_format($this->Product25, 0, ',', '.');
		return $num;
    }
		
	function setProduct26( $Product26) {
        $this->Product26 = $Product26;
        $this->markDirty();
    }	
	function getProduct26( ) {
		if (!isset($this->Product26))
			return 0;
        return $this->Product26;
    }
	function getProduct26Print( ) {        
		$num = number_format($this->Product26, 0, ',', '.');
		return $num;
    }
		
	function setProduct27( $Product27) {
        $this->Product27 = $Product27;
        $this->markDirty();
    }	
	function getProduct27( ) {
		if (!isset($this->Product27))
			return 0;
        return $this->Product27;
    }
	function getProduct27Print( ) {        
		$num = number_format($this->Product27, 0, ',', '.');
		return $num;
    }
	
	function setProduct28( $Product28) {
        $this->Product28 = $Product28;
        $this->markDirty();
    }	
	function getProduct28( ) {
		if (!isset($this->Product28))
			return 0;
        return $this->Product28;
    }
	function getProduct28Print( ) {        
		$num = number_format($this->Product28, 0, ',', '.');
		return $num;
    }
	
	function setProduct29( $Product29) {
        $this->Product29 = $Product29;
        $this->markDirty();
    }	
	function getProduct29( ) {
		if (!isset($this->Product29))
			return 0;
        return $this->Product29;
    }
	function getProduct29Print( ) {        
		$num = number_format($this->Product29, 0, ',', '.');
		return $num;
    }
	
	function setProduct30( $Product30) {
        $this->Product30 = $Product30;
        $this->markDirty();
    }	
	function getProduct30( ) {
		if (!isset($this->Product30))
			return 0;
        return $this->Product30;
    }
	function getProduct30Print( ) {        
		$num = number_format($this->Product30, 0, ',', '.');
		return $num;
    }
	
	function setProduct31( $Product31) {
        $this->Product31 = $Product31;
        $this->markDirty();
    }	
	function getProduct31( ) {
		if (!isset($this->Product31))
			return 0;
        return $this->Product31;
    }
	function getProduct31Print( ) {        
		$num = number_format($this->Product31, 0, ',', '.');
		return $num;
    }
	
	function setProduct32( $Product32) {
        $this->Product32 = $Product32;
        $this->markDirty();
    }	
	function getProduct32( ) {
		if (!isset($this->Product32))
			return 0;
        return $this->Product32;
    }
	function getProduct32Print( ) {        
		$num = number_format($this->Product32, 0, ',', '.');
		return $num;
    }
	
	function setProduct33( $Product33) {
        $this->Product33 = $Product33;
        $this->markDirty();
    }	
	function getProduct33( ) {
		if (!isset($this->Product33))
			return 0;
        return $this->Product33;
    }
	function getProduct33Print( ) {        
		$num = number_format($this->Product33, 0, ',', '.');
		return $num;
    }
	
	function setProduct34( $Product34) {
        $this->Product34 = $Product34;
        $this->markDirty();
    }	
	function getProduct34( ) {
		if (!isset($this->Product34))
			return 0;
        return $this->Product34;
    }
	function getProduct34Print( ) {        
		$num = number_format($this->Product34, 0, ',', '.');
		return $num;
    }
	
	function setProduct35( $Product35) {
        $this->Product35 = $Product35;
        $this->markDirty();
    }	
	function getProduct35( ) {
		if (!isset($this->Product35))
			return 0;
        return $this->Product35;
    }
	function getProduct35Print( ) {        
		$num = number_format($this->Product35, 0, ',', '.');
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
}
?>