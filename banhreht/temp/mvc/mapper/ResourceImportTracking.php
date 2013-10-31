<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class ResourceImportTracking extends Mapper implements \MVC\Domain\ResourceImportTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->trackBySupplierStmt = self::$PDO->prepare( 			
	"SELECT 
	S.Id as Id,
	S.Name as Name,
	D.date Date,
	sum(S.R01) as Resource01,
	sum(S.R02) as Resource02,
	sum(S.R03) as Resource03,
	sum(S.R04) as Resource04,
	sum(S.R05) as Resource05,
	sum(S.R06) as Resource06,
	sum(S.R07) as Resource07,
	sum(S.R08) as Resource08,
	sum(S.R09) as Resource09,
	sum(S.R10) as Resource10	
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
			SUM(IF(idresource=9, RE.quantity, 0)) as R09,
			SUM(IF(idresource=10, RE.quantity, 0)) as R10
		FROM 
			brasupplier F left join braresourceimport RE on F.id = RE.idsupplier
		WHERE
			F.id=?
		GROUP BY
			RE.Date, RE.idresource
	)as S ON D.date = S.date
WHERE
	month(D.date)=month(?)	AND year(D.date)=year(?)
GROUP BY
	D.date");
				
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new ResourceImportTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\ResourceImportTracking(			
			$array['Id'],
			$array['Name'],
			$array['Date'],
			$array['Resource01'],
			$array['Resource02'],
			$array['Resource03'],
			$array['Resource04'],
			$array['Resource05'],
			$array['Resource06'],
			$array['Resource07'],
			$array['Resource08'],
			$array['Resource09'],
			$array['Resource10']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "ResourceImportTracking";
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
	function findBy( $values ) {		
        $this->findByStmt->execute( $values);
        return new ResourceImportTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByG1( $values ) {		
        $this->findByG1Stmt->execute( $values);
        return new ResourceImportTrackingCollection( $this->findByG1Stmt->fetchAll(), $this );
    }
	function findByG2( $values ) {		
        $this->findByG2Stmt->execute( $values);
        return new ResourceImportTrackingCollection( $this->findByG2Stmt->fetchAll(), $this );
    }
	function trackBySupplier( $values ) {		
        $this->trackBySupplierStmt->execute( $values);
        return new ResourceImportTrackingCollection( $this->trackBySupplierStmt->fetchAll(), $this );
    }
}
?>
