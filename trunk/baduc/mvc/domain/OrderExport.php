<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class OrderExport extends Object{
    private $Id;
	private $IdTracking;
	private $Date;	
    private $Note;
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdTracking=null, $Date=null, $Note=null){
        $this->Id = $Id;
		$this->IdTracking = $IdTracking;
		$this->Date = $Date;		
		$this->Note = $Note;
        parent::__construct( $Id );
    }
	function setId( $Id) { $this->Id = $Id;}
    function getId( ) {return $this->Id;}
	
	function getIdTracking( ) {return $this->IdTracking;}
    function setIdTracking( $IdTracking ){$this->IdTracking = $IdTracking;$this->markDirty();}
	function getTracking( ) {
		$mCT 		= new \MVC\Mapper\CustomerTracking();
		$Tracking 	= $mCT->find( $this->getId() );
		return $Tracking;
	}
	
	function getDate( ) {return $this->Date;}
    function setDate( $Date ) {$this->Date = $Date;$this->markDirty();}
	function getDatePrint( ) {$Date = new \MVC\Library\Date($this->Date);return $Date->getDateFormat();}
			
	function getNote( ) {return $this->Note;}
	function setNote( $Note ) {$this->Note = $Note;$this->markDirty();}
	
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
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdTracking' 	=> $this->getIdTracking(),
			'Date'			=> $this->getDate(),
			'Note'			=> $this->getNote()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];	
		$this->IdTracking 	= $Data[1];
		$this->Date 		= $Data[2];
		$this->Note 		= $Data[3];
    }
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLPrint(){return "/selling/".$this->getId()."/print";}
	function getURLDetail(){return "/selling/".$this->getId();}
	
	//---------------------------------------------------------
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
}
?>