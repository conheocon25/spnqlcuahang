<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class CustomerPaidTracking extends Mapper implements \MVC\Domain\CustomerPaidTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->findByStmt = self::$PDO->prepare( 
        "SELECT 
			C.id as Id,
			C.name as Name,	
			(?) as Date,
			sum(IF(CP.date=?, CP.value, 0)) as Value
		FROM 
			bracustomer C left join bracustomerpaid CP on C.id = CP.idcustomer
		GROUP BY
			C.id
		");
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new CustomerPaidTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\CustomerPaidTracking(
			$array['Id'],
			$array['Name'],
			$array['Date'],
			$array['Value']);
        return $obj;
    }
	
    protected function targetClass() {
        return "CustomerPaidTracking";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array();
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array();
        $this->updateStmt->execute( $values );
    }

	function doDelete( array $values ) {    
        $this->deleteStmt->execute( $values );
    }
	
    function selectStmt() {
        return $this->selectStmt;
    }

    function selectAllStmt() {		
        return $this->selectAllStmt;
    }
	function findBy( $values ) {		
        $this->findByStmt->execute( $values);
        return new CustomerPaidTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
	
}
?>
