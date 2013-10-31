<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class ProductExportTracking extends Mapper implements \MVC\Domain\ProductExportTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->findByStmt = self::$PDO->prepare( 
        " 
		SELECT 
			C.id as Id,
			C.name as Name,
			(?) as Date,
			sum(IF(PE.idproduct=100 AND PE.date=?, quantity, 0)) as P01,
			sum(IF(PE.idproduct=101 AND PE.date=?, quantity, 0)) as P02,
			sum(IF(PE.idproduct=102 AND PE.date=?, quantity, 0)) as P03,
			sum(IF(PE.idproduct=103 AND PE.date=?, quantity, 0)) as P04,
			sum(IF(PE.idproduct=104 AND PE.date=?, quantity, 0)) as  P05,
			sum(IF(PE.idproduct=105 AND PE.date=?, quantity, 0)) as  P06,
			sum(IF(PE.idproduct=106 AND PE.date=?, quantity, 0)) as  P07,
			sum(IF(PE.idproduct=107 AND PE.date=?, quantity, 0)) as  P08,
			sum(IF(PE.idproduct=108 AND PE.date=?, quantity, 0)) as  P09,
			sum(IF(PE.idproduct=109 AND PE.date=?, quantity, 0)) as  P10,
			sum(IF(PE.idproduct=110 AND PE.date=?, quantity, 0)) as  P11,
			sum(IF(PE.idproduct=111 AND PE.date=?, quantity, 0)) as  P12,
			sum(IF(PE.idproduct=112 AND PE.date=?, quantity, 0)) as  P13,
			sum(IF(PE.idproduct=113 AND PE.date=?, quantity, 0)) as  P14,
			sum(IF(PE.idproduct=114 AND PE.date=?, quantity, 0)) as  P15,
			sum(IF(PE.idproduct=115 AND PE.date=?, quantity, 0)) as  P16,
			sum(IF(PE.idproduct=116 AND PE.date=?, quantity, 0)) as  P17,
			sum(IF(PE.idproduct=117 AND PE.date=?, quantity, 0)) as  P18,
			sum(IF(PE.idproduct=118 AND PE.date=?, quantity, 0)) as  P19,
			sum(IF(PE.idproduct=119 AND PE.date=?, quantity, 0)) as  P20,
			sum(IF(PE.idproduct=120 AND PE.date=?, quantity, 0)) as  P21,
			sum(IF(PE.idproduct=121 AND PE.date=?, quantity, 0)) as  P22,
			sum(IF(PE.idproduct=122 AND PE.date=?, quantity, 0)) as  P23,
			sum(IF(PE.idproduct=123 AND PE.date=?, quantity, 0)) as  P24,
			sum(IF(PE.idproduct=124 AND PE.date=?, quantity, 0)) as  P25,
			sum(IF(PE.idproduct=125 AND PE.date=?, quantity, 0)) as  P26,
			sum(IF(PE.idproduct=126 AND PE.date=?, quantity, 0)) as  P27,
			sum(IF(PE.idproduct=127 AND PE.date=?, quantity, 0)) as  P28,
			sum(IF(PE.idproduct=128 AND PE.date=?, quantity, 0)) as  P29,
			sum(IF(PE.idproduct=129 AND PE.date=?, quantity, 0)) as  P30,
			sum(IF(PE.idproduct=130 AND PE.date=?, quantity, 0)) as  P31
		FROM 
			bracustomer C left join braproductexport PE on C.id = PE.idcustomer
		GROUP BY
			C.id
		");
		$this->deleteStmt = self::$PDO->prepare("");		
		$this->trackByStmt = self::$PDO->prepare("
SELECT
	S.Id,
	S.Name,
	D.Date,
	S.P01, S.P02, S.P03, S.P04, S.P05, S.P06, S.P07,
	S.P08, S.P09, S.P10, S.P11, S.P12, S.P13, S.P14,
	S.P15, S.P16, S.P17, S.P18, S.P19, S.P20, S.P21,
	S.P22, S.P23, S.P24, S.P25, S.P26, S.P27, S.P28,
	S.P29, S.P30, S.P31, S.P32, S.P33, S.P34, S.P35
FROM
	(SELECT @rownum:=@rownum+1 as id, (date('2015-01-01') - interval @rownum day) as date 
		FROM
			(SELECT 0 union all select 1 union all select 3 union all select 4 union all select 5 union all select 6 union all select 6 union all select 7 union all select 8 union all select 9) t1,
			(SELECT 0 union all SELECT 1 union all SELECT 3 union all SELECT 4 union all SELECT 5 union all SELECT 6 union all SELECT 6 union all SELECT 7 union all SELECT 8 union all SELECT 9) t2,
			(SELECT 0 union all SELECT 1 union all SELECT 3 union all SELECT 4 union all SELECT 5 union all SELECT 6 union all SELECT 6 union all SELECT 7 union all SELECT 8 union all SELECT 9) t3,
			(SELECT @rownum:=0) r
	) D left join
	(SELECT 
			C.id as Id,
			C.name as Name,
			PE.date as Date,			
			sum(IF(PE.idproduct=100, quantity, 0)) as P01,
			sum(IF(PE.idproduct=101, quantity, 0)) as P02,
			sum(IF(PE.idproduct=102, quantity, 0)) as P03,
			sum(IF(PE.idproduct=103, quantity, 0)) as P04,
			sum(IF(PE.idproduct=104, quantity, 0)) as  P05,
			sum(IF(PE.idproduct=105, quantity, 0)) as  P06,
			sum(IF(PE.idproduct=106, quantity, 0)) as  P07,
			sum(IF(PE.idproduct=107, quantity, 0)) as  P08,
			sum(IF(PE.idproduct=108, quantity, 0)) as  P09,
			sum(IF(PE.idproduct=109, quantity, 0)) as  P10,
			sum(IF(PE.idproduct=110, quantity, 0)) as  P11,
			sum(IF(PE.idproduct=111, quantity, 0)) as  P12,
			sum(IF(PE.idproduct=112, quantity, 0)) as  P13,
			sum(IF(PE.idproduct=113, quantity, 0)) as  P14,
			sum(IF(PE.idproduct=114, quantity, 0)) as  P15,
			sum(IF(PE.idproduct=115, quantity, 0)) as  P16,
			sum(IF(PE.idproduct=116, quantity, 0)) as  P17,
			sum(IF(PE.idproduct=117, quantity, 0)) as  P18,
			sum(IF(PE.idproduct=118, quantity, 0)) as  P19,
			sum(IF(PE.idproduct=119, quantity, 0)) as  P20,
			sum(IF(PE.idproduct=120, quantity, 0)) as  P21,
			sum(IF(PE.idproduct=121, quantity, 0)) as  P22,
			sum(IF(PE.idproduct=122, quantity, 0)) as  P23,
			sum(IF(PE.idproduct=123, quantity, 0)) as  P24,
			sum(IF(PE.idproduct=124, quantity, 0)) as  P25,
			sum(IF(PE.idproduct=125, quantity, 0)) as  P26,
			sum(IF(PE.idproduct=126, quantity, 0)) as  P27,
			sum(IF(PE.idproduct=127, quantity, 0)) as  P28,
			sum(IF(PE.idproduct=128, quantity, 0)) as  P29,
			sum(IF(PE.idproduct=129, quantity, 0)) as  P30,
			sum(IF(PE.idproduct=130, quantity, 0)) as  P31,
			sum(IF(PE.idproduct=131, quantity, 0)) as  P32,
			sum(IF(PE.idproduct=132, quantity, 0)) as  P33,
			sum(IF(PE.idproduct=133, quantity, 0)) as  P34,
			sum(IF(PE.idproduct=134, quantity, 0)) as  P35
		FROM 
			bracustomer C left join braproductexport PE on C.id = PE.idcustomer
		WHERE
			C.id = ?
		GROUP BY
			PE.date) S
	ON D.date = S.date
WHERE
	month(D.date)=month(?)	AND year(D.date)=year(?)
GROUP BY
	D.date	
		");
		$this->trackBy1Stmt = self::$PDO->prepare("
SELECT
	S.Id,
	S.Name,
	D.Date,
	S.P01, S.P02, S.P03, S.P04, S.P05, S.P06, S.P07,
	S.P08, S.P09, S.P10, S.P11, S.P12, S.P13, S.P14,
	S.P15, S.P16, S.P17, S.P18, S.P19, S.P20, S.P21,
	S.P22, S.P23, S.P24, S.P25, S.P26, S.P27, S.P28,
	S.P29, S.P30, S.P31, S.P32, S.P33, S.P34, S.P35
FROM
	(SELECT @rownum:=@rownum+1 as id, (date('2015-01-01') - interval @rownum day) as date 
		FROM
			(SELECT 0 union all select 1 union all select 3 union all select 4 union all select 5 union all select 6 union all select 6 union all select 7 union all select 8 union all select 9) t1,
			(SELECT 0 union all SELECT 1 union all SELECT 3 union all SELECT 4 union all SELECT 5 union all SELECT 6 union all SELECT 6 union all SELECT 7 union all SELECT 8 union all SELECT 9) t2,
			(SELECT 0 union all SELECT 1 union all SELECT 3 union all SELECT 4 union all SELECT 5 union all SELECT 6 union all SELECT 6 union all SELECT 7 union all SELECT 8 union all SELECT 9) t3,
			(SELECT @rownum:=0) r
	) D left join
	(SELECT 
			C.id as Id,
			C.name as Name,
			PE.date as Date,			
			sum(IF(PE.idproduct=100, quantity, 0)) as P01,
			sum(IF(PE.idproduct=101, quantity, 0)) as P02,
			sum(IF(PE.idproduct=102, quantity, 0)) as P03,
			sum(IF(PE.idproduct=103, quantity, 0)) as P04,
			sum(IF(PE.idproduct=104, quantity, 0)) as  P05,
			sum(IF(PE.idproduct=105, quantity, 0)) as  P06,
			sum(IF(PE.idproduct=106, quantity, 0)) as  P07,
			sum(IF(PE.idproduct=107, quantity, 0)) as  P08,
			sum(IF(PE.idproduct=108, quantity, 0)) as  P09,
			sum(IF(PE.idproduct=109, quantity, 0)) as  P10,
			sum(IF(PE.idproduct=110, quantity, 0)) as  P11,
			sum(IF(PE.idproduct=111, quantity, 0)) as  P12,
			sum(IF(PE.idproduct=112, quantity, 0)) as  P13,
			sum(IF(PE.idproduct=113, quantity, 0)) as  P14,
			sum(IF(PE.idproduct=114, quantity, 0)) as  P15,
			sum(IF(PE.idproduct=115, quantity, 0)) as  P16,
			sum(IF(PE.idproduct=116, quantity, 0)) as  P17,
			sum(IF(PE.idproduct=117, quantity, 0)) as  P18,
			sum(IF(PE.idproduct=118, quantity, 0)) as  P19,
			sum(IF(PE.idproduct=119, quantity, 0)) as  P20,
			sum(IF(PE.idproduct=120, quantity, 0)) as  P21,
			sum(IF(PE.idproduct=121, quantity, 0)) as  P22,
			sum(IF(PE.idproduct=122, quantity, 0)) as  P23,
			sum(IF(PE.idproduct=123, quantity, 0)) as  P24,
			sum(IF(PE.idproduct=124, quantity, 0)) as  P25,
			sum(IF(PE.idproduct=125, quantity, 0)) as  P26,
			sum(IF(PE.idproduct=126, quantity, 0)) as  P27,
			sum(IF(PE.idproduct=127, quantity, 0)) as  P28,
			sum(IF(PE.idproduct=128, quantity, 0)) as  P29,
			sum(IF(PE.idproduct=129, quantity, 0)) as  P30,
			sum(IF(PE.idproduct=130, quantity, 0)) as  P31,
			sum(IF(PE.idproduct=131, quantity, 0)) as  P32,
			sum(IF(PE.idproduct=132, quantity, 0)) as  P33,
			sum(IF(PE.idproduct=133, quantity, 0)) as  P34,
			sum(IF(PE.idproduct=134, quantity, 0)) as  P35
		FROM 
			bracustomer C left join braproductexport PE on C.id = PE.idcustomer
		WHERE
			C.id = ?
		GROUP BY
			PE.date) S
	ON D.date = S.date
WHERE
	D.date>=?	AND D.date<=?
GROUP BY
	D.date
		");
    } 
    function getCollection( array $raw ) {        
		return new ProductExportTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\ProductExportTracking(			
			1,
			$array['Name'],
			$array['Date'],
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
        return "ProductExportTracking";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {}
    
    function doUpdate( \MVC\Domain\Object $object ) {}

	function doDelete( array $values ) { }
	
    function selectStmt() {
        return $this->selectStmt;
    }

    function selectAllStmt() {		
        return $this->selectAllStmt;
    }
	function findBy( $values ) {		
        $this->findByStmt->execute( $values);
        return new ProductExportTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
	function trackBy( $values ) {		
        $this->trackByStmt->execute( $values);
        return new ProductExportTrackingCollection( $this->trackByStmt->fetchAll(), $this );
    }
	function trackBy1( $values ) {		
        $this->trackBy1Stmt->execute( $values);
        return new ProductExportTrackingCollection( $this->trackBy1Stmt->fetchAll(), $this );
    }
}
?>
