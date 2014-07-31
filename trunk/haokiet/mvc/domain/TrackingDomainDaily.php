<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class TrackingDomainDaily extends Object{

    public $Id;
	public $IdDomain;
	public $Date;
	public $TicketSelling;
    public $TicketSellingBack;
    public $ValueSelling;
    public $ValueSellingBack;
		
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id			= null,
		$IdDomain	= null, 
		$Date		= null, 
		$TicketSelling	= null, 
		$TicketSellingBack		= null, 
		$ValueSelling	= null,
		$ValueSellingBack		= null	
	) {
        $this->Id 			= $Id;
		$this->IdDomain 	= $IdDomain;
		$this->Date 		= $Date;
		$this->TicketSelling = $TicketSelling;
		$this->TicketSellingBack 	= $TicketSellingBack;
		$this->ValueSelling 	= $ValueSelling;
		$this->ValueSellingBack 	= $ValueSellingBack;
			
        parent::__construct( $Id );
    }

    function getId() {return $this->Id;}	
		
    function setIdDomain( $IdDomain ) {$this->IdDomain = $IdDomain;$this->markDirty();}   
	function getIdDomain( ) {return $this->IdDomain;}
	function getDomain( ) {
		$mDomain = new \MVC\Mapper\Domain();
		$Domain = $mDomain->find($this->IdDomain);
		return $Domain;
	}
	
	function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}   
	function getDate( ) {return $this->Date;}
	function getDatePrint( ) {$D = new \MVC\Library\Date($this->Date);return $D->getDateFormat();}
	function getDateShortPrint( ) {return date('d/m',strtotime($this->Date));}
		
	function setTicketSelling( $TicketSelling ) {$this->TicketSelling = $TicketSelling;$this->markDirty();}   
	function getTicketSelling( ) {return $this->TicketSelling;}
	function getTicketSellingPrint( ){$N = new \MVC\Library\Number($this->TicketSelling);return $N->formatCurrency();}
	
	function setTicketSellingBack( $TicketSellingBack ) {$this->TicketSellingBack = $TicketSellingBack;$this->markDirty();}   
	function getTicketSellingBack( ) {return $this->TicketSellingBack;}
	function getTicketSellingBackPrint( ){$N = new \MVC\Library\Number($this->TicketSellingBack);return $N->formatCurrency();}
	
	function getTicketSellingD(){return $this->TicketSelling - $this->TicketSellingBack;}
	function getTicketSellingDPrint(){
		$N = new \MVC\Library\Number($this->getTicketSellingD());
		return 	$N->formatCurrency();
	}
	
	function setValueSelling( $ValueSelling ) {$this->ValueSelling = $ValueSelling; $this->markDirty();}   
	function getValueSelling( ) {return $this->ValueSelling;}
	function getValueSellingPrint( ) {$N = new \MVC\Library\Number($this->ValueSelling);return $N->formatCurrency();}
	
	function setValueSellingBack( $ValueSellingBack ) {$this->ValueSellingBack = $ValueSellingBack; $this->markDirty();}   
	function getValueSellingBack( ) {return $this->ValueSellingBack;}
	function getValueSellingBackPrint( ) {$N = new \MVC\Library\Number($this->ValueSellingBack);return $N->formatCurrency();}
	
	function setValueSellingD( $ValueSellingD ) {$this->ValueSellingBackD = $ValueSellingBackD; $this->markDirty();}   	
	function getValueSellingDPrint( ) {$N = new \MVC\Library\Number($this->ValueSellingBackD);return $N->formatCurrency();}
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>