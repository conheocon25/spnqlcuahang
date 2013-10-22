<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class OrderExport extends Object{

    private $Id;
	private $IdUser;
	private $Date;
	private $State;
    private $Description;
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdUser=null, $Date=null, $State=null, $Description=null){
        $this->Id = $Id;
		$this->IdUser = $IdUser;
		$this->Date = $Date;
		$this->State = $State;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
	function setId( $Id) { $this->Id = $Id;}
    function getId( ) {return $this->Id;}
	
	function getIdUser( ) {return $this->IdUser;}
    function setIdUser( $IdUser ){$this->IdUser = $IdUser;$this->markDirty();}
	function getUser( ) {
		$mUser = new \MVC\Mapper\User();
		$User = $mUser->find($this->IdUser);
		return $User;
	}
	
	function getDate( ) {return $this->Date;}
    function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}
	function getDatePrint( ) {
		$Date = new \MVC\Library\Date($this->Date);return $Date->getDateTimeFormat();
	}
	
	function getState( ) {return $this->State;}
	function getStatePrint( ) {return $this->State==1?'đã tính tiền':'chưa tính tiền';}
    function setState( $State ) {$this->State = $State;$this->markDirty();}
	
	function getDescription( ) {return $this->Description;}
	function setDescription( $Description ) {$this->Description = $Description;$this->markDirty();}
	
	function getDetailAll(){		
		$mOED = new \MVC\Mapper\OrderExportDetail();
		$DetailAll = $mOED->findBy(array($this->getId()));
		return $DetailAll;
	}
	
	function getValue(){
		$Value = 0;
		$DetailAll = $this->getDetailAll();
		while ($DetailAll->valid()){
			$Detail = $DetailAll->current();
			$Value += $Detail->getValue();
			$DetailAll->next();
		}
		return $Value;
	}
	
	function getValuePrint(){
		$Value = new \MVC\Library\Number($this->getValue());
		return $Value->formatCurrency()." đ";
	}
	
	function getValueStrPrint(){
		$Value = new \MVC\Library\Number($this->getValue());
		return $Value->readDigit()." đồng";
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLPrint(){return "/selling/".$this->getId()."/print";}
		
	function getURLUpdLoad(){return "/selling/".$this->getId()."/upd/load";}
	function getURLUpdExe(){return "/selling/".$this->getId()."/upd/exe";}
	
	function getURLDelLoad(){return "/selling/".$this->getId()."/del/load";}
	function getURLDelExe(){return "/selling/".$this->getId()."/del/exe";}
	function getURLDetail(){return "/selling/".$this->getId();}
	
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>
