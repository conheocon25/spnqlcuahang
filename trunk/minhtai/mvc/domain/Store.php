<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Store extends Object 
{
    private $Id;	
	private $Name;
	private $Address;
	
	private $Details;
	private $Resources;
		     
	/* ----------------------------------------------------------------------------------------
	--- Hàm khởi tạo và thiết lập các thuộc tính
	---------------------------------------------------------------------------------------- */
    function __construct( $Id=null, $Name=null, $Address=null) {
        $this->Id = $Id;	
		$this->Name = $Name;
		$this->Address = $Address;
        parent::__construct( $Id );
    }
    function getId( ) {
        return $this->Id;
    }
	function getIdPrint( ) {
        return "s".$this->Id;
    }
	
    function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
    function getName( ) {
        return $this->Name;
    }
	
	function setAddress( $Address ) {
        $this->Address = $Address;
        $this->markDirty();
    }
    function getAddress( ) {
        return $this->Address;
    }
    		
	/* ----------------------------------------------------------------------------------------
	--- Hàm lấy các giá trị con
	---------------------------------------------------------------------------------------- */	
	function getSuppliers() {	
        if ( ! isset( $this->Suppliers ) ) {
			$mSupplier = new \MVC\Mapper\Supplier();
            $this->Suppliers = $mSupplier->findAll();
        }
        return $this->Suppliers;
    }
	
    function getDetails() {	
        if ( ! isset( $this->Details ) ) {
			$mSD = new \MVC\Mapper\StoreDetail();
            $this->Details = $mSD->findByStore( array($this->getId()));
        }
        return $this->Details;
    }
	
	//Tổng giá trị tồn của kho tính đến thời điểm hiện tại
	function getValue(){
		$Details = $this->getDetails();
		$Details->rewind();
		
		$Sum = 0;
		while($Details->valid()){
			$Detail = $Details->current();
			$Sum += $Detail->getValue();
			$Details->next();
		}
		return $Sum;
	}
	function getValuePrint(){
		$Value = $this->getValue();
		$N = new \MVC\Library\Number($Value);
		return $N->formatCurrency()." đ";
	}
	function getValueStrPrint(){
		$Value = $this->getValue();
		$N = new \MVC\Library\Number($Value);
		return $N->readDigit()." đồng";
	}
	
	/* ----------------------------------------------------------------------------------------
	--- Hàm lấy về các địa chỉ để xử lí
	--------------------------------------------------------------------------------------- */					
	function getURLUpdLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/store/".$this->getId()."/upd/load";
	}
	function getURLUpdExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/store/".$this->getId()."/upd/exe";
	}
	
	function getURLDelLoad(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/store/".$this->getId()."/del/load";						
	}
	function getURLDelExe(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/store/".$this->getId()."/del/exe";
	}
	
	function getURLInit(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/setting/store/".$this->getId()."/init";
	}
	
	function getURLStoreDetail(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/report/store/".$this->getId();
	}
	
	function getURLStoreDetailPrint(){
		$App = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getAlias();
		return "/".$App."/report/store/".$this->getId()."/print";
	}
	
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}	
}

?>
