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
	function setNote( $Note_s ) {$this->Note = $Note_s;$this->markDirty();}
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
	
	//--------------------------------------------------------	
	//TÍNH CÔNG NỢ
	//--------------------------------------------------------	
	function getOldDebt(){
		$Session = \MVC\Base\SessionRegistry::instance();
		$Date = $Session->getReportSellingDateStart();
							
		$mOrder = new \MVC\Mapper\OrderExport();
		$mPaid = new \MVC\Mapper\PaidCustomer();
		
		$NDate = new \MVC\Library\Date();
		$arr = $NDate->rangeOldDebt($Date);
				
		//(1) Nhập hàng trước đó
		$Orders = $mOrder->findByTracking1( array($this->getId(), $arr[0], $arr[1]) );
		$SOrders = 0;
		while($Orders->valid()){
			$SOrders += $Orders->current()->getValue();
			$Orders->next();
		}
				
		//(2) Trả tiền
		$Paids = $mPaid->findByTracking1( array($this->getId(), $arr[0], $arr[1]) );
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
	
	//Tính theo từng đơn hàng
	function getOldDebt1(){
		$Session = \MVC\Base\SessionRegistry::instance();
		$Date = $Session->getOrderExportDate();
							
		$mOrder = new \MVC\Mapper\OrderExport();
		$mPaid = new \MVC\Mapper\PaidCustomer();
		
		$NDate = new \MVC\Library\Date();
		$arr = $NDate->rangeOldDebt($Date);
				
		//(1) Nhập hàng trước đó
		$Orders = $mOrder->findByTracking1( array($this->getId(), $arr[0], $arr[1]) );
		$SOrders = 0;
		while($Orders->valid()){
			$SOrders += $Orders->current()->getValue();
			$Orders->next();
		}
				
		//(2) Trả tiền
		$Paids = $mPaid->findByTracking1( array($this->getId(), $arr[0], $arr[1]) );
		$SPaids = 0;
		while($Paids->valid()){
			$SPaids += $Paids->current()->getValue();
			$Paids->next();
		}
		return $this->getDebt() + $SOrders - $SPaids;
	}
	function getOldDebt1Print(){
		$Value = $this->getOldDebt1();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency()." đ";
	}
	function getNewDebt1( ){
		$Value = $this->getOldDebt1() + $this->getOrdersTrackingValue1() - $this->getPaidsTrackingValue1();
		return $Value;
	}
	function getNewDebt1Print(){
		$Value = $this->getNewDebt1();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency()." đ";
	}
	function getNewDebt1StrPrint(){
		$Value = $this->getNewDebt1();
		$N = new \MVC\Library\Number($Value);
		return $N->readDigit();
	}
	
	/*--------------------------------------------------------------------*/		
	//Lấy về danh sách trả tiền
	function getPaidsTop10(){
		$mSP = new \MVC\Mapper\PaidCustomer();
		$Paids = $mSP->findByTop10(array($this->getId()));
		return $Paids;
	}
	function getPaids(){
		if (!isset($this->Paids)){
			$mSP = new \MVC\Mapper\PaidCustomer();
			$this->Paids = $mSP->findBy(array($this->getId()));
		}
		return $this->Paids;
	}
		
	
	//Tính theo khoảng
	function getPaidsTracking(){
		if (!isset($this->PaidsTracking)){
			$Session = \MVC\Base\SessionRegistry::instance();
			$DateStart = $Session->getReportSellingDateStart();
			$DateEnd = $Session->getReportSellingDateEnd();

			$mPaid = new \MVC\Mapper\PaidCustomer();
			$this->PaidsTracking = $mPaid->findByTracking1( array($this->getId(), $DateStart, $DateEnd) );
		}
		return $this->PaidsTracking;
	}
	function getPaidsTrackingValue(){
		$Paids = $this->getPaidsTracking();
		$Sum = 0;
		$Paids->rewind();
		while ($Paids->valid()){
			$Sum += $Paids->current()->getValue();
			$Paids->next();
		}
		return $Sum;
	}
	function getPaidsTrackingValuePrint(){
		$Value = $this->getPaidsTrackingValue();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency()." đ";
	}
	
	//Tính sau đơn hàng gần cuối
	function getPaidsTracking1(){
		if (!isset($this->PaidsTracking1)){
			$Session = \MVC\Base\SessionRegistry::instance();
			$Date = $Session->getOrderExportDate();
			
			$mPaid = new \MVC\Mapper\PaidCustomer();
			$this->PaidsTracking1 = $mPaid->findByTracking1( array($this->getId(), $Date, $Date) );
		}
		return $this->PaidsTracking1;
	}
	function getPaidsTrackingValue1(){
		$Paids = $this->getPaidsTracking1();
		$Sum = 0;
		$Paids->rewind();
		while ($Paids->valid()){
			$Sum += $Paids->current()->getValue();
			$Paids->next();
		}
		return $Sum;
	}
	function getPaidsTrackingValue1Print(){
		$Value = $this->getPaidsTrackingValue1();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency()." đ";
	}
	
				
	//Lấy về danh sách các đơn hàng
	function getOrders(){
		$mOrder = new \MVC\Mapper\OrderExport();
		$Orders = $mOrder->findBy(array($this->getId()));		
		return $Orders;
	}
	function getOrdersPage(){
		$mOrder = new \MVC\Mapper\OrderExport();
		//$Orders = $mOrder->findBy(array($this->getId()));
		$Orders = $mOrder->findByPage(array($this->getId(), 1, 15));
		return $Orders;
	}
	function getOrdersTop10(){
		$mOrder = new \MVC\Mapper\OrderExport();
		$Orders = $mOrder->findByTop10(array($this->getId()));
		return $Orders;
	}
	
	function getOrdersTracking(){
		if (!isset($this->OrdersTracking)){
			$Session = \MVC\Base\SessionRegistry::instance();
			$DateStart = $Session->getReportSellingDateStart();
			$DateEnd = $Session->getReportSellingDateEnd();

			$mOrder = new \MVC\Mapper\OrderExport();
			$this->OrdersTracking = $mOrder->findByTracking1( array($this->getId(), $DateStart, $DateEnd) );
		}
		return $this->OrdersTracking;
	}
	
	function getOrdersTrackingValue(){
		$Orders = $this->getOrdersTracking();
		$Sum = 0;
		$Orders->rewind();
		while ($Orders->valid()){
			$Sum += $Orders->current()->getValue();
			$Orders->next();
		}
		return $Sum;
	}
	function getOrdersTrackingValuePrint(){
		$Value = $this->getOrdersTrackingValue();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency()." đ";
	}
	
	//Lấy đơn hàng cuối
	function getOrdersTracking1(){		
		$Session = \MVC\Base\SessionRegistry::instance();
		$Date = $Session->getOrderExportDate();
		
		$mOrder = new \MVC\Mapper\OrderExport();
		$Orders = $mOrder->findByTracking1( array($this->getId(), $Date, $Date) );
		
		return $Orders;
	}
	
	function getOrdersTrackingValue1(){
		$Orders = $this->getOrdersTracking1();
		$Sum = 0;
		$Orders->rewind();
		while ($Orders->valid()){
			$Sum += $Orders->current()->getValue();
			$Orders->next();
		}
		return $Sum;
	}
	function getOrdersTrackingValue1Print(){
		$Value = $this->getOrdersTrackingValue1();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency()." đ";
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
	
	/*--------------------------------------------------------------------*/
	/*DEFINE SETTING.CUSTOMER											  */
	/*--------------------------------------------------------------------*/
			
}
?>