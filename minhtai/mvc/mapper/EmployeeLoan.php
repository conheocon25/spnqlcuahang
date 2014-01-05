<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class EmployeeLoan extends Mapper implements \MVC\Domain\EmployeeLoanFinder{

    function __construct() {
        parent::__construct();
				
		$tblEmployeeLoan = $tblCategory = @\MVC\Base\SessionRegistry::getCurrentUser()->getApp()->getPrefix()."employee_loan";
						
		$selectAllStmt = sprintf("select * from %s", $tblEmployeeLoan);
		$selectStmt = sprintf("select * from %s where id=?", $tblEmployeeLoan);
		$updateStmt = sprintf("update %s set idemployee=?, date=?, value=?, note=? where id=?", $tblEmployeeLoan);
		$insertStmt = sprintf("insert into %s (idemployee, date, value, note) values(?, ?, ?, ?)", $tblEmployeeLoan);
		$deleteStmt = sprintf("delete from %s where id=?", $tblEmployeeLoan);
		$findByEmployeeStmt = sprintf("select * from %s where idemployee=?", $tblEmployeeLoan);
				
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByEmployeeStmt = self::$PDO->prepare($findByEmployeeStmt);
			
    } 
    function getCollection( array $raw ) {
        return new EmployeeLoanCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {		
        $obj = new \MVC\Domain\EmployeeLoan( 
			$array['id'],			
			$array['idemployee'],
			$array['date'],
			$array['value'],			
			$array['note']
		);
        return $obj;
    }
	
    protected function targetClass() {        
		return "EmployeeLoan";
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
    
	function findByEmployee($values ) {	
        $this->findByEmployeeStmt->execute( $values );
        return new EmployeeLoanCollection( $this->findByEmployeeStmt->fetchAll(), $this );
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
    function selectStmt() {return $this->selectStmt;}	
    function selectAllStmt() {return $this->selectAllStmt;}
		
}
?>