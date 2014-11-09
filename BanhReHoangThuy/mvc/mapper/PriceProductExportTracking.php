<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class PriceProductExportTracking extends Mapper implements \MVC\Domain\PriceProductExportTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->findByStmt = self::$PDO->prepare("
		SELECT 
			C.id as Id,
			C.name as Name,			
			sum(IF(PPE.idproduct=100, price, 0)) as P01,
			sum(IF(PPE.idproduct=101, price, 0)) as P02,
			sum(IF(PPE.idproduct=102, price, 0)) as P03,
			sum(IF(PPE.idproduct=103, price, 0)) as P04,
			sum(IF(PPE.idproduct=104, price, 0)) as  P05,
			sum(IF(PPE.idproduct=105, price, 0)) as  P06,
			sum(IF(PPE.idproduct=106, price, 0)) as  P07,
			sum(IF(PPE.idproduct=107, price, 0)) as  P08,
			sum(IF(PPE.idproduct=108, price, 0)) as  P09,
			sum(IF(PPE.idproduct=109, price, 0)) as  P10,
			sum(IF(PPE.idproduct=110, price, 0)) as  P11,
			sum(IF(PPE.idproduct=111, price, 0)) as  P12,
			sum(IF(PPE.idproduct=112, price, 0)) as  P13,
			sum(IF(PPE.idproduct=113, price, 0)) as  P14,
			sum(IF(PPE.idproduct=114, price, 0)) as  P15,			
			sum(IF(PPE.idproduct=115, price, 0)) as  P16,
			sum(IF(PPE.idproduct=116, price, 0)) as  P17,
			sum(IF(PPE.idproduct=117, price, 0)) as  P18,
			sum(IF(PPE.idproduct=118, price, 0)) as  P19,
			sum(IF(PPE.idproduct=119, price, 0)) as  P20,
			sum(IF(PPE.idproduct=120, price, 0)) as  P21,
			sum(IF(PPE.idproduct=121, price, 0)) as  P22,
			sum(IF(PPE.idproduct=122, price, 0)) as  P23,
			sum(IF(PPE.idproduct=123, price, 0)) as  P24,
			sum(IF(PPE.idproduct=124, price, 0)) as  P25,
			sum(IF(PPE.idproduct=125, price, 0)) as  P26,
			sum(IF(PPE.idproduct=126, price, 0)) as  P27,
			sum(IF(PPE.idproduct=127, price, 0)) as  P28,
			sum(IF(PPE.idproduct=128, price, 0)) as  P29,
			sum(IF(PPE.idproduct=129, price, 0)) as  P30,
			sum(IF(PPE.idproduct=130, price, 0)) as  P31,
			sum(IF(PPE.idproduct=131, price, 0)) as  P32,
			sum(IF(PPE.idproduct=132, price, 0)) as  P33,
			sum(IF(PPE.idproduct=133, price, 0)) as  P34,
			sum(IF(PPE.idproduct=134, price, 0)) as  P35
		FROM 
			bracustomer C left join brapriceproductexport PPE on C.id = PPE.idcustomer
		GROUP BY
			C.id
		");
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new PriceProductExportTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PriceProductExportTracking(			
			$array['Id'], $array['Name'],
			$array['P01'], $array['P02'], $array['P03'], $array['P04'], 
			$array['P05'], $array['P06'], $array['P07'], $array['P08'], 
			$array['P09'], $array['P10'], $array['P11'], $array['P12'], 
			$array['P13'], $array['P14'], $array['P15'], $array['P16'], 
			$array['P17'], $array['P18'], $array['P19'], $array['P20'], 
			$array['P21'], $array['P22'], $array['P23'], $array['P24'], 
			$array['P25'], $array['P26'], $array['P27'], $array['P28'],
			$array['P29'], $array['P30'], $array['P31'], $array['P32'],
			$array['P33'], $array['P34'], $array['P35']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "PriceProductExportTracking";
    }
    protected function doInsert( \MVC\Domain\Object $object ) {}    
    function doUpdate( \MVC\Domain\Object $object ) {}
	function doDelete( array $values ) { }	
    function selectStmt() { return $this->selectStmt;}
    function selectAllStmt() { return $this->selectAllStmt;}
	
	function findBy( $values ){
        $this->findByStmt->execute( $values);
        return new PriceProductExportTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }	
}
?>
