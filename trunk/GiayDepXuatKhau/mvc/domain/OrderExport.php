<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class OrderExport extends Object{

    private $Id;
	private $IdCustomer;
	private $Date;
    private $Description;
			
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $IdCustomer=null, $Date=null, $Description=null) {
        $this->Id = $Id;
		$this->IdCustomer = $IdCustomer;
		$this->Date = $Date;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
    function getId( ) {return $this->Id;}
    
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
			
	function getDescription( ) {return $this->Description;}
	function setDescription( $Description ) {$this->Description = $Description;$this->markDirty();}
	
	function getDetailAll(){		
		$mOID = new \MVC\Mapper\OrderExportDetail();
		$Tracks = $mOID->trackBy(array(
			$this->getId(),
			$this->getIdCustomer(),
			$this->getId()
		));
		
		return $Tracks;
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
	
	function getTicket(){
		$DetailAll = $this->getDetailAll();
		$Count = 0;
		while ($DetailAll->valid()){
			$Count += $DetailAll->current()->getCount();
			$DetailAll->next();
		}
		return $Count;
	}
	function getTicketPrint(){
		$Value = new \MVC\Library\Number($this->getTicket());
		return $Value->formatCurrency();
	}
	
	function getTicket1(){
		$DetailAll = $this->getDetailAll();
		$Count = 0;
		while ($DetailAll->valid()){
			$Count += $DetailAll->current()->getCount1();
			$DetailAll->next();
		}
		return $Count;
	}
	function getTicket1Print(){
		$Value = new \MVC\Library\Number($this->getTicket1());
		return $Value->formatCurrency();
	}
	
	function getValuePrint(){
		$Value = new \MVC\Library\Number($this->getValue());
		return $Value->formatCurrency()." đ";
	}
	
	function getValue1(){
		$DetailAll = $this->getDetailAll();
		$Count = 0;
		while ($DetailAll->valid()){
			$Count += $DetailAll->current()->getValue1();
			$DetailAll->next();
		}
		return $Count;
	}
	
	function getValue1Print(){
		$Value = new \MVC\Library\Number($this->getValue1());
		return $Value->formatCurrency()." đ";
	}
	
	function getValue2(){
		$Count = $this->getValue() - $this->getValue1();
		return $Count;
	}
	
	function getValue2Print(){
		$Value = new \MVC\Library\Number($this->getValue2());
		return $Value->formatCurrency()." đ";
	}
	
	function getValueStrPrint(){
		$Value = new \MVC\Library\Number($this->getValue());
		return $Value->readDigit()." đồng";
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdCustomer' 	=> $this->getIdCustomer(),
			'Date'			=> $this->getDate(),
			'Description'	=> $this->getDescription()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];	
		$this->IdCustomer 	= $Data[1];	
		$this->Date 		= $Data[2];
		$this->Description 	= $Data[3];
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