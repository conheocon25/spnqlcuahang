<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class SupplierDebt extends Mapper implements \MVC\Domain\SupplierDebtFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT id, idsupplier, date, value, description FROM brasupplierdebt");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT id, idsupplier, date, value, description FROM brasupplierdebt WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE brasupplierdebt SET date=?, value=?, description=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into brasupplierdebt( idsupplier, date, value, description ) 
                             values( ?, ?, ?, ?)");
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM brasupplierdebt WHERE id=?");					 
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idsupplier, date, value, description 
							FROM 
								brasupplierdebt 
							WHERE 
								idsupplier=? AND month(date)=? AND year(date)=?
							");
		$this->findByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idsupplier, date, value, description 
							FROM 
								brasupplierdebt 
							WHERE 
								idsupplier=? AND date>=? AND date<=?
							");
		$this->evalByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								sum(value) 
							FROM 
								brasupplierdebt 
							WHERE 
								idsupplier=? AND date>=? AND date<=?
							");												
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM brasupplierdebt
							WHERE idsupplier=? AND date=?
							");
		$this->trackByStmt = self::$PDO->prepare("
			SELECT	
				S.Id as idsupplier,	
				D.date as date,
				sum(S.Value) as value
			FROM
			(SELECT @rownum:=@rownum+1 as id, (date('2015-01-01') - interval @rownum day) as date 
			FROM
				(SELECT 0 union all select 1 union all select 3 union all select 4 union all select 5 union all select 6 union all select 6 union all select 7 union all select 8 union all select 9) t1,
				(SELECT 0 union all SELECT 1 union all SELECT 3 union all SELECT 4 union all SELECT 5 union all SELECT 6 union all SELECT 6 union all SELECT 7 union all SELECT 8 union all SELECT 9) t2,
				(SELECT 0 union all SELECT 1 union all SELECT 3 union all SELECT 4 union all SELECT 5 union all SELECT 6 union all SELECT 6 union all SELECT 7 union all SELECT 8 union all SELECT 9) t3,
				(SELECT @rownum:=0) r
			) D left join
			(	SELECT
				C.id as Id,
				C.name as Name,	
				CP.date as date,
				sum(CP.value) as Value
			FROM 
				brasupplier C left join brasupplierdebt CP on C.id = CP.idsupplier
			WHERE
				C.id = ?
			GROUP BY
				C.id, CP.date) S
			ON D.date = S.date
			WHERE
				month(D.date)=month(?) AND year(D.date)=year(?)
			GROUP BY
				D.date");
    } 
    function getCollection( array $raw ) {        
		return new SupplierDebtCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\SupplierDebt(
			$array['id'], 
			$array['idsupplier'], 
			$array['date'], 
			$array['value'], 
			$array['description'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "SupplierDebt";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			$object->getIdSupplier(), 
			$object->getDate(), 
			$object->getValue(), 
			$object->getDescription() 
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    function doUpdate( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getDate(), 
			$object->getValue(), 			
			$object->getDescription(), 
			$object->getId()
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
        return new SupplierDebtCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByDate( $values ) {
        $this->findByDateStmt->execute( $values);
        return new SupplierDebtCollection( $this->findByDateStmt->fetchAll(), $this );
    }
	function trackBy( $values ) {		
        $this->trackByStmt->execute( $values);
        return new SupplierDebtCollection( $this->trackByStmt->fetchAll(), $this );
    }
	function evalByDate( $values ) {		
        $this->evalByDateStmt->execute( $values);
		$a = $this->evalByDateStmt->fetchAll();
        return $a[0][0];
    }
	function checkExist( $values ) {		
        $this->checkExistStmt->execute( $values);
		$a = $this->checkExistStmt->fetchAll();
        return $a[0][0];
    }
}
?>
