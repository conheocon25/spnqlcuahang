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
		
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdCustomer=null, $DateTime=null, $Ticket1=null, $Ticket2=null, $Paid1=null, $Paid2=null, $Debt=null) {
        $this->Id = $Id;
		$this->IdCustomer 	= $IdCustomer;
		$this->DateTime 	= $DateTime;		
		$this->Ticket1 		= $Ticket1;
		$this->Ticket2 		= $Ticket2;
		$this->Paid1 		= $Paid1;
		$this->Paid2 		= $Paid2;
		$this->Debt 		= $Debt;
		
        parent::__construct( $Id );
    }
	function setId( $Id) {return $this->Id = $Id;}
    function getId( ) {return $this->Id;}
		
	function getTicket1(){return $this->Ticket1;}	
    function setTicket1( $Ticket1 ) {$this->Ticket1 = $Ticket1;$this->markDirty();}
	function getTicket1Print(){if ($this->Ticket1==1)return "VIP"; return "Thường";}
	
	function getTicket2(){return $this->Ticket2;}	
    function setTicket2( $Ticket2 ) {$this->Ticket2 = $Ticket2;$this->markDirty();}
	
	function getPaid1(){return $this->Paid1;}	
    function setPaid1( $Paid1 ) {$this->Paid1 = $Paid1;$this->markDirty();}
	
	function getIdCustomer(){return $this->IdCustomer;}	
    function setIdCustomer( $IdCustomer ) {$this->IdCustomer = $IdCustomer;$this->markDirty();}

	function getDateTime(){return $this->DateTime;}
    function setDateTime( $DateTime ) {$this->DateTime = $DateTime;$this->markDirty();}
			
    function setPaid2( $Paid2 ) {$this->Paid2 = $Paid2;$this->markDirty();}
	function getPaid2(){return $this->Paid2;}
		
	function setDebt( $Debt ) {$this->Debt = $Debt;$this->markDirty();}
	function getDebt(){return $this->Debt;}
	
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
			'Ticket1'		=> $this->getTicket1(),
			'Ticket2'		=> $this->getTicket2(),
			'DateTime'		=> $this->getDateTime(),
			'Paid1'			=> $this->getPaid1(),
			'Paid2'			=> $this->getPaid2(),
			'Debt'			=> $this->getDebt()			
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
		$this->Id 			= $Data[0];
		$this->IdCustomer 	= $Data[1];
		$this->Ticket1		= $Data[2];
		$this->Ticket2		= $Data[3];
		$this->DateTime		= $Data[4];
		$this->Paid1		= $Data[5];
		$this->Paid2		= $Data[6];
		$this->Debt			= $Data[7];		
    }
	
	//=================================================================================	
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}	
	
}
?>