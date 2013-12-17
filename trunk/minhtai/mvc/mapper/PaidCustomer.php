<?php
namespace MVC\Mapper;

require_once( "mvc/base/Mapper.php" );
class PaidCustomer extends Mapper implements \MVC\Domain\PaidCustomerFinder {

    function __construct() {
        parent::__construct();
				
		$tblPaidCustomer = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."paid_customer";
		
		$selectAllStmt = sprintf("select * from %s", $tblPaidCustomer);
		$selectStmt = sprintf("select * from %s where id=?", $tblPaidCustomer);
		$updateStmt = sprintf("update %s set id_customer=?, date=?, value=?, note=? where id=?", $tblPaidCustomer);
		$insertStmt = sprintf("insert into %s (id_customer, date, value, note) values(?,?,?,?)", $tblPaidCustomer);
		$deleteStmt = sprintf("delete from %s where id=?", $tblPaidCustomer);
		$findByStmt = sprintf("select * from %s where id_customer = ? order by date DESC", $tblPaidCustomer);
		$findByTop10Stmt = sprintf("select * from %s where id_customer = ? order by date DESC LIMIT 30", $tblPaidCustomer);
		
		$findByTrackingStmt = sprintf(
			"select
				*
			from 
				%s
			where
				date >= ? AND date <= ?
			order by 
				date DESC
			"
		, $tblPaidCustomer);
		$findByTracking1Stmt = sprintf(
			"select
				*
			from 
				%s
			where
				id_customer=? AND date >= ? AND date <= ?
			order by 
				date DESC
			"
		, $tblPaidCustomer);
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByTop10Stmt = self::$PDO->prepare($findByTop10Stmt);
		$this->findByTrackingStmt = self::$PDO->prepare($findByTrackingStmt);
		$this->findByTracking1Stmt = self::$PDO->prepare($findByTracking1Stmt);		
    } 
    function getCollection( array $raw ) {
        return new PaidCustomerCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\PaidCustomer( 
			$array['id'],
			$array['id_customer'],
			$array['date'],
			$array['value'],
			$array['note']
		);
        return $obj;
    }

    protected function targetClass() {        
		return "PaidCustomer";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getIdCustomer(),
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

    function selectStmt() {
        return $this->selectStmt;
    }
    function selectAllStmt() {
        return $this->selectAllStmt;
    }
	
	function findBy($values ){
        $this->findByStmt->execute( $values );
        return new PaidCustomerCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByTop10($values ){
        $this->findByTop10Stmt->execute( $values );
        return new PaidCustomerCollection( $this->findByTop10Stmt->fetchAll(), $this );
    }
	
	function findByTracking($values ){
        $this->findByTrackingStmt->execute( $values );
        return new PaidCustomerCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
	
	function findByTracking1($values ){
        $this->findByTracking1Stmt->execute( $values );
        return new PaidCustomerCollection( $this->findByTracking1Stmt->fetchAll(), $this );
    }
	
	function create( $prefix ){
		$tblSupplier = $prefix."supplier";
		$tblPaidCustomer = $prefix."supplier_paid";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS %s (
		", $tblPaidCustomer, $tblPaidCustomer, $tblPaidCustomer, $tblPaidCustomer."_1", $tblSupplier);
		$this->createStmt = self::$PDO->prepare($createStmt);		
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	
	function drop( $prefix ){
		$tblPaidCustomer = $prefix."supplier_paid";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblPaidCustomer);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>