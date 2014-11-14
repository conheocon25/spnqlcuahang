<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class TrackingDailyResource extends Object{

    private $Id;	
	private $IdTD;
	private $IdResource;
	private $CountOld;	
	private $CountImport;
	private $CountExport;
	private $Price;	
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id=null, 	
		$IdTD=null, 
		$IdResource=null,
		$CountOld=null,
		$CountImport=null,
		$CountExport=null,
		$Price=null		
	) {
        $this->Id 			= $Id;
		$this->IdTD 		= $IdTD;
		$this->IdResource 	= $IdResource;
		$this->CountOld 	= $CountOld;
		$this->CountImport 	= $CountImport;
		$this->CountExport 	= $CountExport;
		$this->Price 		= $Price;
				
        parent::__construct( $Id );
    }

    function getId() {return $this->Id;}
	    	
	function setIdTD( $IdTD ) {$this->IdTD = $IdTD;$this->markDirty();}
	function getIdTD( ) {return $this->IdTD;}
	
	function setIdResource( $IdResource ) {$this->IdResource = $IdResource;$this->markDirty();}   
	function getIdResource( ) {return $this->IdResource;}
	function getResource(){ $mResource = new \MVC\Mapper\Resource(); $Resource = $mResource->find( $this->getIdResource() ); return $Resource;}
	
	function setCountOld( $CountOld ) {$this->CountOld = $CountOld; $this->markDirty();}   
	function getCountOld( ) {return $this->CountOld;}
	function getCountOldPrint( ) { return \round($this->CountOld,1);}
	
	function setCountImport( $CountImport ) {$this->CountImport = $CountImport; $this->markDirty();}   
	function getCountImport( ) {return $this->CountImport;}
	function getCountImportPrint( ) { return \round($this->CountImport,1);}
	
	function setCountExport( $CountExport ) {$this->CountExport = $CountExport; $this->markDirty();}   
	function getCountExport( ) {return $this->CountExport;}
	function getCountExportPrint( ) { return \round($this->CountExport,1);}
	
	function setPrice( $Price ) {$this->Price = $Price;$this->markDirty();}   
	function getPrice( ) {return $this->Price;}
	function getPricePrint( ) {$N = new \MVC\Library\Number($this->Price);return $N->formatCurrency();}
	
	function setCountNew( $CountNew ) {$this->CountNew = $CountNew; $this->markDirty();}   
	function getCountNew( ) {return $this->CountOld + $this->CountImport - $this->CountExport;}
	function getCountNewPrint( ) { return \round($this->getCountNew(),1);}
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
		
	//--------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}	
}
?>