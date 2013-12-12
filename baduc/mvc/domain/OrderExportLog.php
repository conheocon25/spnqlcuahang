<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class OrderExportLog extends Object{
    private $Id;
	private $DateTime;
	private $IdOrder;
				
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $DateTime=null, $IdOrder=null){
        $this->Id 			= $Id;
		$this->DateTime 	= $DateTime;
		$this->IdOrder 		= $IdOrder;
        parent::__construct( $Id );
    }
	function setId( $Id) { $this->Id = $Id;}
    function getId( ) {return $this->Id;}
			
	function getIdOrder( ) {return $this->IdOrder;}
    function setIdOrder( $IdTracking ){$this->IdOrder = $IdOrder; $this->markDirty();}
	function getOrder( ) {
		$mOrder 	= new \MVC\Mapper\OrderExport();
		$Order 		= $mOrder->find( $this->getIdOrder() );
		return $Order;
	}
			
	function getDateTime( ) {return $this->DateTime;}
    function setDateTime( $DateTime ) {$this->DateTime = $DateTime;$this->markDirty();}	
	function getDateTimePrint( ) {return date('d/m H:i',strtotime($this->DateTime));}
			
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'IdOrder' 		=> $this->getIdOrder(),			
			'DateTime'		=> $this->DateTime()			
		);
		return json_encode($json);
	}
	
	function setArray( $Data ){
        $this->Id 			= $Data[0];			
		$this->DateTime 	= $Data[1];		
		$this->IdOrder 		= $Data[2];
		
		if ($Data[1]=="")
			$this->DateTime 	= \date('Y-m-d H:i:s');				
    }
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------	
		
	//---------------------------------------------------------
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}
	static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
}
?>