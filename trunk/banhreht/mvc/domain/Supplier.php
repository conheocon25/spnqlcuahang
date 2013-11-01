<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Supplier extends Object{

    private $Id;
	private $Name;
	private $Phone;
    private $Address;
	private $Note;
	private $Debt;
					
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( 
		$Id=null, 
		$Name=null, 
		$Phone=null, 
		$Address=null, 
		$Note=null,
		$Debt=null
	){
        $this->Id 		= $Id;
		$this->Name 	= $Name;
		$this->Phone 	= $Phone;
		$this->Address 	= $Address;
		$this->Note 	= $Note;
		$this->Debt 	= $Debt;
		
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
		
    function setName( $Name ) {$this->Name = $Name; $this->markDirty();}
    function getName( ) {return $this->Name;}
	
	function getPhone( ) {return $this->Phone;}
    function setPhone( $Phone ) {$this->Phone = $Phone; $this->markDirty();}
	
	function setAddress( $Address ) {$this->Address = $Address; $this->markDirty();}
    function getAddress( ) {return $this->Address;}
	
	function setNote( $Note ) {$this->Note = $Note; $this->markDirty();}
	function getNote( ) {return $this->Note;}
	
	function setDebt( $Debt ) {$this->Debt = $Debt; $this->markDirty();}
	function getDebt( ){return $this->Debt;}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),			
			'Name'			=> $this->getName(),
			'Phone'			=> $this->getPhone(),
			'Address'		=> $this->getAddress(),
			'Note'			=> $this->getNote(),
			'Debt'			=> $this->getDebt()
		);
		return json_encode($json);
	}
	
	function toXML($Doc){
		$Obj = $Doc->createElement( "supplier" );
		$Obj->setAttributeNode(new \DOMAttr('id', $this->getId()));
				
		$Name = $Doc->createElement( "name" );
		$Name->appendChild($Doc->createTextNode( $this->getName() ));
		
		$Phone = $Doc->createElement( "phone" );
		$Phone->appendChild($Doc->createTextNode( $this->getPhone() ));
		
		$Address = $Doc->createElement( "address" );
		$Address->appendChild($Doc->createTextNode( $this->getAddress() ));
		
		$Note = $Doc->createElement( "note" );
		$Note->appendChild($Doc->createTextNode( $this->getNote() ));
		
		$Debt = $Doc->createElement( "debt" );
		$Debt->appendChild($Doc->createTextNode( $this->getDebt() ));
				
		$Obj->appendChild( $Name );
		$Obj->appendChild( $Phone );
		$Obj->appendChild( $Address);
		$Obj->appendChild( $Note);
		$Obj->appendChild( $Debt);
		
		return $Obj;
	}
	
	function setArray( $Data ){
        $this->Id 		= $Data[0];
		$this->Name 	= $Data[1];
		$this->Phone 	= $Data[2];
		$this->Address 	= $Data[3];
		$this->Note 	= $Data[4];
		$this->Debt 	= $Data[5];
    }
	
	//--------------------------------------------------------	
	//TÍNH CÔNG NỢ
	//--------------------------------------------------------	
	function getOldDebt( ){
		$Session = \MVC\Base\SessionRegistry::instance();
		$DateStart = $Session->getReportSupplierDateStart();
							
		$mOrder = new \MVC\Mapper\OrderImport();
		$mSPaid = new \MVC\Mapper\PaidSupplier();
		
		$NDate = new \MVC\Library\Date();
		$arr = $NDate->rangeOldDebt($DateStart);
				
		//(1) Nhập hàng trước đó
		$Orders = $mOrder->findByTracking1( array($this->getId(), $arr[0], $arr[1]) );
		$SOrders = 0;
		while($Orders->valid()){
			$SOrders += $Orders->current()->getValue();
			$Orders->next();
		}
				
		//(2) Trả tiền
		$Paids = $mSPaid->findByTracking1( array($this->getId(), $arr[0], $arr[1]) );
		$SPaids = 0;
		while($Paids->valid()){
			$SPaids += $Paids->current()->getValue();
			$Paids->next();
		}
				
		return $this->getDebt() + $SOrders - $SPaids;
	}
	function getOldDebtPrint(){
		$Value = $this->getOldDebt();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency()." đ";
	}
	function getNewDebt( ){
		$Value = $this->getOldDebt() + $this->getOrdersTrackingValue() - $this->getPaidsTrackingValue(); 
		return $Value;
	}
	function getNewDebtPrint(){
		$Value = $this->getNewDebt();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency()." đ";
	}
	
	//-------------------------------------------------------------------------------
	//GET LISTs
	//-------------------------------------------------------------------------------
	
	//Lấy về danh sách trả tiền	
	function getPaidAll(){		
		$mSP = new \MVC\Mapper\PaidSupplier();
		$PaidAll = $mSP->findBy(array($this->getId()));		
		return $PaidAll;
	}
	
			
	//Lấy về danh sách các đơn hàng
	function getOrderAll(){
		$mSupplierOrder = new \MVC\Mapper\SupplierOrder();
		$OrderAll = $mSupplierOrder->findBy(array($this->getId()));
		return $OrderAll;
	}
			
	//Lấy về danh sách các tài nguyên nhà cung cấp có
	function getResourceAll() {
		$mResource = new \MVC\Mapper\Resource();
		$Resources = $mResource->findBySupplier(array($this->getId()));
		return $Resources;
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE IMPORT.SUPPLIER
	//-------------------------------------------------------------------------------
	function getURLImport()		{return "/import/supplier/".$this->getId();}	
	function getURLPaid()		{return "/paid/supplier/".$this->getId();}
	function getURLResource()	{return "/setting/supplier/".$this->getId();}
									
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $id );}
	
}
?>