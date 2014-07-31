<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class TrackingDomainDaily extends Object{

    public $Id;
	public $IdDomain;
	public $Date;
	public $Ticket1;
    public $Ticket2;
    public $Paid1;
    public $Paid2;
	public $Debt;
	public $Paid1Remain;
    public $Paid2Remain;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id			= null,
		$IdDomain	= null, 
		$Date		= null, 
		$Ticket1	= null, 
		$Ticket2	= null, 
		$Paid1		= null,
		$Paid2		= null,
		$Debt		= null,
		$Paid1Remain= null,
		$Paid2Remain= null
	) {
        $this->Id 			= $Id;
		$this->IdDomain 	= $IdDomain;
		$this->Date 		= $Date;
		$this->Ticket1 		= $Ticket1;
		$this->Ticket2 		= $Ticket2;
		$this->Paid1 		= $Paid1;
		$this->Paid2 		= $Paid2;
		$this->Debt 		= $Debt;
		$this->Paid1Remain	= $Paid1Remain;
		$this->Paid2Remain	= $Paid2Remain;
			
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
		
	function setTicket1( $Ticket1 ) {$this->Ticket1 = $Ticket1;$this->markDirty();}   
	function getTicket1( ) {return $this->Ticket1;}
	function getTicket1Print( ){$N = new \MVC\Library\Number($this->Ticket1);return $N->formatCurrency();}
	
	function setTicket2( $Ticket2 ) {$this->Ticket2 = $Ticket2;$this->markDirty();}   
	function getTicket2( ) {return $this->Ticket2;}
	function getTicket2Print( ){$N = new \MVC\Library\Number($this->Ticket2);return $N->formatCurrency();}
	
	function getTicketD(){return $this->Ticket1 - $this->Ticket2;}
	function getTicketDPrint(){
		$N = new \MVC\Library\Number($this->getTicketD());
		return 	$N->formatCurrency();
	}
	
	function getTicketValue(){return 	$this->getTicketD()*9000; }
	function getTicketValuePrint(){
		$N = new \MVC\Library\Number($this->getTicketValue());
		return 	$N->formatCurrency();
	}
	
	function setPaid1( $Paid1 ) {$this->Paid1 = $Paid1; $this->markDirty();}   
	function getPaid1( ) {return $this->Paid1;}
	function getPaid1Print( ) {$N = new \MVC\Library\Number($this->Paid1);return $N->formatCurrency();}
	
	function setPaid2( $Paid2 ) {$this->Paid2 = $Paid2; $this->markDirty();}   
	function getPaid2( ) {return $this->Paid2;}
	function getPaid2Print( ) {$N = new \MVC\Library\Number($this->Paid2);return $N->formatCurrency();}
	
	function setDebt( $Debt ) {$this->Debt = $Debt; $this->markDirty();}
	function getDebt( ) {return $this->Debt;}
	function getDebtPrint( ) {$N = new \MVC\Library\Number($this->Debt);return $N->formatCurrency();}
	
	function setPaid1Remain( $Paid1Remain ) {$this->Paid1Remain = $Paid1Remain; $this->markDirty();}   
	function getPaid1Remain( ) {return $this->Paid1Remain;}
	function getPaid1RemainPrint( ) {$N = new \MVC\Library\Number($this->Paid1Remain);return $N->formatCurrency();}
	
	function setPaid2Remain( $Paid2Remain ) {$this->Paid2Remain = $Paid2Remain; $this->markDirty();}   
	function getPaid2Remain( ) {return $this->Paid2Remain;}
	function getPaid2RemainPrint( ) {$N = new \MVC\Library\Number($this->Paid2Remain);return $N->formatCurrency();}
	
	function getValue(){return $this->Paid1Remain + $this->Paid2Remain;}
	function getValuePrint(){
		$N = new \MVC\Library\Number($this->getValue());
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