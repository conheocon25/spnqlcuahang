<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class TrackingDaily extends Object{

    public $Id;
	public $IdTracking;
	public $Date;
	public $TicketImport;
	public $TicketImportBack;
	public $TicketSelling;
	public $TicketSellingBack;
	public $TicketSellingValue;
    public $PaidTicket;
    public $PaidDebt;
	public $PaidTicketRemain;
    public $PaidDebtRemain;
	public $Debt;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id			= null,
		$IdTracking	= null, 
		$Date		= null, 
		$TicketImport		= null, 
		$TicketImportBack	= null, 
		$ValueImport		= null, 
		$ValueImportBack	= null, 
		$TicketSelling		= null, 
		$TicketSellingBack	= null, 
		$TicketSellingValue	= null, 
		$PaidTicket			= null,
		$PaidDebt			= null,
		$Debt				= null,
		$PaidTicketRemain	= null,
		$PaidDebtRemain		= null
	) {
        $this->Id 						= $Id;
		$this->IdTracking 				= $IdTracking;
		$this->Date 					= $Date;
		$this->TicketImport 			= $TicketImport;
		$this->TicketImportBack 		= $TicketImportBack;
		$this->ValueImport 				= $ValueImport;
		$this->ValueImportBack 			= $ValueImportBack;
		$this->TicketSelling 			= $TicketSelling;
		$this->TicketSellingBack 		= $TicketSellingBack;
		$this->TicketSellingValue 		= $TicketSellingValue;
		$this->PaidTicket 				= $PaidTicket;
		$this->PaidDebt 				= $PaidDebt;
		$this->Debt 					= $Debt;
		$this->PaidTicketRemain			= $PaidTicketRemain;
		$this->PaidDebtRemain			= $PaidDebtRemain;
			
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
	
	function setTicketImport( $TicketImport ) {$this->TicketImport = $TicketImport;$this->markDirty();}   
	function getTicketImport( ) {return $this->TicketImport;}
	function getTicketImportPrint( ){$N = new \MVC\Library\Number($this->TicketImport);return $N->formatCurrency();}
	
	function setTicketImportBack( $TicketImportBack ) {$this->TicketImportBack = $TicketImportBack;$this->markDirty();}   
	function getTicketImportBack( ) {return $this->TicketImportBack;}
	function getTicketImportBackPrint( ){$N = new \MVC\Library\Number($this->TicketImportBack);return $N->formatCurrency();}
	
	function getTicketImportD( ) {return $this->TicketImport - $this->TicketImportBack;}
	function getTicketImportDPrint( ){$N = new \MVC\Library\Number($this->getTicketImportD());return $N->formatCurrency();}
	
	function setTicketSelling( $TicketSelling ) {$this->TicketSelling = $TicketSelling;$this->markDirty();}   
	function getTicketSelling( ) {return $this->TicketSelling;}
	function getTicketSellingPrint( ){$N = new \MVC\Library\Number($this->TicketSelling);return $N->formatCurrency();}

	function setValueImport( $ValueImport ) {$this->ValueImport = $ValueImport;$this->markDirty();}   
	function getValueImport( ) {return $this->ValueImport;}
	function getValueImportPrint( ){$N = new \MVC\Library\Number($this->ValueImport);return $N->formatCurrency();}
	
	function setValueImportBack( $ValueImportBack ) {$this->ValueImportBack = $ValueImportBack;$this->markDirty();}   
	function getValueImportBack( ) {return $this->ValueImportBack;}
	function getValueImportBackPrint( ){$N = new \MVC\Library\Number($this->ValueImportBack);return $N->formatCurrency();}
	
	function getValueImportD( ) {return $this->ValueImport - $this->ValueImportBack;}
	function getValueImportDPrint( ){$N = new \MVC\Library\Number($this->getValueImportD());return $N->formatCurrency();}
	
	function setTicketSellingBack( $TicketSellingBack ) {$this->TicketSellingBack = $TicketSellingBack;$this->markDirty();}   
	function getTicketSellingBack( ) {return $this->TicketSellingBack;}
	function getTicketSellingBackPrint( ){$N = new \MVC\Library\Number($this->TicketSellingBack);return $N->formatCurrency();}

	function setTicketSellingValue( $TicketSellingValue ) {$this->TicketSellingValue = $TicketSellingValue;$this->markDirty();}   
	function getTicketSellingValue( ) {return $this->TicketSellingValue;}
	function getTicketSellingValuePrint( ){$N = new \MVC\Library\Number($this->TicketSellingValue);return $N->formatCurrency();}
	
	function getTicketSellingD( ) {return $this->TicketSelling - $this->TicketSellingBack;}
	function getTicketSellingDPrint( ){$N = new \MVC\Library\Number($this->getTicketSellingD());return $N->formatCurrency();}

	function getTicketBack( ) {return $this->TicketSellingBack + $this->TicketImportBack;}
	function getTicketBackPrint( ){$N = new \MVC\Library\Number($this->getTicketBack());return $N->formatCurrency();}
	
	function setPaidTicket( $PaidTicket ) {$this->PaidTicket = $PaidTicket; $this->markDirty();}   
	function getPaidTicket( ) {return $this->PaidTicket;}
	function getPaidTicketPrint( ) {$N = new \MVC\Library\Number($this->PaidTicket);return $N->formatCurrency();}
	
	function setPaidDebt( $PaidDebt ) {$this->PaidDebt = $PaidDebt; $this->markDirty();}   
	function getPaidDebt( ) {return $this->PaidDebt;}
	function getPaidDebtPrint( ) {$N = new \MVC\Library\Number($this->PaidDebt);return $N->formatCurrency();}
	
	function setDebt( $Debt ) {$this->Debt = $Debt; $this->markDirty();}
	function getDebt( ) {return $this->Debt;}
	function getDebtPrint( ) {$N = new \MVC\Library\Number($this->Debt);return $N->formatCurrency();}
	
	function setPaidTicketRemain( $PaidTicketRemain ) {$this->PaidTicketRemain = $PaidTicketRemain; $this->markDirty();}   
	function getPaidTicketRemain( ) {return $this->PaidTicketRemain;}
	function getPaidTicketRemainPrint( ) {$N = new \MVC\Library\Number($this->PaidTicketRemain);return $N->formatCurrency();}
	
	function setPaidDebtRemain( $PaidDebtRemain ) {$this->PaidDebtRemain = $PaidDebtRemain; $this->markDirty();}   
	function getPaidDebtRemain( ) {return $this->PaidDebtRemain;}
	function getPaidDebtRemainPrint( ) {$N = new \MVC\Library\Number($this->PaidDebtRemain);return $N->formatCurrency();}
	
	function getValue(){return $this->PaidTicketRemain + $this->PaidDebtRemain;}
	function getValuePrint(){
		$N = new \MVC\Library\Number($this->getValue());
		return 	$N->formatCurrency();
	}
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	function getLotoAll(){
		$mLoto = new \MVC\Mapper\Loto();
		$LotoAll = 	$mLoto->findBy(array($this->getId()));
		return $LotoAll;
	}
	
	function getDomainTracking(){
		$mDT = new \MVC\Mapper\TrackingDomainDaily();		
		return $mDT->findByDate(array($this->Date));
	}
	
	function getSupplierTracking(){
		$mTSD = new \MVC\Mapper\TrackingSupplierDaily();		
		return $mTSD->findByDate(array($this->Date));
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLReport()				{return "/report/".$this->getIdTracking()."/".$this->getId();}
	function getURLReportGeneral()		{return "/report/".$this->getIdTracking()."/".$this->getId()."/general";}
	function getURLReportSelling()		{return "/report/".$this->getIdTracking()."/".$this->getId()."/selling";}
	function getURLReportImport()		{return "/report/".$this->getIdTracking()."/".$this->getId()."/import";}
	function getURLResult()				{return "/result/".$this->getIdTracking()."/".$this->getId();}
	function getURLResultView()			{return "/result/".$this->getIdTracking()."/".$this->getId()."/view";}
	function getURLResultPrint()		{return "/result/".$this->getIdTracking()."/".$this->getId()."/print";}
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}	
}
?>