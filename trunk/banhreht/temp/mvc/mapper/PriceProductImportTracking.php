<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class PriceProductImportTracking extends Mapper implements \MVC\Domain\PriceProductImportTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->findByStmt = self::$PDO->prepare("
		SELECT 
			F.id as Id,
			F.name as Name,	
			sum(IF(PPI.idproduct=1, price, 0)) as P01,
			sum(IF(PPI.idproduct=2, price, 0)) as P02,
			sum(IF(PPI.idproduct=9, price, 0)) as P03,
			sum(IF(PPI.idproduct=10, price, 0)) as P04,
			sum(IF(PPI.idproduct=15, price, 0)) as  P05,
			sum(IF(PPI.idproduct=16, price, 0)) as  P06,
			sum(IF(PPI.idproduct=20, price, 0)) as  P07,
			sum(IF(PPI.idproduct=21, price, 0)) as  P08,
			sum(IF(PPI.idproduct=25, price, 0)) as  P09,
			sum(IF(PPI.idproduct=26, price, 0)) as  P10,
			sum(IF(PPI.idproduct=30, price, 0)) as  P11,
			sum(IF(PPI.idproduct=34, price, 0)) as  P12,
			sum(IF(PPI.idproduct=35, price, 0)) as  P13,
			sum(IF(PPI.idproduct=39, price, 0)) as  P14,
			sum(IF(PPI.idproduct=40, price, 0)) as  P15,
			sum(IF(PPI.idproduct=48, price, 0)) as  P16,
			sum(IF(PPI.idproduct=49, price, 0)) as  P17,
			sum(IF(PPI.idproduct=50, price, 0)) as  P18,
			sum(IF(PPI.idproduct=51, price, 0)) as  P19,
			sum(IF(PPI.idproduct=52, price, 0)) as  P20,
			sum(IF(PPI.idproduct=53, price, 0)) as  P21,
			sum(IF(PPI.idproduct=54, price, 0)) as  P22
		FROM 
			brafactory F left join brapriceproductimport PPI on F.id = PPI.idfactory
		GROUP BY
			F.id
		ORDER BY			
			F.type desc, F.name
		");
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new PriceProductImportTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PriceProductImportTracking(			
			$array['Id'],
			$array['Name'],			
			$array['P01'], $array['P02'], $array['P03'], $array['P04'], $array['P05'], $array['P06'], 
			$array['P07'], $array['P08'], $array['P09'], $array['P10'], $array['P11'], $array['P12'], 
			$array['P13'], $array['P14'], $array['P15'], $array['P16'], $array['P17'], $array['P18'],
			$array['P19'], $array['P20'], $array['P21'], $array['P22']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "PriceProductImportTracking";
    }
    protected function doInsert( \MVC\Domain\Object $object ) {}    
    function doUpdate( \MVC\Domain\Object $object ) {}
	function doDelete( array $values ) { }	
    function selectStmt() { return $this->selectStmt;}
    function selectAllStmt() { return $this->selectAllStmt;}
	
	function findBy( $values ){
        $this->findByStmt->execute( $values);
        return new PriceProductImportTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
}
?>
