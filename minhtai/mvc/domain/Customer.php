<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Customer extends Object{

    private $Id;
	private $IdCard;
	private $Prefix;
	private $Name;
	private $Alias;
    private $Address;
	private $Phone;
	private $Note;
						
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$IdCard=null, 
		$Prefix=null,
		$Name=null, 
		$Alias=null, 
		$Phone=null, 
		$Address=null, 
		$Note=null, 
		$Debt=null ) 
	{
        $this->Id 		= $Id;
		$this->IdCard 	= $IdCard;
		$this->Prefix 	= $Prefix;
		$this->Name 	= $Name;
		$this->Alias 	= $Alias;
		$this->Address 	= $Address;
		$this->Phone 	= $Phone;
		$this->Note 	= $Note;
		$this->Debt 	= $Debt;
        parent::__construct( $Id );
    }
	function getId(){return $this->Id;}
	
    function setPrefix( $Prefix ) {$this->Prefix = $Prefix;$this->markDirty();}
    function getPrefix( ) {return $this->Prefix;}
	
    function setName( $Name ) {$this->Name = $Name;$this->markDirty();}
    function getName( ) {return $this->Name;}
	
    function getNamePrefix( ) {return $this->Prefix ." ". $this->Name;}
	function setAddress( $Address_s ) {$this->Address = $Address_s;$this->markDirty();}
	function getAddress( ) {return $this->Address;}
	
	function setPhone( $Phone_s ) {$this->Phone = $Phone_s;$this->markDirty();}
	function getPhone( ) {return $this->Phone;}
	
	function setNote( $Note ) {$this->Note = $Note;$this->markDirty();}
	function getNote( ) {return $this->Note;}
	
	function setIdCard( $IdCard_s ) {$this->IdCard = $IdCard_s;$this->markDirty();}
	function getIdCard( ) {return $this->IdCard;}
	
	function setAlias( $Alias ) {$this->Alias = $Alias;$this->markDirty();}
	function getAlias( ) {return $this->Alias;}
	
	function setDebt( $Debt ) {$this->Debt= $Debt;$this->markDirty();}
	function getDebt( ) {return $this->Debt;}
	function getDebtPrint( ) {
		$num = number_format($this->Debt, 0, ',', '.');
		return $num;
    }
	function getPicture(){return "data/images/app/customer.png";		}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdCard'		=> $this->getIdCard(),
			'Prefix'		=> $this->getPrefix(),
			'Name'			=> $this->getName(),
			'Alias'			=> $this->getAlias(),
			'Address'		=> $this->getAddress(),			
			'Phone'			=> $this->getPhone(),						
			'Note'			=> $this->getNote(),
			'Debt'			=> $this->getDebt()
		);						
		return json_encode($json);
	}
	
	function setArray( $Data ){
		$this->Id 		= $Data[0];
		$this->IdCard	= $Data[1];
		$this->Prefix	= $Data[2];
		$this->Name 	= $Data[3];
		$this->Alias 	= $Data[4];
		$this->Address	= $Data[5];
		$this->Phone	= $Data[6];
		$this->Note		= $Data[7];		
		$this->Debt		= $Data[8];
    }
			
				
	//Lấy về danh sách các đơn hàng
	function getOrderAll(){
		$mOrder = new \MVC\Mapper\OrderExport();
		$Orders = $mOrder->findBy(array($this->getId()));		
		return $Orders;
	}
		
	function getLogAll(){
		$mCL 	= new \MVC\Mapper\CustomerLog();
		$CLAll 	= $mCL->findBy(array( $this->getId() ));
		return $CLAll;
	}
	function getCollectAll(){
		$mCC 	= new \MVC\Mapper\CollectCustomer();
		$CCAll 	= $mCC->findBy(array( $this->getId() ));
		return $CCAll;
	}
	
	function getPaidAll(){
		$mCP 	= new \MVC\Mapper\PaidCustomer();
		$CPAll 	= $mCP->findBy(array( $this->getId() ));
		return $CPAll;
	}
	/*--------------------------------------------------------------------*/
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
	//-------------------------------------------------------------------------------
	//DEFINE SELLING.CUSTOMER
	//-------------------------------------------------------------------------------
	function getURLCollect(){return "/money/collect/customer/".$this->getId();}	
	function getURLPaid(){return "/money/paid/customer/".$this->getId();}
	function getURLExport(){return "/export/".$this->getId();}
	
	/*--------------------------------------------------------------------*/
	/*DEFINE SETTING.CUSTOMER											  */
	/*--------------------------------------------------------------------*/
			
}
?>