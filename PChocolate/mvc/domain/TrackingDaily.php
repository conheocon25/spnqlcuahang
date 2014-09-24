<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class TrackingDaily extends Object{

    private $Id;
	private $IdTracking;
	private $Date;
	private $Selling;
	private $Import;
	private $Store;
	private $Paid;
	private $Collect;
	private $Time1;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id			= null,
		$IdTracking	= null, 
		$Date		= null, 
		$Selling	= null, 
		$Import		= null, 
		$Store		= null,
		$Paid		= null,
		$Collect	= null,
		$Time1		= null
	) {
        $this->Id 			= $Id;
		$this->IdTracking 	= $IdTracking;
		$this->Date 		= $Date;
		$this->Selling 		= $Selling;
		$this->Import 		= $Import;
		$this->Store 		= $Store;
		$this->Paid 		= $Paid;
		$this->Collect 		= $Collect;
		$this->Time1 		= $Time1;
		
        parent::__construct( $Id );
    }

    function getId() {return $this->Id;}	
		
    function setIdTracking( $IdTracking ) {$this->IdTracking = $IdTracking;$this->markDirty();}   
	function getIdTracking( ) {return $this->IdTracking;}
	
	function setIdResource( $IdResource ) {$this->IdResource = $IdResource;$this->markDirty();}   
	function getIdResource( ) {return $this->IdResource;}
	function getResource(){ $mResource = new \MVC\Mapper\Resource(); $Resource = $mResource->find( $this->getIdResource() ); return $Resource;}
	
	function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}   
	function getDate( ) {return $this->Date;}
	function getDatePrint( ) {$D = new \MVC\Library\Date($this->Date);return $D->getDateFormat();}
	function getDateShortPrint( ) {return date('d/m',strtotime($this->Date));}
	
	function setSelling( $Selling ) {$this->Selling = $Selling;$this->markDirty();}   
	function getSelling( ) {return $this->Selling;}
	function getSellingPrint( ){$N = new \MVC\Library\Number($this->Selling);return $N->formatCurrency();}
	
	function setImport( $Import ) {$this->Import = $Import;$this->markDirty();}   
	function getImport( ) {return $this->Import;}
	function getImportPrint( ) {$N = new \MVC\Library\Number($this->Import);return $N->formatCurrency();}
			
	function setStore( $Store ) {$this->Store = $Store;$this->markDirty();}   
	function getStore( ) {return $this->Store;}
	function getStorePrint( ) {$N = new \MVC\Library\Number($this->Store);return $N->formatCurrency();}
	
	function setPaid( $Paid ) {$this->Paid = $Paid; $this->markDirty();}   
	function getPaid( ) {return $this->Paid;}
	function getPaidPrint( ) {$N = new \MVC\Library\Number($this->Paid);return $N->formatCurrency();}
	
	function setCollect( $Collect ) {$this->Collect = $Collect; $this->markDirty();}
	function getCollect( ) {return $this->Collect;}
	function getCollectPrint( ) {$N = new \MVC\Library\Number($this->Collect);return $N->formatCurrency();}
			
	function isOne(){
		if ($this->getTime1()=="0000-00-00 00:00:00")
			return true;
		return false;	
	}
	
	function getValue(){
		$mTD 		= new \MVC\Mapper\TrackingDaily();
		$TDPreAll 	= $mTD->findByPre(array($this->getIdTracking(), $this->getDate()));
		if ($TDPreAll->count()==0){
			$OldValue 	= 0;
			$NewValue  	= 
							$OldValue + 
							$this->getSelling() + 
							$this->getCollect() + 
							$this->getStore() - 
							$this->getImport() - 
							$this->getPaid();
		}
		else{
			$OldValue 	= $TDPreAll->current()->getValue();
			$NewValue  	= 
							$OldValue + 
							$this->getSelling() + 
							$this->getCollect() + 
							($this->getStore() - $TDPreAll->current()->getStore()) - 
							$this->getImport() - 
							$this->getPaid();
		}			
		return $NewValue ;
	}
	function getValuePrint( ) {$N = new \MVC\Library\Number($this->getValue());return $N->formatCurrency();}
	
	function setTime1( $Time1 ) {$this->Time1 = $Time1; $this->markDirty();}
	function getTime1( ) {return $this->Time1;}
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	function getImportCount($IdResource){
		$mOD = new \MVC\Mapper\OrderImportDetail();
		$Count = $mOD->trackByCount( array($IdResource, $this->getDate(), $this->getDate()) );
		return $Count;
	}
	function getExportCount($IdResource){
		$mOD = new \MVC\Mapper\OrderExportDetail();
		$Count = $mOD->trackByCount( array($IdResource, $this->getDate(), $this->getDate()) );
		return $Count;
	}
			
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLReport()			{return "/report/".$this->getIdTracking()."/".$this->getId();}
	function getURLReportSellingCash(){return "/report/".$this->getIdTracking()."/".$this->getId()."/selling/cash";}
	function getURLReportSellingDebt(){return "/report/".$this->getIdTracking()."/".$this->getId()."/selling/debt";}
	function getURLReportStore()	{return "/report/".$this->getIdTracking()."/".$this->getId()."/store";}
	function getURLReportPaid()		{return "/report/".$this->getIdTracking()."/".$this->getId()."/paid";}
	function getURLReportCollect()	{return "/report/".$this->getIdTracking()."/".$this->getId()."/collect";}	
	function getURLReportCustomer()	{return "/report/".$this->getIdTracking()."/".$this->getId()."/customer";}
	function getURLReportSupplier()	{return "/report/".$this->getIdTracking()."/".$this->getId()."/supplier";}
		
	function getURLReportCustomerDetail($IdCustomer){
		return "/report/".$this->getIdTracking()."/".$this->getId()."/customer/".$IdCustomer;
	}	
	
	function getURLReportSupplierDetail($IdSupplier){
		return "/report/".$this->getIdTracking()."/".$this->getId()."/supplier/".$IdSupplier;
	}
	
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}	
}
?>