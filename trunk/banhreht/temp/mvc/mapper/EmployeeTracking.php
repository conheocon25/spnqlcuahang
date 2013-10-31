<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class EmployeeTracking extends Mapper implements \MVC\Domain\EmployeeTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "");
        $this->selectStmt = self::$PDO->prepare( 
                            "");
        $this->updateStmt = self::$PDO->prepare( 
                            "");
        $this->insertStmt = self::$PDO->prepare( 
                            "");
		$this->findByStmt = self::$PDO->prepare( 
        "SELECT 			
			E.id as ID,
			NAME,
			IFNULL((SELECT SUM(value) FROM braemployeeloan WHERE idemployee=E.ID 
				AND date>=? AND date<=? GROUP BY idemployee),0) AS PS1,
			IFNULL((SELECT SUM(quantity*price) FROM braemployeeproduce WHERE idemployee=E.ID 
				AND date>=? AND date<=? GROUP BY idemployee),0) AS PS2
			FROM braemployee E
			WHERE factory = ?
			ORDER BY NAME
		");
		$this->deleteStmt = self::$PDO->prepare("");
		$this->SumByStmt = self::$PDO->prepare("
			SELECT SUM(
	IFNULL((SELECT SUM(quantity*price) FROM braemployeeproduce WHERE idemployee=E.ID AND date>= ? AND date <= ? GROUP BY idemployee),0) -
	IFNULL((SELECT SUM(value) FROM braemployeeloan WHERE idemployee=E.ID AND date >= ? AND date <= ? GROUP BY idemployee),0)
)
FROM braemployee E
WHERE factory = ?
		");
    } 
    function getCollection( array $raw ) {        
		return new EmployeeTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\EmployeeTracking(			
			$array['ID'],
			$array['NAME'], 			
			$array['PS1'], 
			$array['PS2']);
        return $obj;
    }
	
    protected function targetClass() {
        return "EmployeeTracking";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
		); 
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
        return new EmployeeTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
	function SumBy( $values ) {		
        $this->SumByStmt->execute( $values);
		$a = $this->SumByStmt->fetchAll();		
        return $a[0][0];
    }
}
?>
