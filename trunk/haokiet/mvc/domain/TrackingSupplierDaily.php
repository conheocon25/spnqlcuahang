<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class TrackingSupplierDaily extends Object{

    public $Id;
	public $IdSupplier;
	public $Date;
	public $TicketImport;
    public $TicketBack;
	public $ValueImport;
    public $ValueBack;
    	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id			= null,
		$IdSupplier	= null, 
		$Date		= null, 
		$TicketImport	= null, 
		$TicketBack	= null,
		$ValueImport		= null, 
		$ValueBack		= null	
	) {
        $this->Id 			= $Id;
		$this->IdSupplier 	= $IdSupplier;
		$this->Date 		= $Date;
		$this->TicketImport 		= $TicketImport;
		$this->TicketBack 		= $TicketBack;		
		$this->ValueImport 		= $ValueImport;
		$this->ValueBack 		= $ValueBack;
			
        parent::__construct( $Id );
    }

    function getId() {return $this->Id;}	
		
    function setIdSupplier( $IdSupplier ) {$this->IdSupplier = $IdSupplier;$this->markDirty();}   
	function getIdSupplier( ) {return $this->IdSupplier;}
	function getSupplier( ) {
		$mSupplier = new \MVC\Mapper\Supplier();
		$Supplier = $mSupplier->find($this->IdSupplier);
		return $Supplier;
	}
	
	function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}   
	function getDate( ) {return $this->Date;}
	function getDatePrint( ) {$D = new \MVC\Library\Date($this->Date);return $D->getDateFormat();}
	function getDateShortPrint( ) {return date('d/m',strtotime($this->Date));}
		
	function setTicketImport( $TicketImport ) {$this->TicketImport = $TicketImport;$this->markDirty();}   
	function getTicketImport( ) {return $this->TicketImport;}
	function getTicketImportPrint( ){$N = new \MVC\Library\Number($this->TicketImport);return $N->formatCurrency();}
	
	function setTicketBack( $TicketBack ) {$this->TicketBack = $TicketBack;$this->markDirty();}   
	function getTicketBack( ) {return $this->TicketBack;}
	function getTicketBackPrint( ){$N = new \MVC\Library\Number($this->TicketBack);return $N->formatCurrency();}
	
	function getTicketD(){return $this->TicketImport - $this->TicketBack;}
	function getTicketDPrint(){
		$N = new \MVC\Library\Number($this->getTicketD());
		return 	$N->formatCurrency();
	}
	
	function setValueImport( $ValueImport ) {$this->ValueImport = $ValueImport;$this->markDirty();}   
	function getValueImport( ) {return $this->ValueImport;}
	function getValueImportPrint( ){$N = new \MVC\Library\Number($this->ValueImport);return $N->formatCurrency();}
	
	function setValueBack( $ValueBack ) {$this->ValueBack = $ValueBack;$this->markDirty();}   
	function getValueBack( ) {return $this->ValueBack;}
	function getValueBackPrint( ){$N = new \MVC\Library\Number($this->ValueBack);return $N->formatCurrency();}
	
	function getValueD(){return $this->ValueImport - $this->ValueBack;}
	function getValueDPrint(){
		$N = new \MVC\Library\Number($this->getValueD());
		return 	$N->formatCurrency();
	}
	
		
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