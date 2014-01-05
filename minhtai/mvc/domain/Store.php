<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Store extends Object 
{
    private $Id;	
	private $Name;
	private $Address;
				     
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
	public function toJSON(){
		$json = array(
			'Id' 		=> $this->getId(),
			'Name' 		=> $this->getName(),			
			'Address' 	=> $this->getAddress()
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 		= $Data[0];	
		$this->Name 	= $Data[1];
		$this->Address 	= $Data[2];
    }
	
	/* ----------------------------------------------------------------------------------------
	--- Hàm lấy về các địa chỉ để xử lí
	--------------------------------------------------------------------------------------- */					
		
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}	
}

?>
