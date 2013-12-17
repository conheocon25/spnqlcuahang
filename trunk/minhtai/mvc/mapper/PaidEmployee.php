<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class PaidEmployee extends Mapper implements \MVC\Domain\PaidEmployeeFinder{

    function __construct() {
        parent::__construct();
				
		$tblPaidEmployee = $tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."paid_employee";
						
		$selectAllStmt = sprintf("select * from %s", $tblPaidEmployee);
		$selectStmt = sprintf("select * from %s where id=?", $tblPaidEmployee);
		$updateStmt = sprintf("update %s set id_employee=?, date=?, value=?, note=? where id=?", $tblPaidEmployee);
		$insertStmt = sprintf("insert into %s (id_employee, date, value, note) values(?, ?, ?, ?)", $tblPaidEmployee);
		$deleteStmt = sprintf("delete from %s where id=?", $tblPaidEmployee);
		$findByStmt = sprintf("select * from %s where id_employee=? ORDER BY date DESC", $tblPaidEmployee);
		$findByTop10Stmt = sprintf("select * from %s where id_employee=? ORDER BY date DESC LIMIT 30", $tblPaidEmployee);
		$findByTrackingStmt = sprintf("select * from %s where id_employee=? AND date>=? AND date<=?", $tblPaidEmployee);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByStmt = self::$PDO->prepare($findByStmt);
		$this->findByTop10Stmt = self::$PDO->prepare($findByTop10Stmt);
		$this->findByTrackingStmt = self::$PDO->prepare($findByTrackingStmt);
			
    } 
    function getCollection( array $raw ) {
        return new PaidEmployeeCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\PaidEmployee( 
			$array['id'],			
			$array['id_employee'],
			$array['date'],
			$array['value'],			
			$array['note']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "PaidEmployee";
    }

    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 			
			$object->getIdEmployee(),
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
			$object->getIdEmployee(),
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
	
	function findBy($values ) {	
        $this->findByStmt->execute( $values );
        return new PaidEmployeeCollection( $this->findByStmt->fetchAll(), $this );
    }
	
	function findByTop10($values ) {	
        $this->findByTop10Stmt->execute( $values );
        return new PaidEmployeeCollection( $this->findByTop10Stmt->fetchAll(), $this );
    }
	
	function findByTracking($values ) {	
        $this->findByTrackingStmt->execute( $values );
        return new PaidEmployeeCollection( $this->findByTrackingStmt->fetchAll(), $this );
    }
	
	function create( $prefix ){
		$tblEmployee = $prefix."employee";
		$tblPaidEmployee = $prefix."employee_paid";
		$createStmt = sprintf("
			CREATE TABLE IF NOT EXISTS `%s` (
		", $tblPaidEmployee, $tblPaidEmployee, $tblPaidEmployee."_1", $tblEmployee);
		$this->createStmt = self::$PDO->prepare($createStmt);		
        $this->createStmt->execute( null );
		$this->createStmt->closeCursor();
    }
	function drop( $prefix ){
		$tblPaidEmployeePaid = $prefix."employee_paid";
		$dropStmt = sprintf("
			DROP TABLE %s", $tblPaidEmployeePaid);
		$this->dropStmt = self::$PDO->prepare($dropStmt);
        $this->dropStmt->execute( null );
		$this->dropStmt->closeCursor();
    }
}
?>