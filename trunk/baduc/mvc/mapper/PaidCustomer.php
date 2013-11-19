<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class PaidCustomer extends Mapper implements \MVC\Domain\PaidCustomerFinder{

    function __construct() {
        parent::__construct();
				
		$tblPaid = "tbl_paid_customer";
		
		$selectAllStmt = sprintf("select * from %s", $tblPaid);
		$selectStmt = sprintf("select * from %s where id=?", $tblPaid);
		$updateStmt = sprintf("update %s set id_customer=?, id_tracking=?, date=?, value=?, note=? where id=?", $tblPaid);
		$insertStmt = sprintf("insert into %s (id_customer, id_tracking, date, value, note) values(?,?,?,?,?)", $tblPaid);
		$deleteStmt = sprintf("delete from %s where id=?", $tblPaid);
		$findByStmt = sprintf("select * from %s where id_customer=? order by date DESC", $tblPaid);
		$findByTrackingStmt = sprintf(
					"select * from %s
					where
						id_tracking=? AND date >= ? AND date <= ?
					order by
						date DESC
					"
		, $tblPaid);
			
		$findByPageStmt = sprintf("
							SELECT * 
							FROM %s 							 
							WHERE id_customer=:id_customer
							ORDER BY date desc
							LIMIT :start,:max
				", $tblPaid);
				
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByTrackingStmt = self::$PDO->prepare($findByTrackingStmt);		
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByPageStmt = self::$PDO->prepare($findByPageStmt);
    } 
	
    function getCollection( array $raw ) {return new PaidCustomerCollection( $raw, $this );}
    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\PaidCustomer( 
			$array['id'],
			$array['id_customer'],
			$array['id_tracking'],
			$array['date'],
			$array['value'],
			$array['note']
		);
        return $obj;
    }

    protected function targetClass() {return "PaidCustomer";}

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(			
			$object->getIdCustomer(),
			$object->getIdTracking(),
			$object->getDate(),
			$object->getValue(),
			$object->getNote()
		); 
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }
    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdCustomer(),
			$object->getIdTracking(),
			$object->getDate(),
			$object->getValue(),
			$object->getNote(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }

	protected function doDelete(array $values) {
        return $this->deleteStmt->execute( $values );
    }

    function selectStmt() {return $this->selectStmt;}    
	function selectAllStmt() {return $this->selectAllStmt;}
	
	function findBy($values ){
        $this->findByStmt->execute( $values );
        return new PaidCustomerCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByTracking($values ) {	
        $this->findByTrackingStmt->execute( $values );
        return new PaidCustomerCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
			
	function findByPage( $values ) {		
		$this->findByPageStmt->bindValue(':id_customer', $values[0], \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':start', ((int)($values[1])-1)*(int)($values[2]), \PDO::PARAM_INT);
		$this->findByPageStmt->bindValue(':max', (int)($values[2]), \PDO::PARAM_INT);		
		$this->findByPageStmt->execute();
        return new PaidCustomerCollection( $this->findByPageStmt->fetchAll(), $this );
    }	
}
?>