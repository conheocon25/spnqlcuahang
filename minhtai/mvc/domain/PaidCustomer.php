<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class PaidCustomer extends Object{

    private $Id;
	private $IdCustomer;
	private $Date;
    private $Value;
	private $Note;
	
	private $Customer;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct(
		$Id=null,		
		$IdCustomer=null,
		$Date=null,
		$Value=0,
		$Note=null
	) {
        $this->Id = $Id;
		$this->IdCustomer = $IdCustomer;
		$this->Date = $Date;
		$this->Value = $Value;
		$this->Note = $Note;
        parent::__construct( $Id );
    }
    function setId( $Id ) {
        $this->Id = $Id;
        $this->markDirty();
    }
    function getId( ) {
        return $this->Id;
    }
	function getIdPrint( ) {
        return "CustomerPaid".$this->Id;
    }
			
    function setIdCustomer( $IdCustomer ) {
        $this->IdCustomer = $IdCustomer;
        $this->markDirty();
    }
    function getIdCustomer( ) {
        return $this->IdCustomer;
    }
	function getCustomer( ) {
		if ( !isset($this->Customer) ){
			$mCustomer = new \MVC\Mapper\Customer();
			$this->Customer = $mCustomer->find($this->IdCustomer);
		}
        return $this->Customer;
    }
    
	function setValue( $Value ) {
        $this->Value = $Value;
        $this->markDirty();
    }	
	function getValue( ) {
		if (!isset($this->Value))
			return 0;
        return $this->Value;
    }
	function getValuePrint( ) {        
		$num = number_format($this->Value, 0, ',', '.');
		return $num." đ";
    }
	
	function setDate( $Date ) {
        $this->Date = $Date;
        $this->markDirty();
    }
	function getDate( ) {
        return $this->Date;
    }
	function getDatePrint( ) {        
		$date = new \DateTime($this->Date);
		return $date->format('d/m/Y');
    }
	
	function getEmployee(){
		$mEmployee = new \MVC\Mapper\Employee();
		$Employee = $mEmployee->find($this->IdCustomer);
		return $Employee;
    }
	   
	function setNote( $Note ) {
        $this->Note = $Note;
        $this->markDirty();
    }
	function getNote( ) {
		if (!isset($this->Note))
			return "Click để thêm ghi chú";
        return $this->Note;
    }	
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/paid/customer/".$this->getIdCustomer()."/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();		
		return "/".$App."/paid/customer/".$this->getIdCustomer()."/".$this->getId()."/upd/exe";
	}
	
	function getURLDelLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/paid/customer/".$this->getIdCustomer()."/".$this->getId()."/del/load";
	}
	function getURLDelExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/paid/customer/".$this->getIdCustomer()."/".$this->getId()."/del/exe";
	}
	
	/*--------------------------------------------------------------------*/	
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
		
}
?>