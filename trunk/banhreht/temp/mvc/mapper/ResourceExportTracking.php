<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class ResourceExportTracking extends Mapper implements \MVC\Domain\ResourceExportTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->trackByFactoryStmt = self::$PDO->prepare( 			
	"SELECT 
	S.Id as Id,
	S.Name as Name,
	D.date Date,
	sum(S.R01) as R01,
	sum(S.R02) as R02,
	sum(S.R03) as R03,
	sum(S.R04) as R04,
	sum(S.R05) as R05,
	sum(S.R06) as R06,
	sum(S.R07) as R07,
	sum(S.R08) as R08,
	sum(S.R09) as R09
FROM
	(SELECT @rownum:=@rownum+1 as id, (date('2015-01-01') - interval @rownum day) as date 
	FROM
		(SELECT 0 union all select 1 union all select 3 union all select 4 union all select 5 union all select 6 union all select 6 union all select 7 union all select 8 union all select 9) t1,
		(SELECT 0 union all SELECT 1 union all SELECT 3 union all SELECT 4 union all SELECT 5 union all SELECT 6 union all SELECT 6 union all SELECT 7 union all SELECT 8 union all SELECT 9) t2,
		(SELECT 0 union all SELECT 1 union all SELECT 3 union all SELECT 4 union all SELECT 5 union all SELECT 6 union all SELECT 6 union all SELECT 7 union all SELECT 8 union all SELECT 9) t3,
		(SELECT @rownum:=0) r) D
	left join
	(	SELECT
			F.id as Id,
			F.name as Name,	
			RE.Date,
			sum(IF(idresource=1, RE.quantity, 0)) as R01,
			SUM(IF(idresource=2, RE.quantity, 0)) as R02,
			SUM(IF(idresource=3, RE.quantity, 0)) as R03,
			SUM(IF(idresource=4, RE.quantity, 0)) as R04,
			SUM(IF(idresource=5, RE.quantity, 0)) as R05,
			SUM(IF(idresource=6, RE.quantity, 0)) as R06,
			SUM(IF(idresource=7, RE.quantity, 0)) as R07,
			SUM(IF(idresource=8, RE.quantity, 0)) as R08,
			SUM(IF(idresource=9, RE.quantity, 0)) as R09
		FROM 
			brafactory F left join braresourceexport RE on F.id = RE.idfactory
		WHERE
			F.id=?
		GROUP BY
			RE.Date, RE.idresource		
	)as S ON D.date = S.date
WHERE
	month(D.date)=month(?)	AND year(D.date)=year(?)
GROUP BY
	D.date");
		$this->trackByDateStmt = self::$PDO->prepare("
SELECT
		F.id as Id,
		F.name as Name,
		SUM(IF(idresource=1 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R01,
		SUM(IF(idresource=2 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R02,
		SUM(IF(idresource=3 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R03,
		SUM(IF(idresource=4 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R04,
		SUM(IF(idresource=5 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R05,
		SUM(IF(idresource=6 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R06,
		SUM(IF(idresource=7 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R07,
		SUM(IF(idresource=8 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R08,
		SUM(IF(idresource=9 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R09
	FROM 
		brafactory F left join braresourceexport RE on F.id = RE.idfactory
	GROUP BY
		F.id
		");
		$this->sumByDateStmt = self::$PDO->prepare("
SELECT		
		SUM(IF(idresource=1 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R01,
		SUM(IF(idresource=2 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R02,
		SUM(IF(idresource=3 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R03,
		SUM(IF(idresource=4 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R04,
		SUM(IF(idresource=5 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R05,
		SUM(IF(idresource=6 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R06,
		SUM(IF(idresource=7 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R07,
		SUM(IF(idresource=8 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R08,
		SUM(IF(idresource=9 AND RE.date>=? AND RE.date<=?, RE.quantity, 0)) as R09
	FROM 
		braresourceexport RE
		");
				
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new ResourceExportTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\ResourceExportTracking(			
			$array['Id'],
			$array['Name'],
			$array['Date'],
			$array['R01'],
			$array['R02'],
			$array['R03'],
			$array['R04'],
			$array['R05'],
			$array['R06'],
			$array['R07'],
			$array['R08'],
			$array['R09']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "ResourceExportTracking";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {}
    
    function doUpdate( \MVC\Domain\Object $object ) {}

	function doDelete( array $values ) {}
	
    function selectStmt() {
        return $this->selectStmt;
    }

    function selectAllStmt() {		
        return $this->selectAllStmt;
    }	
	function trackByFactory( $values ) {		
        $this->trackByFactoryStmt->execute( $values);
        return new ResourceExportTrackingCollection( $this->trackByFactoryStmt->fetchAll(), $this );
    }
	function trackByDate( $values ) {
        $this->trackByDateStmt->execute( $values);
        return new ResourceExportTrackingCollection( $this->trackByDateStmt->fetchAll(), $this );
    }
	function sumByDate( $values ) {
		$this->sumByDateStmt->execute( $values);
		$a = $this->sumByDateStmt->fetchAll();
        return $a;
    }
}
?>
