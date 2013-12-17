<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class StoreDetail extends Object{
    private $Id;
	private $IdStore;
	private $IdResource;
	private $Count;
		
	private $Resource;
	/* ----------------------------------------------------------------------------------------
	--- Hàm khởi tạo và thiết lập các thuộc tính
	---------------------------------------------------------------------------------------- */
    function __construct( 
		$Id=null, 
		$IdStore=null, 
		$IdResource=null,		
		$Count=null		
	){
        $this->Id = $Id;
		$this->IdStore = $IdStore;
		$this->IdResource = $IdResource;		
		$this->Count = $Count;
				
        parent::__construct( $Id );
    }
	function setId( $Id){
        return $this->Id = $Id;
    }
    function getId( ){
        return $this->Id;
    }
	function getIdPrint( ) {
        return sprintf("sd", $this->Id);
    }
	 
    function setIdResource( $IdResource ){
        $this->IdResource = $IdResource;
        $this->markDirty();
    }
    function getIdResource( ){
        return $this->IdResource;
    }	         
	function getResource( ){
		if (!isset($this->Resource)){
			$mResource = new \MVC\Mapper\Resource();
			$this->Resource = $mResource->find($this->IdResource);
		}
        return $this->Resource;
    }

	function setIdStore( $IdStore ) {
        $this->IdStore = $IdStore;
        $this->markDirty();
    }
    function getIdStore( ) {
        return $this->IdStore;
    }
	
	//Số lượng tồn đầu kì	
    function setCount( $Count ) {
        $this->Count = $Count;
        $this->markDirty();
    }
    function getCount( ) {
		if (!isset($this->Count))
			return 0;
        return $this->Count;
    }		
	function getCountPrint( ){
		$N = new \MVC\Library\Number($this->getCount());
        return $N->formatCurrency();
    }
	
	//Giá trị tồn đầu kì
	function getInitValue(){
		$Resource = $this->getResource();
		return $Resource->getPrice2()*$this->getCount();
	}
	function getInitValuePrint(){
		$Value = $this->getInitValue();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency();
	}
	
	//Tổng giá trị xuất
	function getExportValue(){
		$mSD = new \MVC\Mapper\StoreDetail();
		$Value = $mSD->exportValue( array($this->getIdStore(), $this->getIdResource()) );
		return $Value;
	}
	function getExportValuePrint(){
		$N = new \MVC\Library\Number( $this->getExportValue() );
		return $N->formatCurrency();
	}
	
	//Tổng giá trị nhập
	function getImportValue(){
		$mSD = new \MVC\Mapper\StoreDetail();
		$Value = $mSD->importValue( array($this->getIdStore(), $this->getIdResource()) );
		return $Value;
	}
	function getImportValuePrint(){
		$N = new \MVC\Library\Number( $this->getImportValue() );
		return $N->formatCurrency();
	}
	
	//Giá trị tồn lại
	function getValue(){
		$Value = $this->getInitValue() + $this->getImportValue() - 	$this->getExportValue();
		return $Value;
	}
	function getValuePrint(){
		$N = new \MVC\Library\Number( $this->getValue() );
		return $N->formatCurrency()." đ";
	}
		
	/* ----------------------------------------------------------------------------------------
	--- Hàm lấy các giá trị con
	---------------------------------------------------------------------------------------- */
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/store/".$this->getIdStore()."/".$this->getIdResource()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/store/".$this->getIdStore()."/".$this->getIdResource()."/upd/exe";
	}
	
	/* ----------------------------------------------------------------------------------------
	--- Hàm lấy về các địa chỉ để xử lí
	--------------------------------------------------------------------------------------- */
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	
}
?>
