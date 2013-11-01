<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class CustomerOrder extends Object{

    private $Id;
	private $IdCustomer;
	private $Date;	
    private $Note;
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdCustomer=null, $Date=null, $Note=null){
        $this->Id = $Id;
		$this->IdCustomer = $IdCustomer;
		$this->Date = $Date;		
		$this->Note = $Note;
        parent::__construct( $Id );
    }
	function setId( $Id) { $this->Id = $Id;}
    function getId( ) {return $this->Id;}
	
	function getIdCustomer( ) {return $this->IdCustomer;}
    function setIdCustomer( $IdCustomer ){$this->IdCustomer = $IdCustomer;$this->markDirty();}
	function getUser( ) {
		$mUser = new \MVC\Mapper\User();
		$User = $mUser->find($this->IdCustomer);
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
			
	function getDetailAll(){
		$mOD = new \MVC\Mapper\CustomerOrderDetail();
		$DetailAll = $mOD->findBy(array($this->getId()));
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
	
	function getValuePrint(){$Value = new \MVC\Library\Number($this->getValue()); return $Value->formatCurrency()." đ";}	
	function getValueStrPrint(){$Value = new \MVC\Library\Number($this->getValue()); return $Value->readDigit()." đồng";}
	
	function toXML($Doc){
		$Obj = $Doc->createElement( "orderexport" );
		$Obj->setAttributeNode(new \DOMAttr('id', $this->getId()));
						
		$IdCustomer = $Doc->createElement( "iduser" );
		$IdCustomer->appendChild($Doc->createTextNode( $this->getIdCustomer() ));
		
		$Date = $Doc->createElement( "date" );
		$Date->appendChild($Doc->createTextNode( $this->getDate() ));
		
		$State = $Doc->createElement( "state" );
		$State->appendChild($Doc->createTextNode( $this->getState() ));
		
		$Note = $Doc->createElement( "description" );
		$Note->appendChild($Doc->createTextNode( $this->getNote() ));
		
		$Obj->appendChild( $IdCustomer	);
		$Obj->appendChild( $Date 		);
		$Obj->appendChild( $State 		);
		$Obj->appendChild( $Note	);
						
		return $Obj;
	}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLPrint(){return "/export/".$this->getId()."/print";}
	function getURLDetail(){return "/export/".$this->getId();}
	
	//---------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>