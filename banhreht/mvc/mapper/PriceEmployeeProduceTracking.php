<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class PriceEmployeeProduceTracking extends Mapper implements \MVC\Domain\PriceEmployeeProduceTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->findByStmt = self::$PDO->prepare("
		SELECT
			E.id as Id,
			E.name as Name,	
			E.factory as IdFactory,
			SUM(IF(PEP.idproduct=1, price, 0)) as P01,
			SUM(IF(PEP.idproduct=2, price, 0)) as P02,
			SUM(IF(PEP.idproduct=9, price, 0)) as P03,
			SUM(IF(PEP.idproduct=10, price, 0)) as P04,
			SUM(IF(PEP.idproduct=15, price, 0)) as  P05,
			SUM(IF(PEP.idproduct=16, price, 0)) as  P06,
			SUM(IF(PEP.idproduct=20, price, 0)) as  P07,
			SUM(IF(PEP.idproduct=21, price, 0)) as  P08,
			SUM(IF(PEP.idproduct=25, price, 0)) as  P09,
			SUM(IF(PEP.idproduct=26, price, 0)) as  P10,
			SUM(IF(PEP.idproduct=30, price, 0)) as  P11,
			SUM(IF(PEP.idproduct=34, price, 0)) as  P12,
			SUM(IF(PEP.idproduct=35, price, 0)) as  P13,
			SUM(IF(PEP.idproduct=39, price, 0)) as  P14,
			SUM(IF(PEP.idproduct=40, price, 0)) as  P15
		FROM 
			braemployee E left join brapriceemployeeproduce PEP on E.id = PEP.idemployee
		WHERE E.factory = ?
		GROUP BY E.id
		ORDER BY E.name
		");
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new PriceEmployeeProduceTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PriceEmployeeProduceTracking(			
			$array['Id'],
			$array['Name'],			
			$array['IdFactory'],
			$array['P01'], 
			$array['P02'], 
			$array['P03'],
			$array['P04'], 
			$array['P05'], 
			$array['P06'], 
			$array['P07'], 
			$array['P08'], 
			$array['P09'], 
			$array['P10'], 
			$array['P11'], 
			$array['P12'], 
			$array['P13'], 
			$array['P14'], 
			$array['P15']);
        return $obj;
    }
	
    protected function targetClass() {
        return "PriceEmployeeProduceTracking";
    }
    protected function doInsert( \MVC\Domain\Object $object ) {}    
    function doUpdate( \MVC\Domain\Object $object ) {}
	function doDelete( array $values ) { }	
    function selectStmt() { return $this->selectStmt;}
    function selectAllStmt() { return $this->selectAllStmt;}
	
	function findBy( $values ){
        $this->findByStmt->execute( $values);
        return new PriceEmployeeProduceTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }	
}
?>
