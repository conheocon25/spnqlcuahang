<?php
Namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );

class CustomerPaid extends Mapper implements \MVC\Domain\CustomerPaidFinder {

    function __construct() {
        parent::__construct();
        $this->selectAllStmt = self::$PDO->prepare( 
                            "SELECT id, idcustomer, date, value, description FROM bracustomerpaid");
        $this->selectStmt = self::$PDO->prepare( 
                            "SELECT id, idcustomer, date, value, description FROM bracustomerpaid WHERE id=?");
        $this->updateStmt = self::$PDO->prepare( 
                            "UPDATE bracustomerpaid SET date=?, value=?, description=? WHERE id=?");
        $this->insertStmt = self::$PDO->prepare( 
                            "INSERT into bracustomerpaid( idcustomer, date, value, description ) 
                             values( ?, ?, ?, ?)");
		$this->findByStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idcustomer, date, value, description 
							FROM 
								bracustomerpaid 
							WHERE 
								idcustomer=? AND month(date)=? AND year(date)=?
							");
		$this->findByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								id, idcustomer, date, value, description 
							FROM 
								bracustomerpaid 
							WHERE 
								idcustomer=? AND date >=? AND date<=?
							ORDER BY
								date 	
							");
		$this->evalByDateStmt = self::$PDO->prepare( 
                            "SELECT 
								sum(value) as value
							FROM 
								bracustomerpaid 
							WHERE 
								idcustomer=? AND date >=? AND date<=?
							");										
		$this->deleteStmt = self::$PDO->prepare( 
                            "DELETE FROM bracustomerpaid WHERE id=?");
		$this->checkExistStmt = self::$PDO->prepare( 
                            "SELECT id
							FROM bracustomerpaid FL
							WHERE idcustomer=? AND date=?
							");
		$this->trackByStmt = self::$PDO->prepare("
			SELECT	
				S.Id as idcustomer,	
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
				bracustomer C left join bracustomerpaid CP on C.id = CP.idcustomer
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
		return new CustomerPaidCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\CustomerPaid(
			$array['id'], 
			$array['idcustomer'], 
			$array['date'], 
			$array['value'], 
			$array['description'] );
        return $obj;
    }
	
    protected function targetClass() {
        return "CustomerPaid";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 					
			$object->getIdCustomer(), 
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
	function trackBy( $values ) {		
        $this->trackByStmt->execute( $values);
        return new CustomerPaidCollection( $this->trackByStmt->fetchAll(), $this );
    }
	function findBy( $values ) {		
        $this->findByStmt->execute( $values);
        return new CustomerPaidCollection( $this->findByStmt->fetchAll(), $this );
    }
	function findByDate( $values ) {		
        $this->findByDateStmt->execute( $values);
        return new CustomerPaidCollection( $this->findByDateStmt->fetchAll(), $this );
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
