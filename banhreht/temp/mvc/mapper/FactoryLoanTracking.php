<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class FactoryLoanTracking extends Mapper implements \MVC\Domain\FactoryLoanTrackingFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare("");
        $this->selectStmt = self::$PDO->prepare("");
        $this->updateStmt = self::$PDO->prepare("");
        $this->insertStmt = self::$PDO->prepare("");
		$this->trackByFactoryStmt = self::$PDO->prepare("
		SELECT
	S.Id as Id,
	S.Name as Name,
	D.date as Date,
	sum(S.Value) as Value,
	S.description as Description
	FROM
	(SELECT @rownum:=@rownum+1 as id, (date('2015-01-01') - interval @rownum day) as date 
		FROM
			(SELECT 0 union all select 1 union all select 3 union all select 4 union all select 5 union all select 6 union all select 6 union all select 7 union all select 8 union all select 9) t1,
			(SELECT 0 union all SELECT 1 union all SELECT 3 union all SELECT 4 union all SELECT 5 union all SELECT 6 union all SELECT 6 union all SELECT 7 union all SELECT 8 union all SELECT 9) t2,
			(SELECT 0 union all SELECT 1 union all SELECT 3 union all SELECT 4 union all SELECT 5 union all SELECT 6 union all SELECT 6 union all SELECT 7 union all SELECT 8 union all SELECT 9) t3,
			(SELECT @rownum:=0) r
	) D left join
	(	SELECT
			F.id as Id,
			F.name as Name,	
			FL.date as date,
			sum(FL.value) as Value,
			FL.description as description
		FROM 
			brafactory F left join brafactoryloan FL on F.id = FL.idfactory
		WHERE
			F.id = ?
		GROUP BY
			F.id, FL.date) S
	ON D.date = S.date
WHERE
	month(D.date)=month(?)	AND year(D.date)=year(?)
GROUP BY
	D.date");
		
		$this->findByStmt = self::$PDO->prepare( 
        "SELECT 
			F.id as Id,
			F.name as Name,	
			(?) as Date,
			sum(IF(FL.date=?, FL.value, 0)) as Value
		FROM 
			brafactory F left join brafactoryloan FL on F.id = FL.idfactory
		GROUP BY
			F.id
		ORDER BY			
			F.type desc, F.name
		");
		$this->deleteStmt = self::$PDO->prepare("");		
    } 
    function getCollection( array $raw ) {        
		return new FactoryLoanTrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\FactoryLoanTracking(
			$array['Id'],
			$array['Name'],
			$array['Date'],
			$array['Value'],
			$array['Description']
		);
        return $obj;
    }
	
    protected function targetClass() {
        return "FactoryLoanTracking";
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
	function trackByFactory( $values ) {
        $this->trackByFactoryStmt->execute( $values);
        return new FactoryLoanTrackingCollection( $this->trackByFactoryStmt->fetchAll(), $this );
    }
	function findBy( $values ) {
        $this->findByStmt->execute( $values);
        return new FactoryLoanTrackingCollection( $this->findByStmt->fetchAll(), $this );
    }
}
?>
