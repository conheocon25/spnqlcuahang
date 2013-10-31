<?php
Namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class SupplierDebt extends Object{

    private $Id;
	private $IdSupplier;
	private $Date;		
    private $Value;
	private $Description;
			
	//-------------------------------------------------------------------------
	//Hàm khởi tạo và thiết lập các thuộc tính
	//-------------------------------------------------------------------------
    function __construct( $Id=null, $IdSupplier=null, $Date=null, $Value=0, $Description=null ) {
        $this->Id = $Id;		
		$this->IdSupplier = $IdSupplier;
		$this->Date = $Date;
		$this->Value = $Value;
		$this->Description = $Description;
        parent::__construct( $Id );
    }
    
    function setIdSupplier( $IdSupplier ) {
        $this->IdSupplier = $IdSupplier;
        $this->markDirty();
    }
    function getIdSupplier( ) {
        return $this->IdSupplier;
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
		$num = number_format($this->Value, 0, ',', ' ');
		return $num;
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
	   
	function setDescription( $Description ) {
        $this->Description = $Description;
        $this->markDirty();
    }
	function getDescription( ) {
        return $this->Description;
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
}
?>