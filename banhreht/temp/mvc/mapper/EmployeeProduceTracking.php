<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class EmployeeProduceTracking extends Mapper implements \MVC\Domain\EmployeeProduceTrackingFinder {

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
        " 			
		SELECT 
			E.id as Id,
			E.name as Name,
			(?) as Date,
			E.factory as IdFactory,
			sum(IF(EP.idproduct=1 AND EP.date=?, quantity, 0)) as Product01,
			sum(IF(EP.idproduct=2 AND EP.date=?, quantity, 0)) as Product02,
			sum(IF(EP.idproduct=9 AND EP.date=?, quantity, 0)) as Product03,
			sum(IF(EP.idproduct=10 AND EP.date=?, quantity, 0)) as Product04,
			sum(IF(EP.idproduct=15 AND EP.date=?, quantity, 0)) as  Product05,
			sum(IF(EP.idproduct=16 AND EP.date=?, quantity, 0)) as  Product06,
			sum(IF(EP.idproduct=20 AND EP.date=?, quantity, 0)) as  Product07,
			sum(IF(EP.idproduct=21 AND EP.date=?, quantity, 0)) as  Product08,
			sum(IF(EP.idproduct=25 AND EP.date=?, quantity, 0)) as  Product09,
			sum(IF(EP.idproduct=26 AND EP.date=?, quantity, 0)) as  Product10,
			sum(IF(EP.idproduct=30 AND EP.date=?, quantity, 0)) as  Product11,
			sum(IF(EP.idproduct=34 AND EP.date=?, quantity, 0)) as  Product12,
			sum(IF(EP.idproduct=35 AND EP.date=?, quantity, 0)) as  Product13,
			sum(IF(EP.idproduct=39 AND EP.date=?, quantity, 0)) as  Product14,
			sum(IF(EP.idproduct=40 AND EP.date=?, quantity, 0)) as  Product15
		FROM 
			braemployee E left join braemployeeproduce EP on E.id = EP.idemployee
		WHERE E.factory = ?
		GROUP BY
			E.id
		ORDER BY E.name	
		");
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new EmployeeProduceTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\EmployeeProduceTracking(			
			$array['Id'],
			$array['Name'],
			$array['Date'],
			$array['IdFactory'],			
			$array['Product01'], 
			$array['Product02'], 
			$array['Product03'],
			$array['Product04'], 
			$array['Product05'], 
			$array['Product06'], 
			$array['Product07'], 
			$array['Product08'], 
			$array['Product09'], 
			$array['Product10'], 
			$array['Product11'], 
			$array['Product12'], 
			$array['Product13'], 
			$array['Product14'], 
			$array['Product15']);
        return $obj;
    }
	
    protected function targetClass() {
        return "EmployeeProduceTracking";
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
        return new EmployeeProduceTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }	
}
?>
