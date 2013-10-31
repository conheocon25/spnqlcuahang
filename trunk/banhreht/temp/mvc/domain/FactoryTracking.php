<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );
class FactoryTracking extends Object{

    private $Id;
	private $Name;
	private $Date;
	private $SResourceExport;
    private $SLoan;
	private $SProductImport;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $Name=null, $Date=null, $SResourceExport=0, $SLoan=0, $SProductImport=0 ) {
        $this->Id = $Id;
		$this->Name = $Name;
		$this->Date = $Date;
		$this->SResourceExport = $SResourceExport;
		$this->SLoan = $SLoan;
		$this->SProductImport = $SProductImport;
        parent::__construct( $Id );
    }
    
	function setName( $Name ) {
        $this->Name = $Name;
        $this->markDirty();
    }
	
	function setId($ID)
	{
		$this->Id = $ID;
	}
	
	function getId()
	{
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
	
	function setSResourceExport( $SResourceExport) {
        $this->SResourceExport = $SResourceExport;
        $this->markDirty();
    }	
	function getSResourceExport( ) {
        return $this->SResourceExport;
    }
		
	function getSResourceExportPrint( ) {        
		$num = number_format($this->SResourceExport, 0, ',', '.');
		return $num;
    }
	function getDetailRE() {
		$mRE = new \MVC\Mapper\ResourceExport();
		$REs = $mRE->findByDate(array($this->Id, $this->Date));		
        return $REs;
    }
	 
	function setSLoan( $SLoan) {
        $this->SLoan = $SLoan;
        $this->markDirty();
    }	
	function getSLoan( ) {
        return $this->SLoan;
    }
	function getSLoanPrint( ) {
		$num = number_format($this->SLoan, 0, ',', '.');
		return $num;
    }
	function getDetailFL() {
		$mFL = new \MVC\Mapper\FactoryLoan();
		$FLs = $mFL->findByDate(array($this->Id, $this->Date));
        return $PIs;
    }
	
	function setSProductImport( $SProductImport) {
        $this->SProductImport = $SProductImport;
        $this->markDirty();
    }	
	function getSProductImport( ) {
        return $this->SProductImport;
    }
	
	function getDetailPI() {
		$mPI = new \MVC\Mapper\ProductImport();
		$PIs = $mPI->findByDate(array($this->Id, $this->Date));			
        return $PIs;
    }
	
	function getSProductImportPrint( ) {        
		$num = number_format($this->SProductImport, 0, ',', '.');
		return $num;
    }
	function getSValue( ) {
        return $this->SProductImport - $this->SLoan - $this->SResourceExport;
    }
	function getSValuePrint( ) {        
		$num = number_format($this->getSValue(), 0, ',', '.');
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
		return "?cmd=ViewFactoryTracking&IdFactory=".$this->Id."&SResourceExport=".$this->SResourceExport."&SLoan=".$this->SLoan."&SProductImport=".$this->SProductImport;
	}
	
	function getURLPrintFactoryTracking(){
		return "?cmd=PrintFactoryTracking&IdFactory=".$this->Id."&SResourceExport=".$this->SResourceExport."&SLoan=".$this->SLoan."&SProductImport=".$this->SProductImport;
	}
}
?>