<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class CustomerTracking extends Object{

    private $Id;
	private $Name;
	private $Date;
	private $SResourceImport;
    private $SPaid;
	private $SProductExport;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null, $Date=null, $SResourceImport=0, $SPaid=0, $SProductExport=0 ) {
        $this->Id = $Id;
		$this->Name = $Name;
		$this->Date = $Date;
		$this->SResourceImport = $SResourceImport;
		$this->SPaid = $SPaid;
		$this->SProductExport = $SProductExport;
        parent::__construct( $Id );
    }
    
	function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
	
	function setId($ID){
		$this->Id = $ID;
	}
	
	function getId(){
		return $this->Id;
	}
	
    function getName() {
        return $this->Name;
    }
	
	function setDate( $Date) {
        $this->Date= $Date;
        $this->markDirty();
    }
    function getDate() {
        return $this->Date;
    }
	function getDatePrint( ) {        
		$date = new \DateTime($this->Date);
		return $date->format('d/m/Y');
    }
	
	function setSResourceImport( $SResourceImport) {
        $this->SResourceImport = $SResourceImport;
        $this->markDirty();
    }	
	function getSResourceImport( ) {
        return $this->SResourceImport;
    }
		
	function getSResourceImportPrint( ) {        
		$num = number_format($this->SResourceImport, 0, ',', ' ');
		return $num;
    }
	function getDetailRE() {
		$mRE = new \MVC\Mapper\ResourceExport();
		$REs = $mRE->findByDate(array($this->Id, $this->Date));		
		//echo "so luong".$REs->count();
        return $REs;
    }
	 
	function setSPaid( $SPaid) {
        $this->SPaid = $SPaid;
        $this->markDirty();
    }	
	function getSPaid( ) {
        return $this->SPaid;
    }
	function getSPaidPrint( ) {
		$num = number_format($this->SPaid, 0, ',', ' ');
		return $num;
    }
	function getDetailCP() {
		$mCP = new \MVC\Mapper\CustomerPaid();
		$CPs = $mCP->findByDate(array($this->Id, $this->Date));
        return $PIs;
    }
	
	function setSProductExport( $SProductExport) {
        $this->SProductExport = $SProductExport;
        $this->markDirty();
    }	
	function getSProductExport( ) {
        return $this->SProductExport;
    }
	
	function getDetailPE() {
		$mPE = new \MVC\Mapper\ProductExport();		
		$PEs = $mPE->findByDate(array($this->Id, $this->Date));		
        return $PEs;
    }
	
	function getSProductExportPrint( ) {        
		$num = number_format($this->SProductExport, 0, ',', ' ');
		return $num;
    }
	function getSValue( ) {
        return $this->SProductExport - $this->SPaid - $this->SResourceImport;
    }
	function getSValuePrint( ) {        
		$num = number_format($this->getSValue(), 0, ',', ' ');
		return $num;
    }
	/*--------------------------------------------------------------------*/
    static function findAll() {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->findAll();
    }
    static function find( $Id ) {
        $finder = self::getFinder( __CLASS__ ); 
        return $finder->find( $Id );
    }
	/*--------------------------------------------------------------------*/
	/*Hàm lấy về các địa chỉ xử lí*/
	/*--------------------------------------------------------------------*/
	function getURLView(){
		return "";
	}	
	function getURLPrintFactoryTracking(){
		return "";
	}
}
?>