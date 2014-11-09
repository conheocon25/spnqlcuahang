<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class OrderExport extends Object{

    private $Id;
	private $IdUser;
	private $IdCustomer;
	private $Date;
	private $State;
    private $Description;
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdUser=null, $IdCustomer=null, $Date=null, $State=null, $Description=null) {
        $this->Id 			= $Id;
		$this->IdUser 		= $IdUser;
		$this->IdCustomer 	= $IdCustomer;
		$this->Date 		= $Date;
		$this->State 		= $State;
		$this->Description 	= $Description;
        parent::__construct( $Id );
    }
    function setId($Id){$this->Id = $Id;}
	function getId( ) {return $this->Id;}
    
	function setIdUser( $IdUser ) {$this->IdUser = $IdUser; $this->markDirty();}
    function getIdUser( ) {return $this->IdUser;}
	function getUser( ){
		$mUser 	= new \MVC\Mapper\User();
		$User 	= $mUser->find($this->IdUser);
        return $User;
    }
	
	function setIdCustomer( $IdCustomer ) {$this->IdCustomer = $IdCustomer;$this->markDirty();}
    function getIdCustomer( ) {return $this->IdCustomer;}
	function getCustomer( ) {	
		$mCustomer = new \MVC\Mapper\Customer();
		$Customer = $mCustomer->find($this->IdCustomer);		
        return $Customer;
    }
	
	function getDate( ) {return $this->Date;}
    function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}
	function getDatePrint( ) {$Date = new \MVC\Library\Date($this->Date); return $Date->getDateFormat();}
	function getDateTimePrint( ) {		
		$Date = date_create($this->Date);
		return date_format($Date, 'd/m H:i');
	}
		
	function setState( $State ) {$this->State = $State;$this->markDirty();}
	function getState( ) {return $this->State;}
	function getStatePrint( ){
		$Arr = array("soạn mới", "đặt hàng", "xét duyệt", "giao hàng & nhận tiền");
		return $Arr[$this->State];
	}
	
	function getDescription( ) {return $this->Description;}
	function setDescription( $Description ) {$this->Description = $Description;$this->markDirty();}
	
	function getDetailAll(){		
		$mOD = new \MVC\Mapper\OrderExportDetail();
		$ODAll = $mOD->findBy(array($this->getId()));
		return $ODAll;
	}
	
	function getValue(){
		$DetailAll = $this->getDetailAll();
		$Count = 0;
		while ($DetailAll->valid()){
			$Count += $DetailAll->current()->getValue();
			$DetailAll->next();
		}
		return $Count;
	}
	
	function getValuePrint(){
		$Value = new \MVC\Library\Number($this->getValue());
		return $Value->formatCurrency()." đ";
	}
		
	function getValueStrPrint(){
		$Value = new \MVC\Library\Number($this->getValue());
		return $Value->readDigit()." đồng";
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdUser' 		=> $this->getIdUser(),
			'IdCustomer' 	=> $this->getIdCustomer(),
			'Date'			=> $this->getDate(),
			'State'			=> $this->getState(),
			'Description'	=> $this->getDescription()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];	
		$this->IdUser		= $Data[1];	
		$this->IdCustomer 	= $Data[2];	
		$this->Date 		= $Data[3];
		$this->State		= $Data[4];
		$this->Description 	= $Data[5];
    }
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLPrint(){return "/export/".$this->getIdCustomer()."/".$this->getId()."/print";}
	function getURLDetail(){return "/export/".$this->getIdCustomer()."/".$this->getId();}
	
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>