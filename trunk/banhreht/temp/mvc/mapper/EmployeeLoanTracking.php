<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class EmployeeLoanTracking extends Mapper implements \MVC\Domain\EmployeeLoanTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->findByStmt = self::$PDO->prepare( 
        "SELECT 
			E.id as Id,
			E.name as Name,
			(?) as Date,
			E.factory as IdFactory,
			sum(IF(EL.date=?, value, 0)) as Value
		FROM 
			braemployee E left join braemployeeloan EL on E.id = EL.idemployee
		WHERE E.factory = ?
		GROUP BY
			E.id
		ORDER BY E.name	
		");
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new EmployeeLoanTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\EmployeeLoanTracking(			
			$array['Id'],
			$array['Name'],
			$array['Date'],
			$array['IdFactory'],						
			$array['Value']);
        return $obj;
    }
	
    protected function targetClass() {
        return "EmployeeLoanTracking";
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
        return new EmployeeLoanTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
}
?>
