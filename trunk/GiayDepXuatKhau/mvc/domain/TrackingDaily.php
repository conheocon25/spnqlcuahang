<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class TrackingDaily extends Object{

    public $Id;
	public $IdTracking;
	public $Date;
	public $Import;
	public $Export;	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id			= null,
		$IdTracking	= null, 
		$Date		= null, 
		$Import		= null, 
		$Export		= null		
	) {
        $this->Id 				= $Id;
		$this->IdTracking 		= $IdTracking;
		$this->Date 			= $Date;		
		$this->Import 			= $Import;
		$this->Export 			= $Export;		
			
        parent::__construct( $Id );
    }

    function getId() {return $this->Id;}	
		
    function setIdTracking( $IdTracking ) {$this->IdTracking = $IdTracking;$this->markDirty();}   
	function getIdTracking( ) {return $this->IdTracking;}
	
	function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}   
	function getDate( ) {return $this->Date;}
	function getDatePrint( ) {$D = new \MVC\Library\Date($this->Date);return $D->getDateFormat();}
	function getDateShortPrint( ) {return date('d/m',strtotime($this->Date));}
	function getDayName(){
		$Arr = array(
			"Sunday"	=>"CN",
			"Monday"	=>"T.Hai",
			"Tuesday"	=>"T.Ba",
			"Wednesday"	=>"T.Tư",
			"Thursday"	=>"T.Năm",
			"Friday"	=>"T.Sáu",
			"Saturday"	=>"T.Bảy"
		);
		return $Arr[\date('l', strtotime( $this->Date))];
	}
	
	function getTDResourceAll(){
		$mTDR 	= new \MVC\Mapper\TrackingDailyResource();
		$TDRAll = $mTDR->findBy(array($this->getId()));
		return $TDRAll;
	}
	
	function setImport( $Import ) {$this->Import = $Import;$this->markDirty();}   
	function getImport( ) {return $this->Import;}
	function getImportPrint( ){$N = new \MVC\Library\Number($this->Import);return $N->formatCurrency(). " đ";}
	
	function setExport( $Export ) {$this->Export = $Export;$this->markDirty();}   
	function getExport( ) {return $this->Export;}
	function getExportPrint( ){$N = new \MVC\Library\Number($this->Export);return $N->formatCurrency(). " đ";}
	
	function getOrderImportAll(){
		$mOrder 	= new \MVC\Mapper\OrderImport();		
		$OrderAll 	= $mOrder->findByTracking(array($this->getDate(), $this->getDate()));
		return $OrderAll;
	}
		
	function getOrderExportAll(){
		$mOrder = new \MVC\Mapper\OrderExport();		
		$OrderAll 	= $mOrder->findByTracking(array($this->getDate(), $this->getDate()));
		return $OrderAll;
	}
	
	function getPre(){
		$mTD = new \MVC\Mapper\TrackingDaily();
		$TDAll = $mTD->findByPre(array($this->getIdTracking(), $this->getDate()));
		if ($TDAll->count()==0) return null;
		return $TDAll->current();
	}
	
	function getNext(){
		$mTD = new \MVC\Mapper\TrackingDaily();
		$TDAll = $mTD->findByNext(array($this->getIdTracking(), $this->getDate()));
		if ($TDAll->count()==0) return null;
		return $TDAll->current();
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLReport()				{return "/report/".$this->getIdTracking()."/".$this->getId();}
	function getURLReportGeneral()		{return "/report/".$this->getIdTracking()."/".$this->getId()."/general";}
	function getURLReportExport()		{return "/report/".$this->getIdTracking()."/".$this->getId()."/export";}
	function getURLReportImport()		{return "/report/".$this->getIdTracking()."/".$this->getId()."/import";}
	
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}	
}
?>