<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class ProductImportTracking extends Mapper implements \MVC\Domain\ProductImportTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		
		$this->trackByFactoryStmt = self::$PDO->prepare( 
		"
		select
			S.idfactory as Id,
			S.name as Name,
			D.date as Date,
			sum(S.P01) as P01,
			sum(S.P02) as P02,
			sum(S.P03) as P03,
			sum(S.P04) as P04,
			sum(S.P05) as P05,
			sum(S.P06) as P06,
			sum(S.P07) as P07,
			sum(S.P08) as P08,
			sum(S.P09) as P09,
			sum(S.P10) as P10,
			sum(S.P11) as P11,
			sum(S.P12) as P12,
			sum(S.P13) as P13,
			sum(S.P14) as P14,
			sum(S.P15) as P15,
			sum(S.P16) as P16,
			sum(S.P17) as P17,
			sum(S.P18) as P18,
			sum(S.P19) as P19,
			sum(S.P20) as P20,
			sum(S.P21) as P21,
			sum(S.P22) as P22
		from
	(select @rownum:=@rownum+1 as id, (date('2015-01-01') - interval @rownum day) as date 
	from
		(select 0 union all select 1 union all select 3 union all select 4 union all select 5 union all select 6 union all select 6 union all select 7 union all select 8 union all select 9) t1,
		(select 0 union all select 1 union all select 3 union all select 4 union all select 5 union all select 6 union all select 6 union all select 7 union all select 8 union all select 9) t2,
		(select 0 union all select 1 union all select 3 union all select 4 union all select 5 union all select 6 union all select 6 union all select 7 union all select 8 union all select 9) t3,
		(SELECT @rownum:=0) r) D
	left join
	(SELECT 
		idfactory,
		(select name from brafactory where id=PI.idfactory) as name,
		date,
		if (idproduct=1,sum(quantity), 0) as P01,
		if (idproduct=2,sum(quantity), 0) as P02,
		if (idproduct=9,sum(quantity), 0) as P03,
		if (idproduct=10,sum(quantity), 0) as P04,
		if (idproduct=15,sum(quantity), 0) as P05,
		if (idproduct=16,sum(quantity), 0) as P06,
		if (idproduct=20,sum(quantity), 0) as P07,
		if (idproduct=21,sum(quantity), 0) as P08,
		if (idproduct=25,sum(quantity), 0) as P09,
		if (idproduct=26,sum(quantity), 0) as P10,
		if (idproduct=30,sum(quantity), 0) as P11,
		if (idproduct=34,sum(quantity), 0) as P12,
		if (idproduct=35,sum(quantity), 0) as P13,
		if (idproduct=39,sum(quantity), 0) as P14,
		if (idproduct=40,sum(quantity), 0) as P15,
		if (idproduct=48,sum(quantity), 0) as P16,
		if (idproduct=49,sum(quantity), 0) as P17,
		if (idproduct=50,sum(quantity), 0) as P18,
		if (idproduct=51,sum(quantity), 0) as P19,
		if (idproduct=52,sum(quantity), 0) as P20,
		if (idproduct=53,sum(quantity), 0) as P21,
		if (idproduct=54,sum(quantity), 0) as P22		
	FROM braproductimport PI
	where idfactory=?
	group by
		date, idproduct
	) S
	ON D.date = S.date	
WHERE
	month(D.date)=month(?)	AND year(D.date)=year(?)
GROUP BY
	D.date
		"
		);
		
		$this->trackByDateStmt = self::$PDO->prepare( 
        " 
		SELECT 
			F.id as Id,
			F.name as Name,			
			sum(if(idproduct=1 AND date>=? AND date<=?, quantity, 0)) as P01,
			sum(if(idproduct=2 AND date>=? AND date<=?, quantity, 0)) as P02,
			sum(if(idproduct=9 AND date>=? AND date<=?, quantity, 0)) as P03,
			sum(if(idproduct=10 AND date>=? AND date<=?, quantity, 0)) as P04,
			sum(if(idproduct=15 AND date>=? AND date<=?, quantity, 0)) as P05,
			sum(if(idproduct=16 AND date>=? AND date<=?, quantity, 0)) as P06,
			sum(if(idproduct=20 AND date>=? AND date<=?, quantity, 0)) as P07,
			sum(if(idproduct=21 AND date>=? AND date<=?, quantity, 0)) as P08,
			sum(if(idproduct=25 AND date>=? AND date<=?, quantity, 0)) as P09,
			sum(if(idproduct=26 AND date>=? AND date<=?, quantity, 0)) as P10,
			sum(if(idproduct=30 AND date>=? AND date<=?, quantity, 0)) as P11,
			sum(if(idproduct=34 AND date>=? AND date<=?, quantity, 0)) as P12,
			sum(if(idproduct=35 AND date>=? AND date<=?, quantity, 0)) as P13,
			sum(if(idproduct=39 AND date>=? AND date<=?, quantity, 0)) as P14,
			sum(if(idproduct=40 AND date>=? AND date<=?, quantity, 0)) as P15,
			sum(if(idproduct=48 AND date>=? AND date<=?, quantity, 0)) as P16,
			sum(if(idproduct=49 AND date>=? AND date<=?, quantity, 0)) as P17,
			sum(if(idproduct=50 AND date>=? AND date<=?, quantity, 0)) as P18,
			sum(if(idproduct=51 AND date>=? AND date<=?, quantity, 0)) as P19,
			sum(if(idproduct=52 AND date>=? AND date<=?, quantity, 0)) as P20,
			sum(if(idproduct=53 AND date>=? AND date<=?, quantity, 0)) as P21,
			sum(if(idproduct=54 AND date>=? AND date<=?, quantity, 0)) as P22
		FROM 
			brafactory F left join braproductimport PI on F.id = PI.idfactory
		GROUP BY
			F.id
		");
		$this->sumByDateStmt = self::$PDO->prepare( 
        " 
		SELECT			
			sum(if(idproduct=1 AND date>=? AND date<=?, quantity, 0)) as SP01,
			sum(if(idproduct=2 AND date>=? AND date<=?, quantity, 0)) as SP02,
			sum(if(idproduct=9 AND date>=? AND date<=?, quantity, 0)) as SP03,
			sum(if(idproduct=10 AND date>=? AND date<=?, quantity, 0)) as SP04,
			sum(if(idproduct=15 AND date>=? AND date<=?, quantity, 0)) as SP05,
			sum(if(idproduct=16 AND date>=? AND date<=?, quantity, 0)) as SP06,
			sum(if(idproduct=20 AND date>=? AND date<=?, quantity, 0)) as SP07,
			sum(if(idproduct=21 AND date>=? AND date<=?, quantity, 0)) as SP08,
			sum(if(idproduct=25 AND date>=? AND date<=?, quantity, 0)) as SP09,
			sum(if(idproduct=26 AND date>=? AND date<=?, quantity, 0)) as SP10,
			sum(if(idproduct=30 AND date>=? AND date<=?, quantity, 0)) as SP11,
			sum(if(idproduct=34 AND date>=? AND date<=?, quantity, 0)) as SP12,
			sum(if(idproduct=35 AND date>=? AND date<=?, quantity, 0)) as SP13,
			sum(if(idproduct=39 AND date>=? AND date<=?, quantity, 0)) as SP14,
			sum(if(idproduct=40 AND date>=? AND date<=?, quantity, 0)) as SP15,
			sum(if(idproduct=48 AND date>=? AND date<=?, quantity, 0)) as SP16,
			sum(if(idproduct=49 AND date>=? AND date<=?, quantity, 0)) as SP17,
			sum(if(idproduct=50 AND date>=? AND date<=?, quantity, 0)) as SP18,
			sum(if(idproduct=51 AND date>=? AND date<=?, quantity, 0)) as SP19,
			sum(if(idproduct=52 AND date>=? AND date<=?, quantity, 0)) as SP20,
			sum(if(idproduct=53 AND date>=? AND date<=?, quantity, 0)) as SP21,
			sum(if(idproduct=54 AND date>=? AND date<=?, quantity, 0)) as SP22
		FROM 
			braproductimport
		");
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new ProductImportTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\ProductImportTracking(			
			$array['Id'],
			$array['Name'],
			$array['Date'],			
			$array['P01'], $array['P02'], $array['P03'], $array['P04'], $array['P05'], $array['P06'], 
			$array['P07'], $array['P08'], $array['P09'], $array['P10'], $array['P11'], $array['P12'], 
			$array['P13'], $array['P14'], $array['P15'], $array['P16'], $array['P17'], $array['P18'],
			$array['P19'], $array['P20'], $array['P21'], $array['P22']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "ProductImportTracking";
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
	function trackByFactory( $values ) {
        $this->trackByFactoryStmt->execute( $values);
        return new ProductImportTrackingCollection( $this->trackByFactoryStmt->fetchAll(), $this );
    }
	
	function trackByDate( $values ) {
        $this->trackByDateStmt->execute( $values);
        return new ProductImportTrackingCollection( $this->trackByDateStmt->fetchAll(), $this );
    }
	
	function sumByDate( $values ) {
        $this->sumByDateStmt->execute( $values);
        $a = $this->sumByDateStmt->fetchAll();
        return $a;
    }
	
	function findBy( $values ) {
        $this->findByStmt->execute( $values);
        return new ProductImportTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
}
?>
