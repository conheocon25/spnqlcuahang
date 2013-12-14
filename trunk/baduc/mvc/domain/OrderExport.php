<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class OrderExport extends Object{
    private $Id;
	private $IdTracking;
	private $IdUser;
	private $Tag;
	private $Date;	
    private $Note;
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdTracking=null, $IdUser=null, $Tag=null,  $Date=null, $Note=null){
        $this->Id 			= $Id;
		$this->IdTracking 	= $IdTracking;
		$this->IdUser 		= $IdUser;
		$this->Tag 			= $Tag;
		$this->Date 		= $Date;
		$this->Note 		= $Note;
        parent::__construct( $Id );
    }
	function setId( $Id) { $this->Id = $Id;}
    function getId( ) {return $this->Id;}
	
	function getIdTracking( ) {return $this->IdTracking;}
    function setIdTracking( $IdTracking ){$this->IdTracking = $IdTracking;$this->markDirty();}
	function getTracking( ) {
		$mCT 		= new \MVC\Mapper\CustomerTracking();
		$Tracking 	= $mCT->find( $this->getIdTracking() );
		return $Tracking;
	}
	
	function getIdUser( ) {return $this->IdUser;}
    function setIdUser( $IdTracking ){$this->IdUser = $IdUser; $this->markDirty();}
	function getUser( ) {
		$mUser 		= new \MVC\Mapper\User();
		$User 		= $mUser->find( $this->getIdUser() );
		return $User;
	}
	
	function getTag( ) {return $this->Tag;}
    function setTag( $Tag ){$this->Tag = $Tag; $this->markDirty();}
	function getTagPrint( ) {
		$arr = array("BÌNH THƯỜNG", "THUỐC", "THỨC ĂN");
		return $arr[$this->Tag];
	}
	
	function getDate( ) {return $this->Date;}
    function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}
	function getDatePrint( ) {$Date = new \MVC\Library\Date($this->Date);return $Date->getDateFormat();}
	function getDateTimePrint( ) {$Date = new \MVC\Library\Date($this->Date);return $Date->getDateTimeFormat();}
			
	function getNote( ) {return $this->Note;}
	function setNote( $Note ) {$this->Note = $Note;$this->markDirty();}
	
	function getDays($Date){
		$D1 = strtotime($this->getDate());
		$D2 = strtotime($Date);
		return round(($D2 - $D1)/ 86400, 0);
	}
	
	function getRateValue($Date, $Rate){
		return ($this->getDays($Date)*($this->getValue()*$Rate))/100;
	}
	function getRateValuePrint($Date, $Rate){
		$Value = $this->getRateValue($Date, $Rate);
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency();
	}
	
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
		return $Value->formatCurrency();
	}
	
	function getValueStrPrint(){
		$Value = new \MVC\Library\Number($this->getValue());
		return $Value->readDigit()." đồng";
	}
	
	function findItem($IdResource){
		$mOD = new \MVC\Mapper\OrderExportDetail();
		$OD = $mOD->findItem( array($this->getId(), $IdResource) );
		return $OD;
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdTracking' 	=> $this->getIdTracking(),
			'IdUser' 		=> $this->getIdUser(),
			'Tag'			=> $this->getTag(),
			'Date'			=> $this->getDate(),
			'Note'			=> $this->getNote()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];	
		$this->IdTracking 	= $Data[1];
		$this->IdUser 		= $Data[2];
		$this->Tag 			= $Data[3];
		if ($Data[4]=="")
			$this->Date 	= \date('Y-m-d H:i:s');
		else	
			$this->Date 	= $Data[4];
		
		$this->Note 		= $Data[5];
    }
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------	
	function getURLDetail(){
		$Tracking = $this->getTracking();		
		return "/export/big/".$Tracking->getIdDomain()."/".$Tracking->getIdCustomer()."/".$Tracking->getId()."/".$this->getId();		
	}
	function getURLPrint(){
		$Tracking = $this->getTracking();
		return "/export/big/".$Tracking->getIdDomain()."/".$Tracking->getIdCustomer()."/".$Tracking->getId()."/".$this->getId()."/print";		
	}	
	function getURLCall(){
		$Tracking = $this->getTracking();		
		return "/export/big/".$Tracking->getIdDomain()."/".$Tracking->getIdCustomer()."/".$Tracking->getId()."/".$this->getId()."/call";		
	}
	function getURLCallExe(){
		$Tracking = $this->getTracking();
		return "/export/big/".$Tracking->getIdDomain()."/".$Tracking->getIdCustomer()."/".$Tracking->getId()."/".$this->getId()."/call/exe";
	}
	
	//---------------------------------------------------------
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
}
?>