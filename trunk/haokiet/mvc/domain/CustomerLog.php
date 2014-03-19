<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class CustomerLog extends Object{
    private $Id;
	private $IdCustomer;
	private $DateTime;
    private $Ticket1;
    private $Ticket2;
    private $Paid1;
    private $Paid2;
	private $Debt;
	private $Paid1Remain;
    private $Paid2Remain;
		
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdCustomer=null, $DateTime=null, $Ticket1=null, $Ticket2=null, $Paid1=null, $Paid2=null, $Debt=null, $Paid1Remain=null, $Paid2Remain=null) {
        $this->Id = $Id;
		$this->IdCustomer 	= $IdCustomer;
		$this->DateTime 	= $DateTime;		
		$this->Ticket1 		= $Ticket1;
		$this->Ticket2 		= $Ticket2;
		$this->Paid1 		= $Paid1;
		$this->Paid2 		= $Paid2;
		$this->Debt 		= $Debt;
		$this->Paid1Remain	= $Paid1Remain;
		$this->Paid2Remain	= $Paid2Remain;
		
        parent::__construct( $Id );
    }
	function setId( $Id) {return $this->Id = $Id;}
    function getId( ) {return $this->Id;}
		
	function getTicket1(){return $this->Ticket1;}	
    function setTicket1( $Ticket1 ) {$this->Ticket1 = $Ticket1;$this->markDirty();}
	function getTicket1Print(){
		$N = new \MVC\Library\Number($this->getTicket1());
		return 	$N->formatCurrency();
	}
	
	function getTicket2(){return $this->Ticket2;}	
    function setTicket2( $Ticket2 ) {$this->Ticket2 = $Ticket2;$this->markDirty();}
	function getTicket2Print(){
		$N = new \MVC\Library\Number($this->getTicket2());
		return 	$N->formatCurrency();
	}
	
	function getTicketD(){return 		$this->Ticket1 - $this->Ticket2;}
	function getTicketDPrint(){
		$N = new \MVC\Library\Number($this->getTicketD());
		return 	$N->formatCurrency();
	}
	
	function getTicketValue(){return 	$this->getTicketD()*9000; }
	function getTicketValuePrint(){
		$N = new \MVC\Library\Number($this->getTicketValue());
		return 	$N->formatCurrency();
	}
	
	function getPaid1(){return $this->Paid1;}	
    function setPaid1( $Paid1 ) {$this->Paid1 = $Paid1;$this->markDirty();}
	function getPaid1Print(){
		$N = new \MVC\Library\Number($this->getPaid1());
		return 	$N->formatCurrency();
	}
	
	function setPaid1Remain($Paid1Remain){ $this->Paid1Remain = $Paid1Remain;$this->markDirty();}
	function getPaid1Remain(){return $this->Paid1Remain;}
	function getPaid1RemainPrint(){
		$N = new \MVC\Library\Number($this->getPaid1Remain());
		return 	$N->formatCurrency();
	}
			
    function setIdCustomer( $IdCustomer ) {$this->IdCustomer = $IdCustomer;$this->markDirty();}
	function getIdCustomer(){return $this->IdCustomer;}	
	function getCustomer(){
		$mCustomer = new \MVC\Mapper\Customer();
		$Customer = $mCustomer->find($this->IdCustomer);
		return $Customer;
	}

	function getDateTime(){return $this->DateTime;}
    function setDateTime( $DateTime ) {$this->DateTime = $DateTime;$this->markDirty();}
	function getDateTimePrint( ){
		$Date = new \MVC\Library\Date($this->DateTime); 
		return $Date->getDateFormat();		
	}
			
    function setPaid2( $Paid2 ) {$this->Paid2 = $Paid2;$this->markDirty();}
	function getPaid2(){return $this->Paid2;}
	function getPaid2Print(){
		$N = new \MVC\Library\Number($this->getPaid2());
		return 	$N->formatCurrency();
	}
	
	function setDebt( $Debt ) {$this->Debt = $Debt;$this->markDirty();}
	function getDebt(){return $this->Debt;}
	function getDebtPrint(){
		$N = new \MVC\Library\Number($this->getDebt());
		return 	$N->formatCurrency();
	}
	
	function setPaid2Remain($Paid2Remain){ $this->Paid2Remain = $Paid2Remain;$this->markDirty();}
	function getPaid2Remain(){return $this->Paid2Remain;}
	function getPaid2RemainPrint(){
		$N = new \MVC\Library\Number($this->getPaid2Remain());
		return 	$N->formatCurrency();
	}
	
	function getValue(){return $this->Paid1Remain + $this->Paid2Remain;}
	function getValuePrint(){
		$N = new \MVC\Library\Number($this->getValue());
		return 	$N->formatCurrency();
	}
	
	function setIdDomain( $IdDomain ) {$this->IdDomain = $IdDomain;$this->markDirty();}
	function getIdDomain(){return $this->IdDomain;}
	function getDomain(){
		$mDomain 	= new \MVC\Mapper\Domain();
		$Domain 	= $mDomain->find($this->IdDomain);
		return $Domain;
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdCustomer'	=> $this->getIdCustomer(),
			'DateTime'		=> $this->getDateTime(),
			'Ticket1'		=> $this->getTicket1(),
			'Ticket2'		=> $this->getTicket2(),			
			'Paid1'			=> $this->getPaid1(),
			'Paid2'			=> $this->getPaid2(),
			'Debt'			=> $this->getDebt(),
			'Paid1Remain'	=> $this->getPaid1Remain(),
			'Paid2Remain'	=> $this->getPaid2Remain(),
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
		$this->Id 			= $Data[0];
		$this->IdCustomer 	= $Data[1];
		$this->DateTime		= $Data[2];
		$this->Ticket1		= $Data[3];
		$this->Ticket2		= $Data[4];		
		$this->Paid1		= $Data[5];
		$this->Paid2		= $Data[6];
		$this->Debt			= $Data[7];
		$this->autoUpdate();
    }
	function autoUpdate(){
		//Tính tự động 2 tham số này Paid1Remain / Paid2Remain		
		//Tìm CL trước đó 1 ngày để cập nhật những công nợ cũ
		$mCL = new \MVC\Mapper\CustomerLog();
		$CLPre = $mCL->findPre(array($this->DateTime, $this->IdCustomer));
				
		if (isset($CLPre)){
			$this->Paid1Remain	= $CLPre->getPaid1Remain() + $this->getTicketValue() - $this->getPaid1();
			$this->Paid2Remain	= $CLPre->getPaid2Remain() + $this->getDebt() - $this->getPaid2();			
		}else{
			$this->Paid1Remain	= $this->getTicketValue() - $this->getPaid1();
			$this->Paid2Remain	= $this->getDebt() - $this->getPaid2();			
		}
	}
	
	//=================================================================================	
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}	
	
}
?>